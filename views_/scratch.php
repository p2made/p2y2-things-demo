<!DOCTYPE html>
<!-- https://dev.development.p2m/things -->
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-param" content="_csrf-frontend">
	<meta name="csrf-token" content="y1HmhYXl-ShFowTdTn_uV3UmpZ03TSyYS53aW4waBO-pBKDG7qfOey_MNLAMGtotPEDr7gApTqE8zqg0400p3Q==">
	<title>P2Y2Things | P2Y2Things</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css" integrity="sha512-fjy4e481VEA/OTVR4+WHMlZ4wcX/+ohNWKpVfb7q+YNnOCS++4ZDn3Vi6EaA2HJ89VXARJt7VvuAKaQ/gs1CbQ==" rel="stylesheet" crossorigin="anonymous" referrerpolicy="no-referrer">
	<script src="https://kit.fontawesome.com/7a226d9121.js" crossorigin="anonymous"></script>
	<link href="./assets/css/p2additions.css" rel="stylesheet">
</head>
<body>

	<nav id="w0" class="navbar-p2m navbar-inverse navbar-fixed-top navbar">
		<div class="container">
			<a class="navbar-brand" href="/index.php">
				<img width="150" height="50" src="http://placehold.it/150x50/222222/FFCC00?text=P2Y2Things" alt="P2Y2Things">
			</a>
			<button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#w0-collapse" aria-controls="w0-collapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div id="w0-collapse" class="collapse navbar-collapse">
				<ul id="w1" class="navbar-nav navbar-right nav">
				<li class="dropdown nav-item">
							<a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false">Charts</a>
							<div id="w2" class="dropdown-menu">
								<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=flot">Flot Charts</a>
								<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=morris">Morris.js Charts</a>
							</div>
						</li>
				<li class="dropdown nav-item">
							<a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false">Demos</a>
							<div id="w3" class="dropdown-menu">
								<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=is-gd">is.gd</a>
								<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=uuid">UUID</a>
								<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=tables">Tables</a>
								<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=forms">Forms</a>
								<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=calendar">Calendar</a>
								<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=animate">Animate.css</a>
							</div>
						</li>
				<li class="dropdown nav-item">
							<a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false">UI Elements</a>
							<div id="w4" class="dropdown-menu">
								<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=panels-wells">Panels and Wells</a>
								<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=buttons">Buttons</a>
								<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=notifications">Notifications</a>
								<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=typography">Typography</a>
								<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=grid">Grid</a>
								<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=shortcodes">Shortcodes</a>
							</div>
						</li>
				<li class="dropdown nav-item">
							<a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false">Icons</a>
							<div id="w5" class="dropdown-menu">
								<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=font-awesome">Font Awesome</a>
								<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=font-awesome-examples">Font Awesome Examples</a>
								<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=glyphicons">Glyphicons</a>
						<li class="divider"></li>
						<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=flag-icon-css">Flag Icon CSS</a>
						<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=bootstrap-social">Bootstrap Social</a>
				</div>
				</li>
				<li class="dropdown nav-item">
					<a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false">Pages</a>
					<div id="w6" class="dropdown-menu">
						<a class="dropdown-item" href="/index.php?r=site%2Fabout">About</a>
						<a class="dropdown-item" href="/index.php?r=site%2Fcontact">Contact</a>
						<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=blank">Blank Page</a>
					</div>
				</li>
				<li class="dropdown nav-item">
					<a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false">Developer</a>
					<div id="w7" class="dropdown-menu">
						<a class="dropdown-item" href="/index.php?r=gii">Gii</a>
						<a class="dropdown-item" href="/index.php?r=debug">Debug</a>
						<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=scratchpad">Scratchpad</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">... in progress</a>
				</li>
				<li class="dropdown dropdown nav-item">
					<a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false">User</a>
					<div id="w8" class="dropdown-menu">
						<a class="dropdown-item" href="/index.php?r=site%2Fsignup">Signup</a>
						<a class="dropdown-item" href="/index.php?r=site%2Flogin">Login</a>
					</div>
				</li>
				</ul>
			</div>
	</div>
	</nav>

	<!-- Responsive navbar-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container px-5">
			<a class="navbar-brand" href="#!">Business</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="#!">About</a></li>
					<li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
					<li class="nav-item"><a class="nav-link" href="#!">Services</a></li>
				</ul>
			</div>
		</div>
	</nav>

		<!-- Navigation-->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container px-5">
				<a class="navbar-brand" href="index.php">Business</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
						<li class="nav-item"><a class="nav-link" href="pricing.php">Pricing</a></li>
						<li class="nav-item"><a class="nav-link" href="faq.php">FAQ</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
							<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
								<li><a class="dropdown-item" href="blog-home.php">Blog Home</a></li>
								<li><a class="dropdown-item" href="blog-post.php">Blog Post</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Portfolio</a>
							<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
								<li><a class="dropdown-item" href="portfolio-overview.php">Portfolio Overview</a></li>
								<li><a class="dropdown-item" href="portfolio-item.php">Portfolio Item</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>








	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-vtXRMe3mGCbOeY7l30aIg8H9p3GdeSe4IFlP6G8JMa7o7lXvnz3GFKzPxzJdPfGK" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
	<!-- <script src="/assets/e690261c/yii.js"></script> -->
	<script src="./assets/js/p2additions.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.3.0/raphael.min.js" integrity="sha512-tBzZQxySO5q5lqwLWfu8Q+o4VkTcRGOeQGVQ0ueJga4A1RKuzmAu5HXDOXLEjpbKyV7ow9ympVoa6wZLEzRzDg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js" integrity="sha512-6Cwk0kyyPu8pyO9DdwyN+jcGzvZQbUzQNLI0PadCY3ikWFXW9Jkat+yrnloE63dzAKmJ1WNeryPd1yszfj7kqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="./data/morris-data.js"></script>
</body>
</html>
