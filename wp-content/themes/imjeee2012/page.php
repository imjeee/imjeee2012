<?php get_header(); ?>
<body <?php body_class(); ?>>
	<div class="left">
		<?php get_sidebar(); ?>
	</div><!-- left -->
	<div class="right">
		<div id="content" role="main">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
					<article>
						<?php edit_post_link('<small>Edit this entry</small>','',''); ?>
			
						<div class="post-content page-content">
							<?php the_content(); ?>
							<?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
						</div><!--.post-content .page-content -->
					</article>
				</div><!--#post-# .post-->
			<?php endwhile; ?>
		</div><!-- #content -->
	</div> <!-- right -->
</body>
<?php get_footer(); /* this is used by many Wordpress features and plugins to work proporly */ ?>
