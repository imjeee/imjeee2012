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
      <img src="<?php bloginfo( 'template_url' ); ?>/images/powermax-1.png" class="post-img-web"/>
      <div id="post-details">
        <h1>PowerMax Global</h1>
        <p class="cat">post categoty</p>
        <div class="tags">
          <ul>
            <li class="post-tag-design"></li>
            <li class="post-tag-design"></li>
            <li class="post-tag-design"></li>
          </ul>
        </div>
        <p class="project-description">I've always had a passion for design and problem solving. I am fascinated with how design can solve problems, create experiences, and develop brands. With a background in fine arts and dance, I am always looking to bring an innovative idea to life through unique desig…</p>
      </div>
    </div><!-- #content -->
  </div> <!-- #right -->
</body>
<?php get_footer(); ?>
