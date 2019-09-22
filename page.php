<?php get_header(); ?>

<?php

while (have_posts()) {
	the_post(); ?>
		
	<section><!--Jumbotron-->
		<div class="jumbotron jumbotron-fluid" style="background-image: url(<?php echo get_theme_file_uri( '/img/bg-image.gif' ) ?>);">
			<div class="container text-left">
				<h1 class="display-4 text-primary text-uppercase"><?php the_title(); ?></h1>
				<p>We will change it later</p>
			</div>
		</div>

	</section><!--Jumbotron Ends-->

	
	<section><!--Main-->
		<div class="container">
			<div class="row justify-content-start my-4">
				<!-- <div class="col-3 col-md-1"> -->
					<div class="btn btn-outline-info">
					<a href="<?php echo get_home_url(); ?>"><i class="fas fa-home"></i>  Home</a>
				<!-- </div> -->
				</div>
			</div>
			<div class="row">	
				<!--Col# 1-->
				<div class="col-sm-9">
					<h1>Post Title</h1>
					<hr>
					<div class="align-content-end ">
						<p class="btn btn-outline-secondary text-dark">By <b>Umair</b> Posted in <b>News</b>, <b>Awards</b> </p>
						<p><?php the_content( ); ?> </p>
					</div>
					<hr>
				</div>

				<!--Sidebar Links-->
				<!-- <div class="col-sm-3 text-center">
					<div class="container">
					<div class="col-12 col-md py-2 bg-primary">
						<h3><a href="#" class="text-dark">Title</a></h3>
					</div>
					<div class="col-12 col-md py-1 bg-danger">
						<a href="#" class="text-white">Link# 1</a>
					</div>
					<div class="col-12 col-md py-1 bg-danger">
						<a href="#" class="text-white">Link# 2</a>
					</div>
				</div>
				</div> -->
				<!--Sidebar Links Ends-->

			</div>
		</div>		
	</section><!--Main Ends-->










<?php } ?>

<?php get_footer(); ?>

