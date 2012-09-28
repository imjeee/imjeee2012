<?php
   /*
   Template Name: about
   */
   ?>

<style type="text/css">
  body {
  background-image: url('<?php bloginfo('template_url'); ?>/images/background-about.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  }
</style>

<?php get_header(); ?>

<body <?php body_class(); ?>>
  <div class="left">
    <?php get_sidebar(); ?>
  </div><!-- left -->
  <div class="right">
    <div id="about">
      <div class="section">
        <div id="jie">
          <p>Hi there! My name is Jie Lian. My friends just call me g. like playing basketball, reading <a href="http://en.wikipedia.org/wiki/A_Song_of_Ice_and_Fire" target="_blank">"A song of ice and fire book series"</a>, typing on the keyboard of Blackberry, <a href="http://en.wikipedia.org/wiki/List_of_Sundance_Film_Festival_award_winners" target="_blank">watching Sundance movies</a>, and experimenting with the wonderful Austin music scenes. Feel free to <a class="contact-btn">get in touch</a>, and make it official by grab a copy of <a href="<?php bloginfo('template_url'); ?>/downloads/Jie_Lian_resume.pdf" target="_blank">his resume</a>.</p>
        </div><!-- #jie -->
      </div><!-- .section -->
      <div class="section">
        <div class="block">
          <h1>School + work</h1>
          <p>In a moment of youthful indiscretion, I went to art school (<a href="http://www.mica.edu" target="_blank">MICA</a>) and decided to be an artist. I could paint and draw, but possess neither the artistic temperament nor the self absorbed grandiose personality it takes to be a successful studio artist. So I turned to graphic design and combined my creative skills with my urge to be practicality. I found myself at a consultancy called <a href="http://www.ainq.com" target="_blank">Audacious Inquiry</a> after <a href="http://www.mica.edu" target="_blank">MICA</a>, where I interactive design work. It was great to see my design come to life and help our clients, but I was always troubled by my inability to do any development work beyond the most elementary code. It's like beening able to render a beautiful car, but have no clue how the engine works. In the end, the decision to continue my education at UT was an obvious one. Now, it almost feels like it's the path chosen for me rather than merely taken by me.</p>   
        </div><!-- .block -->
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
				      <p><strong><a href="http://www.imjeee.com/" target="_blank">Freelance design + development work</a></strong> me: marketing > sales > design > development > services</p>
            </li>
          </ul><!-- .events -->
        </div><!-- .timeline -->
      </div><!-- section -->
      <div class="section">
        <div class="block">
          <h1>What I Learned & know</h1>
          <p>My biggest Java project is Flok, where my friends and I developed an android app consists of 15k lines of code plus another 15k lines of library code. I've had two courses at UT using python, and it continues to be my goto language when I need something quick and dirty due to its functional programming ability. I've also taken 2 classes in C++, and I maybe able to tell you some pretty obscure facts about it, but from a development time perspective, I much prefer Java. Actionscript is my first real programming language, I shall talk about it some day like the older folks talk about COBOL today. My web languages skills comes mostly from work and self projects such as website. I did an internship last summer using Zend Framework and phpstorm IDE. I was introduced Play framework last semester in Software Development class, it uses Java (Scala in 2.0) and we were able to make <a href="http://www.imjeee.com/openbook/">a facebook clone</a> out of it. This website uses PHP and <a href="http://wordpress.org/" target="_blank">Wordpress</a> to dynamically populate many of ihe content, <a href="http://jquery.com/" target="_blank">jQuery</a> and <a href="http://www.css3.info/" target="_blank">CSS3</a> for the fancy animations, coded entirely using <a href-"http://www.gnu.org/software/emacs/" target="_blank">Emacs editor</a>, kept track using github, and typed using my trusty filco brown switch mechanical keyboard. And yes, these keycaps are indeed, <a href="http://www.overclock.net/t/538389/mechanical-keyboard-club/4850" target="_blank">yellow</a>.</p>
        </div><!-- .block -->
        <div class="skills-chart">
          <ul class="intervals">
            <li class="first">touch on in class</li>
            <li>had entire class(es) using it</li>
            <li>actually used in real projects</li>
            <li class="last">with google, I can get it done</li>
          </ul> <!-- end .intervals -->          
          <ul class="events" style="margin: 40px 0 5px 0;">
            <li style="margin: 40px 0 5px 0; color: black; ">Programming Languages</li>
            <li style="width: 72%; background-color: #e52836;">Java</li>
            <li style="width: 65%; background-color: #375e8c;">Python</li>
            <li style="width: 85%; background-color: #f9d21e;">CSS</li>
            <li style="width: 45%; background-color: #8bc53f;">C++</li>
            <li style="width: 55%; background-color: #5e65a5;">PHP</li>
            <li style="width: 60%; background-color: #32a9a5;">Javascript</li>
            <li style="width: 50%; background-color: #3F1919;">Actionscript</li>
            <li style="width: 95%; background-color: #dc4d2f;">HTML</li>

            <li style="margin: 40px 0 5px 0; color: black; ">Technology</li>
            <li style="width: 70%; background-color: #a5cd3c;">Android</li>
            <li style="width: 56%; background-color: #8aa276;">Play Framework</li>
            <li style="width: 52%; background-color: #4698bc;">Zend Framework</li>
            <li style="width: 66%; background-color: #4b81ad;">jQuery</li>
            <li style="width: 86%; background-color: #CCC;">960gs</li>

            <li style="margin: 40px 0 5px 0; color: black; ">Applications</li>
            <li style="width: 70%; background-color: #3d3177;">Eclipse</li>
            <li style="width: 95%; background-color: #e99324;">Adobe Illustrator</li>
            <li style="width: 91%; background-color: #355aac;">Adobe Photoshop</li>
            <li style="width: 85%; background-color: #851d5c;">Adobe Indesign</li>
            <li style="width: 90%; background-color: #d21b2e;">Adobe Flash</li>
          </ul><!-- .events -->
        </div><!-- .skills -->
      </div><!-- .section -->
    </div><!-- #about -->
  </div> <!-- right -->
</body>
<?php get_footer(); /* this is used by many Wordpress features and plugins to work proporly */ ?>
