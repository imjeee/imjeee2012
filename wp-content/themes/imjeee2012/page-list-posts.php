<?php
/*
Template Name: page-list-posts
*/
?>

<?php get_header(); ?>
<body <?php body_class(); ?>>
	<div class="left">
		<?php get_sidebar(); ?>
	</div><!-- left -->
	<div class="right">
		<div id="content" role="main">
			<?php 
			$posts_array = get_posts();
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
		</div><!-- #content -->
	</div> <!-- right -->
</body>
<?php get_footer(); /* this is used by many Wordpress features and plugins to work proporly */ ?>
