<?php
/*
Template Name: serious-work
*/
?>

<?php get_header(); ?>
<body <?php body_class(); ?>>
	<div class="left">
		<?php get_sidebar(); ?>
	</div><!-- left -->
	<div class="right">
		<div id="content" role="main">
			    <!-- this will be our navigation menu -->
    <div id="sticky_navigation_wrapper">
        <div id="sticky_navigation">
            <div class="demo_container">
                <ul>
                    <li><a href="#" class="selected">HOME</a></li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">SERVICES</a></li>
                    <li><a href="#">CLIENTS</a></li>
                    <li><a href="#">PARTNERS</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </div>
        </div>
    </div>
			<div id="serious-work">
				<?php $categories = get_categories();
					foreach($categories as $category) { ?>
						<div class="section">
							<h1><?php echo $category->cat_name ?></h1>
							<?php 
							$args = array( 'category' => $category->cat_ID);
							$posts_array = get_posts( $args );
							foreach ($posts_array as $post){
								if ( has_post_thumbnail() ) { ?>
									<div class="img-in-grid">
										<a href="#" target="_self">
											<div class="img-backdrop">
												<?php echo the_post_thumbnail(); ?>
											</div>
										</a>
										<div class="img-details">
											<h4><?php echo the_post_thumbnail_title(); ?></h4>
											<p><?php echo the_post_thumbnail_description(); ?></p>
										</div>
									</div>
							<?php	}}	?>
						</div><!-- section -->

					<?php } ?>

			</div><!-- #serious-work -->
		</div><!-- #content -->
	</div> <!-- #right -->
</body>
<?php get_footer(); /* this is used by many Wordpress features and plugins to work proporly */ ?>
