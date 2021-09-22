<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Video Background Header</title>
	<!-- Favicon-->
	<link href="assets/img/favicon.ico" type="image/x-icon" rel="icon">
	<!-- Core theme CSS (includes Bootstrap)-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" rel="stylesheet">
	<link href="assets/css/video-background-header.css" rel="stylesheet">
</head>
<body>

	<header>
		<!-- This div is	intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
		<div class="overlay"></div>

		<!-- The HTML5 video element that will create the background video on the header -->
		<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
			<source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
		</video>

		<!-- The header content -->
		<div class="container h-100">
			<div class="d-flex h-100 text-center align-items-center">
				<div class="w-100 text-white">
					<h1 class="display-3">Video Header</h1>
					<p class="lead mb-0">Using HTML5 Video and Bootstrap</p>
				</div>
			</div>
		</div>
	</header>

	<!-- Page section example for content below the video header -->
	<section class="my-5">
		<div class="container">
			<div class="row">
				<div class="col-md-8 mx-auto">
					<p>The HTML5 video element uses an mp4 video as a source. Change the source video to add in your own background! The header text is vertically centered using flex utilities that are built into Bootstrap.</p>
					<p>The overlay color and opacity can be changed by modifying the <code>background-color</code> and <code>opacity</code> properties of the <code>.overlay</code> class in the CSS.</p>
					<p>Set the mobile fallback image in the CSS by changing the background image of the header element within the media query at the bottom of the CSS snippet.</p>
					<p class="mb-0">
						Created by <a href="https://startbootstrap.com">Start Bootstrap</a>
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Bootstrap core JS-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
