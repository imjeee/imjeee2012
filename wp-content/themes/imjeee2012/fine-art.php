<?php
/*
Template Name: fine-art
*/
?>

<?php get_header(); ?>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/fine-art.css" />
</head>

<body <?php body_class(); ?>>
	<div class="left">
		<?php get_sidebar(); ?>
	</div><!-- left -->
	<div class="right">
		<div id="content" role="main">
			<div id="fine-art"><!-- Section #1 / Intro -->
				<section id="first" class="story" data-speed="8" data-type="background">
					<article>
						<h1>WHEN I'M NOT MESSING AROUND AND GETTING TRIPLE DOUBLES</h1>
						<p>I draw, I paint, and I take pictures without filters from Instagram.</p>
					</article>
				</section><!-- Section #2 / Background Only -->

				<section id="second" class="story" data-speed="4" data-type="background">
					<article>
						<p>Bball court on the old stumping ground, <a href="http://www.mica.edu" target="_blank">MICA</a></p>
					</article>
				</section><!-- Section #3 / Photos -->

				<section id="third" class="story" data-speed="6" data-type="background" data-offsety="250">
					<article><p>Based on the <a href="http://en.wikipedia.org/wiki/Delicatessen_(film)" target="_blank">movie delicatessen</a>, Mmmmmmm Food</p>
					</article>
				</section><!-- Section #4 / HTML5 Video -->

				<section id="fourth" class="story" data-speed="8" data-type="background" data-offsety="250">
					<article><p>Just another dead fish from our Illustration class, this one isn't a hobby</p>
					</article>
				</section><!-- Section #5 / The End-->

				<section id="fifth" class="story" data-speed="8" data-type="background" data-offsety="250">
					<article><p>some stuff</p></article>
				</section>
			</div>
		</div><!-- #content -->
	</div> <!-- right -->
</body>
<?php get_footer(); /* this is used by many Wordpress features and plugins to work proporly */ ?>
