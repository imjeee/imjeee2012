<nav>
	<div id="logo">
		<a href="<?php echo get_settings('home'); ?>"><h1>imjeee</h1>
		<h3>design + development</h3></a>
  </div>
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ));  ?>
    <ul>
      <li>
        <div class="contact-btn"><a href="#">Contact</a></div>
      </li>
    </ul>

    <div id="contact-box">
      <h1>Get in touch with Jie</h1>
      <ul class="social" id="css3">
        <li class="linkedin"><a href="http://www.linkedin.com/pub/jie-lian/47/762/b74" target="_blank"><strong>linkedIn</strong></a></li>
        <li class="twitter"><a href="http://www.twitter.com/imjeee" target="_blank"><strong>twitter</strong></a></li>
        <li class="tumblr"><a href="http://www.imjeee.tumblr.com/" target="_blank"><strong>tumblr</strong></a></li>
        <li class="deviantart"><a href="http://www.imjeee.deviantart.com" target="_blank"><strong>deviantart</strong></a></li>
      </ul>
      <form id="contact-form"><!-- method="post" action="http://imjeee.com/wp-content/themes/imjeee2012/process.php"-->
        <input type="text" name="name" id="senderName" placeholder="Your name" required="required" maxlength="40" />
        <input type="email" name="email" id="senderEmail" placeholder="Your email" required="required" maxlength="50" />
        <textarea name="message" id="message" placeholder="Please type your message..." required="required" rows="10" maxlength="10000"></textarea>
        <button name="sendButton" id="submit" type="submit">Send Email</button>
        <div class="ajax"><p>SENDING</p></div>
      </form>      
    </div>
    <div id="cover">&nbsp;</div>
</nav>
