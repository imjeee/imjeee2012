<?php get_header(); ?>
<body <?php body_class(); ?>>
  <div class="left">
  	<?php get_sidebar(); ?>
  </div><!-- left -->
  <div class="right">
    <div id="content">
    	this content is only on the home page
    </div>
  </div> <!-- right -->
</body>
<?php wp_footer(); /* this is used by many Wordpress features and plugins to work proporly */ ?>
</body>
</html>
