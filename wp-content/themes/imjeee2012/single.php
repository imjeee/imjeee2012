<?php
   /*
   Template Name: single-work
   */
   ?>

<?php get_header(); ?>
<body <?php body_class(); ?>>
	<div class="left">
		<?php get_sidebar(); ?>
	</div><!-- left -->
	<div class="right">
		<div id="single">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
				<article>
					<?php edit_post_link('<small>Edit this entry</small>','',''); ?>
					<div class="post-content page-content">
						<?php the_content(); ?>
            <div id="post-details">
              <h1><?php echo get_the_title(); ?> </h1>
              <p class="cat">
                <?php $categories = get_the_category();
                      foreach ($categories as $cat) { 
                        $last_cat = end($categories)->cat_name;
                        echo $cat->cat_name;
                        if (strcmp($cat->cat_name, $last_cat) != 0){
                          echo ", ";
                        }
                      } ?>
              </p>
              <div class="tags">
                <?php $posttags = get_the_tags();
                      if (count($posttags) > 0) { ?>
                <ul class="social" id="css3">
                  <?php foreach($posttags as $tag){ ?>
                  <li class="<?php echo $tag->slug ?>"><a href="#" target="_blank"><strong><?php echo $tag->name ?></strong></a></li>
                  <?php } ?>
                </ul>
                <?php } ?>
              </div>
              <div class="project-description"><?php the_excerpt(); ?></div>
						</div><!--.post-content .page-content -->
				</article>
				</div><!--#post-# .post-->
			  <?php endwhile; ?>
		  </div><!-- #content -->
    </div>
  </div> <!-- #right -->
</body>
<?php get_footer(); ?>
