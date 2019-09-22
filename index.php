<?php get_header(); ?>

<section><!--Jumbotron-->
		<div class="jumbotron img-jumbo">
			<div class="container text-center">
				<h1 class="text-primary text-uppercase">Wellcome</h1>
				<p>We will change it later</p>
				<button type="button" class="btn btn-outline-dark">Read More</button>
			</div>
		</div>

	</section><!--Jumbotron Ends-->


	<section><!--Main-->
		<div class="container">
		<div class="card-group">
  <div class="card">
    <img src="<?php echo get_theme_file_uri( '/img/400.png' ); ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Blog Title</h5>
      <small class="text-muted">By: Umair Published in Category</small>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
       <button type="button" class="mr-auto btn btn-outline btn-primary">Read More</button>
    </div>
  </div>
  <div class="card">
    <img src="<?php echo get_theme_file_uri( '/img/400.png' ); ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Blog Title</h5>
      <small class="text-muted">By: Umair Published in Category</small>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <button type="button" class="mr-auto btn btn-outline btn-primary">Read More</button>
    </div>
  </div>
  <div class="card">
    <img src="<?php echo get_theme_file_uri( '/img/400.png' ); ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Blog Title</h5>
      <small class="text-muted">By: Umair Published in Category</small>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <button type="button" class="mr-auto btn btn-outline btn-primary">Read More</button>
    </div>
  </div>
</div>
</div>
	</section><!--Blog Ends-->


	<section><!--Pagination-->
		
		<nav aria-label="Page navigation">
			<div class="container">
  			<ul class="pagination my-3 justify-content-center">
   	 			<li class="page-item"><a class="page-link" href="#">Previous</a></li>
			    <li class="page-item"><a class="page-link" href="#">1</a></li>
			    <li class="page-item"><a class="page-link" href="#">2</a></li>
			    <li class="page-item"><a class="page-link" href="#">3</a></li>
			    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  			</ul>
  			</div>
		</nav>
		
	</section><!--Pagination Ends-->


<?php get_footer(); ?>