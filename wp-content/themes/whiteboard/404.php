<?php get_header(); ?>
<body <?php body_class(); ?>>
  <div class="left">
  	<?php get_sidebar(); ?>
  </div><!-- left -->
  <div class="right">
    <div id="content">
    	<div id="error404" class="post" style="position:fixed; top:26%">
				<h1><?php _e('Error 404 Not Found'); ?></h1>
				<div class="post-content">
					<p><?php _e('Oops. Fail. The page cannot be found.'); ?></p>
					<p><?php _e('Please check your URL or use the search form below.'); ?></p>
					<br />
					<?php get_search_form(); /* outputs the default Wordpress search form */ ?>
				</div><!--.post-content-->
			</div><!--#error404 .post-->
    </div>
  </div> <!-- right -->
</body>
<?php wp_footer(); /* this is used by many Wordpress features and plugins to work proporly */ ?>
</body>
</html>
