<!DOCTYPE html>
<html lang="en" ng-app="portfolioApp">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Chris Mielke - San Francisco Web Developer</title>

		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/mdd.css" rel="stylesheet">
	</head>
	<body>
		<div class="container-fluid name-banner">
			<h1>Chris Mielke</h1>
		</div>
		<div class="navbar" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">Chris Mielke</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#">Home</a>
						</li>
						<li>
							<a href="/resume/Chris-Mielke-Resume.pdf">Download Resume <span class="glyphicon glyphicon-cloud-download"></span></a>
						</li>
						<li>
							<a href="http://www.linkedin.com/in/chrismielke/" target="_blank">LinkedIn <span class="glyphicon glyphicon-new-window"></span></a>
						</li>
						<li>
							<a href="https://github.com/Milkdog" target="_blank">GitHub <span class="glyphicon glyphicon-new-window"></span></a>
						</li>
						<li>
							<a href='&#109;ailto&#58;chr%69s&#64;mi%6Ck&#100;%6F&#103;desi&#103;n&#46;c&#111;&#109;'>Contact</a>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>

		<div class="jumbotron">
			<div class="container">
				<img class="pull-right" src="/images/profile.jpg" alt="Chris Mielke" style="height: 160px;">
				<p>
					<strong>Chris Mielke</strong> is a web developer with 8+ years of PHP, HTML, CSS experience. Over 4 years of javascript experience using jQuery and learning AngularJS. A background in graphic design and UI/UX experience helps with being a creative, problem solving frontend and fullstack developer.
				</p>
				<p>
					<a class="btn btn-primary btn-lg" role="button" href="/resume/Chris-Mielke-Resume.pdf">Download Resume <span class="glyphicon glyphicon-cloud-download"></span></a>
				</p>
			</div>
		</div>

		<div class="container-fluid" ng-controller="portfolioController as portfolio">

			<div class="row" ng-repeat="row in portfolio.rows">
				<div class="col-md-3" ng-repeat="item in row">
					<div class="item-image-wrapper">
						<img ng-src="{{item.thumb}}" alt="{{item.name}}" style=" height: auto; width: 100%;">
					</div>
					<h2>{{item.name}}</h2>
					<p ng-bind-html="item.description"></p>
					<p>
						<a class="btn btn-default" href="{{item.link}}" role="button" target="_blank">View details &raquo;</a>
					</p>
				</div>

			</div>

			<hr>

			<footer>
				<p>
					&copy; Chris Mielke 2014
				</p>
			</footer>
		</div>
		<!-- /container -->

		<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular-sanitize.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/ng-portfolio.js"></script>
	</body>
</html>