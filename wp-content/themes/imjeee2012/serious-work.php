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
		<div id="content">
			<div id="serious-work">
				<?php $args = array('numberposts' => 200);
        $posts_array = get_posts( $args );
				foreach ($posts_array as $post){
				  if ( has_post_thumbnail() ): ?>
		        <div class="work-grid">
				      <div class="img-backdrop">
					      <a href="#" target="_self"><?php echo the_post_thumbnail(); ?></a>
				      </div><!-- img-backdrop -->
			        <div class="img-details">
				        <h4><?php echo the_post_thumbnail_title(); ?></h4>
				        <p><?php echo the_post_thumbnail_description(); ?></p>
			        </div><!-- img-details -->
		        </div><!-- work-grid -->
          <?php
          else :
            echo "hiiiiii";
          endif;
        }	?>
      </div><!-- #serious-work -->
    </div><!-- #content -->
  </div> <!-- #right -->
</body>
<?php get_footer(); /* this is used by many Wordpress features and plugins to work proporly */ ?>
