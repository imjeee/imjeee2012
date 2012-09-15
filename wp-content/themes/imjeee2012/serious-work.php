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
    <div id="cat_nav">
      <ul class="splitter">
        <li class="segment-0 selected-0 selected"><a href="#" data-value="all">All</a></li>
        <?php $categories = get_categories();
              for($i = 0; $i < count($categories); ++$i){ ?>
              <li class="segment-<?php echo ($i + 1) ?>">
                <a href="#" data-value="<?php echo $categories[$i]->slug; ?>">
                  <?php echo $categories[$i]->cat_name; ?>
                </a>
              </li>
              <?php } ?>
      </ul>
    </div>
		<div id="serious-work">
      <ul id="list" class="img-grid">
				<?php $args = array('numberposts' => 200);
        $posts_array = get_posts( $args );
        for ($i = 0; $i < count($posts_array); ++$i){
                          $post = $posts_array[$i];
                          $post_cats = get_the_category(); ?>
        <li data-id="id-<?php echo $i ?>" class="<?php foreach($post_cats as $cat) { echo $cat->slug . " "; } ?>">
				  <?php if ( has_post_thumbnail() ): ?>
		      <div class="work-grid">
					  <a href="<?php echo get_permalink(); ?>" target="_self"><?php echo the_post_thumbnail(); ?></a>
			      <div class="img-details">
				      <h4><a href="<?php echo get_permalink(); ?>" target="_self"><?php echo the_post_thumbnail_title(); ?></a></h4>
				      <p><?php echo the_post_thumbnail_description(); ?></p>
			      </div><!-- img-details -->
		      </div><!-- work-grid -->
          <?php
             else : echo $post->post_name; endif; }?>
        </li>
      </ul>
    </div><!-- #serious-work -->
  </div> <!-- #right -->
</body>
<?php get_footer(); /* this is used by many Wordpress features and plugins to work proporly */ ?>
