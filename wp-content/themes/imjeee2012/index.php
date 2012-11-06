<?php get_header(); ?>

<style type="text/css">
 /style>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/home.css" />
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
          <span>developer.&nbsp;</span>
          <span>designer.&nbsp;</span>
          <span>picker.&nbsp;</span>
          <span>grinner.&nbsp;</span>
          <span>lover.&nbsp;</span>
          <span>sinner.&nbsp;</span>
        </div>
      </h2>
    </section>
  </div> <!-- right -->
</body>
<?php wp_footer(); /* this is used by many Wordpress features and plugins to work proporly */ ?>
</body>
</html>
