<?php
   /*
   Template Name: fine-art
   */
   ?>

<?php get_header(); ?>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/fine-art.css" />
<body <?php body_class(); ?>>
	<div class="left">
		<?php get_sidebar(); ?>
	</div><!-- left -->

	<div id="fine-art"><!-- Section #1 / Intro -->
		<section id="first" class="story" data-speed="8" data-type="background">
			<article>
				<h1>I draw, I paint, I break balls, and crush egos all before bedtime&nbsp.</h1>
        <p></p>
			</article>
		</section>
		<?php $posts_array = query_posts('posts_per_page=-1&cat=' . get_category_by_slug('fine-art')->term_id);
    foreach ($posts_array as $post){ echo $post->post_content; }?>
	</div>

</body>
<?php get_footer(); /* this is used by many Wordpress features and plugins to work proporly */ ?>
