(function() {

	// Start the Angular module for the portfolio
	var portfolioApp = angular.module('portfolioApp', ['ngSanitize']);
	
	// Setup the portfolio Controller with http
	portfolioApp.controller('portfolioController', ['$http', '$sce',
	function($http, $sce) {
		var portfolio = this;
		portfolio.rows = [];
		
		// Get the portfolio items from the API
		$http.get('api/portfolio.php').success(function(data) {
			// Break the portfolio items into rows of 4
			var rows = [];
			for (var i = 0; i < data.length; i++) {
				data[i].description = $sce.trustAsHtml(data[i].description);
				if (i % 4 == 0)
					rows.push([]);
				rows[rows.length - 1].push(data[i]);
			}

			portfolio.rows = rows;

		});
	}]);
	

})();
