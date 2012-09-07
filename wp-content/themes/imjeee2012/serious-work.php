<?php
   /*
   Template Name: serious-work
   */
   ?>

<?php get_header(); ?>
<?php $categories = get_categories(); ?>
<body <?php body_class(); ?>>
	<div class="left">
		<?php get_sidebar(); ?>
	</div><!-- left -->
	<div class="right">
		<div id="content" role="main">
			<div id="serious-work">
      <div id="title">PORTFOLIO</div>
			<!-- select by categories menu -->
      <div id="sticky_navigation_wrapper">
        <div id="sticky_navigation">
          <ul>
            <?php foreach($categories as $category) {
                  $catname = $category->cat_name ?>
            <li><a href="#<?php echo $catname ?>" class="anchorLink"><?php echo $catname; ?></a></li>
            <?php } ?>
          </ul>
        </div>
      </div>
				<?php foreach($categories as $category) { 
              $catname = $category->cat_name; ?>
				<div class="section">
					<?php $args = array( 'category' => $category->cat_ID);
					$posts_array = get_posts( $args );
					foreach ($posts_array as $post){
					if ( has_post_thumbnail() ) { ?>
					<div class="work-grid" id="<?php echo $catname ?>">
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
