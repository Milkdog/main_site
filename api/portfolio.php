<?php

require_once ('../config/db.php');

/**
 * Fixes the data from the database for use with this site
 * Should only be used with array_walk / array_walk_recursive
 * @param string $value The value from the array
 * @param string $key The key from the array
 */
function fixData(&$value, $key) {
	if ($key == 'thumb') {
		// Thumbnail links must start with a "/"
		if (substr($value, 0, 1) != '/') {
			$value = '/' . $value;
		}
		
		// Use full size image for thumbnail
		if (substr($value, -6, 3) == '_t.') {
			$value = str_replace('_t.jpg', '.jpg', $value);
		}
	}
	
	if ($key == 'description') {
		$value = nl2br($value);
	}
}

try {
	//Gets all of the items on the site
	$itemsSql = "SELECT `id`, `title`, `description`, `category`, `link`, `thumb`, `flash`, `date`, `int_html`, `int_php`, `int_css`, `int_design`, `int_flash`, `int_3d`, `int_brand`, `int_mysql`, `group`
		FROM site_items
		WHERE hide = 0
		ORDER BY date DESC";
		
	$stmt = $pdo->prepare($itemsSql);
	$stmt->execute();
	
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
	// Fix the results for the links
	array_walk_recursive($results, "fixData");
	
	$outputJson = json_encode($results);
} catch (PDOException $e) {
	print "Error!: " . $e -> getMessage() . "<br/>";
	die();
}

echo $outputJson;

?>