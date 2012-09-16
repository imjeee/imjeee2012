<?php
/*
  Template Name: contact
*/
?>

<?php get_header(); ?>

<body <?php body_class(); ?>>
<div class="left">
   <?php get_sidebar(); ?>
   </div><!-- left -->
   <div class="right">
     <div id="contact-box">
       <h1>Get in touch with Jie</h1>

       <ul class="social" id="css3">
         <li class="linkedin"><a href="http://www.linkedin.com/pub/jie-lian/47/762/b74" target="_blank"><strong>linkedIn</strong></a></li>
         <li class="twitter"><a href="http://www.twitter.com/imjeee" target="_blank"><strong>twitter</strong></a></li>
         <li class="tumblr"><a href="http://www.imjeee.tumblr.com/" target="_blank"><strong>tumblr</strong></a></li>
         <li class="deviantart"><a href="http://www.imjeee.deviantart.com" target="_blank"><strong>deviantart</strong></a></li>
       </ul>

       <form id="contact-form" action="<?php bloginfo('template_url'); ?>/processForm.php" method="post">
         <input type="text" name="senderName" id="senderName" placeholder="Your name" required="required" maxlength="40" />
         <input type="email" name="senderEmail" id="senderEmail" placeholder="Your email" required="required" maxlength="50" />
         <textarea name="message" id="message" placeholder="Please type your message..." required="required" rows="10" maxlength="10000"></textarea>
         <button id="sendMessage" type="submit">Send Email</button>
       </form>
     </div>
   </div> <!-- right -->
</body>
<?php get_footer(); /* this is used by many Wordpress features and plugins to work proporly */ ?>
