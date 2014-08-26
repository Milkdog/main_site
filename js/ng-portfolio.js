(function() {

	// Start the Angular module for the portfolio
	var app = angular.module('portfolio', []);

	app.controller('portfolioController', ['$http',
	function($http) {
		// Set the URL for HTML5 mode
		//$locationProvider.html5Mode(true);

		var portfolio = this;
		portfolio.rows = [];

		$http.get('api/portfolio.php').success(function(data) {
			var rows = [];
			for (var i = 0; i < data.length; i++) {
				if (i % 4 == 0)
					rows.push([]);
				rows[rows.length - 1].push(data[i]);
			}

			portfolio.rows = rows;

		});
	}]);

})();
