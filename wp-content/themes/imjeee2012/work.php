<?php
   /*
   Template Name: work
   */
   ?>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/work.css" />
<?php get_header(); ?>
<body <?php body_class(); ?>>
	<div class="left">
		<?php get_sidebar(); ?>
	</div><!-- left -->
	<div class="right">
    <ul class="img-grid">
			<?php $posts_array = query_posts('posts_per_page=-1&cat=-' . $fineart);
            foreach( $posts_array as $post){
            $post_cats = get_the_category(); ?>
      <li data-id="id-<?php echo $i ?>" class="<?php foreach($post_cats as $cat) { echo $cat->slug; } ?>">
				<?php if ( has_post_thumbnail() ): ?>
				<a href="<?php echo get_permalink(); ?>" target="_self"><?php echo the_post_thumbnail(); ?></a>
			  <div class="img-details">
				  <h4><a href="<?php echo get_permalink(); ?>" target="_self"><?php echo the_post_thumbnail_title(); ?></a></h4>
				  <p><?php echo the_post_thumbnail_description(); ?></p>
			  </div><!-- img-details -->
        <?php
           else : echo $post->post_name; endif; }?>
      </li>
    </ul>
  </div> <!-- #right -->
</body>
<?php get_footer(); /* this is used by many Wordpress features and plugins to work proporly */ ?>
