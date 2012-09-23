<?php get_header(); ?>

<style type="text/css">
  body {
    background-image: url('<?php bloginfo('template_url'); ?>/images/background.png');
  }
</style>

<body <?php body_class(); ?>>
  <div class="left">
  	<?php get_sidebar(); ?>
  </div><!-- left -->
  <div class="right">
    <section class="rw-wrapper">
      <h2 class="rw-sentence">
        <span>Hi! My name is <a href="http://www.imjeee.com/about-jie/">Jie Lian</a>,</span>
        <br>
        <span>and I'm a&nbsp;</span>
        <div class="rw-words rw-words-1">
          <span>developer.</span>
          <span>designer.</span>
          <span>painter.</span>
          <span>thinker.</span>
        </div>
      </h2>
    </section>
  </div> <!-- right -->
</body>
<?php wp_footer(); /* this is used by many Wordpress features and plugins to work proporly */ ?>
</body>
</html>
