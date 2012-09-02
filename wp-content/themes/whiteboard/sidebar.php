<nav>
	<ul>
		<li class="contact-info"><a href="<?php echo get_settings('home'); ?>" style="color:white">IMJEEE</a></li>
		<li class="contact-info">DESIGN + DEVELOPMENT</li>
		<br /><br /><br />
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ));  ?>
		<li><a href="#" id="openContact">CONTACT</a></li>
		<form id="contact-form" action="processForm.php" method="post">
     	<input type="text" name="senderName" id="senderName" placeholder="Please type your name" required="required" maxlength="40" />
     	<input type="email" name="senderEmail" id="senderEmail" placeholder="Please type your email address" required="required" maxlength="50" />
     	<textarea name="message" id="message" placeholder="Please type your message..." required="required" cols="80" rows="10" maxlength="10000"></textarea>
  		<div id="formButtons">
  			<button id="sendMessage" type="submit">Send Email</button>
  			<button id="cancel" type="cancel">Cancel</button>
			</div>
		</form>
	</ul>
</nav>
<div id="keyboard-nav">
	<div class="arrow-btn arrow-top"><a href=""></a></div>
	<div class="arrow-btn arrow-left"><a href=""></a></div>
	<div class="arrow-btn arrow-down"><a href=""></a></div>
	<div class="arrow-btn arrow-right"><a href=""></a></div>
</div>