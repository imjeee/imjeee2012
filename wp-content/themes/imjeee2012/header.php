<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php if ( is_category() ) {
		echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
	} elseif ( is_tag() ) {
		echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
	} elseif ( is_archive() ) {
		wp_title(''); echo ' Archive | '; bloginfo( 'name' );
	} elseif ( is_search() ) {
		echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
	} elseif ( is_home() ) {
		bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
	}  elseif ( is_404() ) {
		echo 'Error 404 Not Found | '; bloginfo( 'name' );
	} elseif ( is_single() ) {
		wp_title('');
	} else {
		echo wp_title(''); echo ' | '; bloginfo( 'name' );
	} ?></title>
	<meta name="description" content="<?php wp_title(''); echo ' | '; bloginfo( 'description' ); ?>" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<meta name="viewport" content="width=device-width; initial-scale=1"/><?php /* Add "maximum-scale=1" to fix the Mobile Safari auto-zoom bug on orientation changes, but keep in mind that it will disable user-zooming completely. Bad for accessibility. */ ?>
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/whiteboard_favicon.ico" type="image/x-icon" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />
	
	<!-- Javascript -->
	<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-1.8.0.min.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-ui-1.8.23.custom.min.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/nav.js"></script>

	<!-- for grid a licious -->
	<script type="text/javascript">

	var t, settings = {gap:10, width: 180, easing: 'easeInOutQuint', duration: 300, speed: 30 };
	var nums = [ 300,  600,  250,  100 ];
	var prevh, prevw, h, thumb;

	</script>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.preload.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/grid-a-licious.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.easing.js"></script>

	<script type="text/javascript">

	$(document).ready(function() {	

  $.preload('.post img', {
  	placeholder:'http://suprb.com/lib/img/grey.gif',
		threshold: 1,
		onComplete:complete,
		onFinish:finish
	});

	function complete(data){
		var img = new Image();
		img.src = data.image;
		post = $("img[src='"+data.image+"']").parent();
		$(post).css('height',img.height);
	};

	function finish(data){
		$('#box1').grid(settings);
	};

  // on window resize, call again
    var resizeTimer = null;
    $(window).bind('resize', function() {
      if (resizeTimer) clearTimeout(resizeTimer);
      resizeTimer = setTimeout(function(){ 
      		$("#box1").grid(settings, null, false);
      }, 100 );		
    });
    

	$(".post").live('click', function() {
		$(t).empty();
		$(t).animate({height:prevh, width: prevw}, 200, function(){
				$(this).append('<img src="'+thumb+'" />');
		});
		
		$(t).delay(100).removeClass('open postwide');
		
		t = this;
		
		$(this).fadeOut('fast', function() {
		
				$(t).append('<div class="loader"><img src="http://suprb.com/lib/img/loading.gif"></div>');
		
					prevh = $(t).height();
					prevw = $(t).width();
					thumb = $(t).find('img').attr('src');
		
					$(t).addClass('open postwide');
					num = nums[Math.floor(Math.random()*nums.length)];
					$(t).empty();
					
					$(t).append('<img class="pme" src="'+$(t).attr('ref')+'" />');
					
				  $.preload('.pme', {
				  	placeholder:'http://suprb.com/lib/img/grey.gif',
						threshold: 1,
						onComplete:complete,
						onFinish:finishh
					});
					function finishh($t){
							$("#box1").grid(settings, $(t), true, true);
					};

			});
	
	});
		
});
</script>
	

<style>

	.post { position: absolute;text-align: center; display: none; overflow: hidden }
	img { margin: 0; padding: 0 }

</style>

	<?php /* The HTML5 Shim is required for older browsers, mainly older versions IE */ ?>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?> <?php /* this is used by many Wordpress features and for plugins to work proporly */ ?>

  <!-- CSS -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/theme.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/img-grid.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/style.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/contact-form.css" />

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/fine-art.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/about.css" />


	<link href='http://fonts.googleapis.com/css?family=Economica:400,700' rel='stylesheet' type='text/css'><!-- used on graphic design page -->
  <link href='http://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700' rel='stylesheet' type='text/css'><!-- used on about jie page -->
  <link href='http://fonts.googleapis.com/css?family=Lilita+One' rel='stylesheet' type='text/css'><!-- used on fine art page -->

</head>