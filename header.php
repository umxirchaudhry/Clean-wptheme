<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<?php wp_head(); ?>
	<title>Document</title>
</head>
<body>
	<section><!--Navbar-->
	<nav class="navbar navbar-expand-sm navbar-dark bg-info">

		
		<a href="#" class="navbar-brand">Brand</a>

		<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarmenu">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarmenu">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a href="<?php the_permalink(); ?>" class="nav-link">Blog</a>
			</li>
			<li class="nav-item">
				<a href="<?php the_permalink(); ?>" class="nav-link">Content Us</a>
			</li>
			<li class="nav-item">
				<a href="<?php the_permalink(); ?>" class="nav-link">About Us</a>
			</li>
		</ul>
		</div>
	</nav>
	</section><!--Navbar Ends-->
	
