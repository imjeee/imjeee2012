<nav>
	<ul>
		<li class="contact-info"><a href="<?php echo get_settings('home'); ?>" style="color:white">IMJEEE</a></li>
		<li class="contact-info">DESIGN + DEVELOPMENT</li>
		<br /><br /><br />
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ));  ?>
	<li><a href="#" id="openContact">CONTACT</a></li>
			<div id="contact-form">
				<form action="" class="sample-form">
					<input type="text" name="fullname" id="fullname" title="name" class="auto-hint">
					<input type="text" name="email" id="email" title="email" class="auto-hint">
					<textarea rows="6" id="message" name="message" class="auto-hint" title="Enter Your Message Here..."></textarea><br />
					<button type="submit">Submit</button>
				</form>
			</div>	
	</ul>
</nav>
<div id="keyboard-nav">
	<div class="arrow-btn arrow-top"><a href=""></a></div>
	<div class="arrow-btn arrow-left"><a href=""></a></div>
	<div class="arrow-btn arrow-down"><a href=""></a></div>
	<div class="arrow-btn arrow-right"><a href=""></a></div>
</div>