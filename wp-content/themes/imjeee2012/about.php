<?php
   /*
   Template Name: about
   */
   ?>

<?php get_header(); ?>

<body <?php body_class(); ?>>
  <div class="left">
    <?php get_sidebar(); ?>
  </div><!-- left -->
  <div class="right">
    <div id="about">
      <div class="section">
        <div id="jie">
          <p>Hi there! My name is Jie Lian. My friends just call me g. I'm a designer & developer currently living in Austin. I like playing basketball, reading <a href="http://en.wikipedia.org/wiki/A_Song_of_Ice_and_Fire" target="_blank">"A song of ice and fire book series"</a>, typing on the keyboard of Blackberry, <a href="http://en.wikipedia.org/wiki/List_of_Sundance_Film_Festival_award_winners" target="_blank">watching Sundance movies</a>, and experimenting with the wonderful Austin music scenes. Feel free to <a class="contact-btn">get in touch</a>, and let's make it official and grab a copy of <a href="<?php bloginfo('template_url'); ?>/downloads/Jie_Lian_resume.pdf" target="_blank">his resume</a>.</p>
        </div><!-- #jie -->
      </div>
      <div class="section">
        <div class="block">
          <h1>School + work</h1>
          <p>I was born in the historic city of < href="http://en.wikipedia.org/wiki/Xi'an" target="_blank">Xi'an</a>, <a href="http://en.wikipedia.org/wiki/Hebei" target="_blank">grew up in Hebei</a>, and came to U.S. in middle school. I've been fortunate enough to have great parents who put a lot of emphasis on education.: <a href="http://www.cultureshapers.com/visual-arts/drawing-winners-03.php" target="_blank">Cultural Shaper second place in drawing</a>, Scholastic regional gold keys, National Art Honor's Society, Dean's list at MICA and UT, named bestman at my buddy's wedding, and scored many game winners in pick up basketball.</p>
        </div>
        <!-- BEGIN Timeline Code -->
        <div class="timeline">
          <ul class="intervals">
            <li>2004</li>
            <li>2005</li>
            <li>2006</li>
            <li>2007</li>
            <li>2008</li>
            <li>2009</li>
            <li>2010</li>
            <li>2011</li>
            <li>2012</li>
            <li>2013</li>
          </ul> <!-- end .intervals -->          
          <ul class="events timeline-events">
            <li style="margin: 0 0 0 7%; width: 31%; ">
              <div style="height: 120px; background-image: url('<?php bloginfo('template_url'); ?>/images/mica.png'); background-size: cover; background-position: center;"></div>
				      <p><strong><a href="http://www.mica.edu" target="_blank">Maryland Institute College of Art</a></strong><br /> BFA in Graphic Design</p>
            </li>
            <li style="margin: 0 0 0 1%; width: 19%; ">
              <div style="height: 120px; background-image: url('<?php bloginfo('template_url'); ?>/images/ai.png'); background-size: cover; background-position: center;"></div>
				      <p><strong><a href="http://www.ainq.com" target="_blank">Audacious Inquiry</a></strong><br /> Interactive designer</p>
            </li>
            <li style="margin: 0 0 0 1%; width: 23%; ">
              <div style="height: 120px; background-image: url('<?php bloginfo('template_url'); ?>/images/utexas.png'); background-size: cover; background-position: center;"></div>
				      <p><strong><a href="http://www.utexas.edu/" target="_blank">University of Texas at Austin</a></strong><br /> 49hrs in Computer Science</p>
            </li>
            <li style="margin: 10px 0 0 0; width: 56%; left: 29%; clearflow: auto; ">
              <div style="height: 70px; background-image: url('<?php bloginfo('template_url'); ?>/images/imjeee.png'); background-size: cover;"></div>
				      <p><strong><a href="http://www.imjeee.com/" target="_blank">Freelance design + development work</a></strong> I make'em look gooood</p>
            </li>
          </ul> <!-- end .events -->
        </div> <!-- end .timeline -->
        <!-- END Timeline Code -->
      </div>
      <div class="section">
        <div class="block">
          <h1>What I Learned & know</h1>
          <p>I learn design and programming languages so I can build things. Education certainly doesn't stop here. I find the easiest way to learn is through school, where teachers spoon feed me material and give me assignments. But that is no substitution for taking initiative and build something on my own. Real world projects are never clearly defined, and improvements can always be made.</p>
        </div>
        <!-- BEGIN Skills Code -->
        <div class="skills-chart">
          <ul class="intervals">
            <li class="first">touch on in class</li>
            <li>had entire class(es) using it</li>
            <li>actually used in real projects</li>
            <li class="last">with google, I can get it done</li>
          </ul> <!-- end .intervals -->          
          <ul class="events" style="margin: 40px 0 5px 0;">
            <li style="background-color: #EEE; margin: 40px 0 5px 0; color: black; ">Programming Languages</li>
            <li style="width: 72%; background-color: #e52836;">Java</li>
            <li style="width: 65%; background-color: #375e8c;">Python</li>
            <li style="width: 85%; background-color: #f9d21e;">CSS</li>
            <li style="width: 45%; background-color: #8bc53f;">C++</li>
            <li style="width: 55%; background-color: #5e65a5;">PHP</li>
            <li style="width: 60%; background-color: #32a9a5;">Javascript</li>
            <li style="width: 50%; background-color: #3F1919;">Actionscript</li>
            <li style="width: 95%; background-color: #dc4d2f;">HTML</li>

            <li style="background-color: #EEE; margin: 40px 0 5px 0; color: black; ">Technology</li>
            <li style="width: 70%; background-color: #a5cd3c;">Android</li>
            <li style="width: 56%; background-color: #8aa276;">Play Framework</li>
            <li style="width: 52%; background-color: #4698bc;">Zend Framework</li>
            <li style="width: 66%; background-color: #4b81ad;">jQuery</li>
            <li style="width: 86%; background-color: #CCC;">960gs</li>

            <li style="background-color: #EEE; margin: 40px 0 5px 0; color: black; ">Applications</li>
            <li style="width: 70%; background-color: #3d3177;">Eclipse</li>
            <li style="width: 95%; background-color: #e99324;">Adobe Illustrator</li>
            <li style="width: 91%; background-color: #355aac;">Adobe Photoshop</li>
            <li style="width: 85%; background-color: #851d5c;">Adobe Indesign</li>
            <li style="width: 90%; background-color: #d21b2e;">Adobe Flash</li>

          </ul> <!-- end .events -->
        </div> <!-- end .Skills -->

      </div><!-- #about -->
    </div> <!-- right -->
</body>
<?php get_footer(); /* this is used by many Wordpress features and plugins to work proporly */ ?>
