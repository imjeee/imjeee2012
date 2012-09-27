<div class="logo">
  <a href="<?php echo get_settings('home'); ?>">
	  <div class="logo-top">imjeee</div>
	  <div class="logo-bottom">design + development</div>
  </a>
</div>

<nav>
	<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ));  ?>
  <ul><li><a class="contact-btn">contact</a></li></ul>
</nav>

<div id="contact-box">
  <h1>Get in touch with Jie</h1>
  <ul class="social" id="css3">
    <a href="http://www.linkedin.com/pub/jie-lian/47/762/b74" target="_blank"><li class="linkedin"><strong>linkedIn</strong></li></a>
    <a href="http://www.twitter.com/imjeee" target="_blank"><li class="twitter"><strong>twitter</strong></li></a>
    <a href="http://www.imjeee.tumblr.com/" target="_blank"><li class="tumblr"><strong>tumblr</strong></li></a>
    <a href="http://www.imjeee.deviantart.com" target="_blank"><li class="deviantart"><strong>deviantart</strong></li></a>
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
