<?php
   /*
   Template Name: resume
   */
   ?>

<?php get_header(); ?>

<body <?php body_class(); ?>>
  <div class="left">
    <?php get_sidebar(); ?>
  </div><!-- left -->
  <div class="right">
    <div id="about">
      <div id="jie">
        <p>Jie’s a designe & developer currently living in Austin. Back in his hay days, he would roll with <a href="http://www.ainq.com" target="_blank">suits and ties during the day</a>, and ball till late at night with the rough and tumble playas in the deepest ghettos on the street of Baltimore. Please feel free to <a href="http://www.imjeee.com/contact/" target="_self">get in touch and discuss contract options</a> as he's currently a free agent.
      </div><!-- #jie -->
      
      <!-- BEGIN Timeline Code -->
      <div class="timeline">
        <ul class="intervals">
          <li class="first">2004</li>
          <li>2005</li>
          <li>2006</li>
          <li>2007</li>
          <li>2008</li>
          <li>2009</li>
          <li>2010</li>
          <li>2011</li>
          <li>2012</li>
          <li class="last">2013</li>
        </ul> <!-- end .intervals -->          
        <ul class="events">
          <li style="width: 31%; left: 7.5%; border-top: 3px solid #89c5b9">
				    <p><strong><a href="http://www.mica.edu" target="_blank">Maryland Institute College of Art</a></strong> (paint, draw and design, etc)</p>
          </li>
          <li style="width: 20%; left: 39%; border-top: 3px solid #195192">
				    <p><strong><a href="http://www.ainq.com" target="_blank">Audacious Inquiry</a></strong> (interactive designer)</p>
          </li>
          <li style="width: 23%; left: 59%; border-top: 3px solid #c65e00">
				    <p><strong><a href="http://www.utexas.edu/" target="_blank">University of Texas at Austin</a></strong> (hardcore coding)</p>
          </li>
          <li style="width: 56%; left: 29%;">
				    <p><strong><a href="http://www.imjeee.com/" target="_blank">Freelance design + development work</a></strong> (your wish is my command)</p>
          </li>
          <li style="width: 14%; left: 83%; border-top: 3px solid #cd0730">
				    <p><strong><a href="http://www.nba.com/rockets/" target="_blank">Entering NBA draft</a></strong> ...</p>
		      </li>
        </ul> <!-- end .events -->
      </div> <!-- end .timeline -->
      <!-- END Timeline Code -->

      <!-- BEGIN Skills Code -->
      <div class="skills-chart">
        <ul class="intervals">
          <li class="first">touch on in class</li>
          <li>had entire class(es) using it</li>
          <li>actually used in real projects</li>
          <li class="last">with google, I can get it done</li>
        </ul> <!-- end .intervals -->          
        <ul class="events">
          <li style="width: 76%; background: #e52836;">Java</li>
          <li style="width: 65%; background: #375e8c;">Python</li>
          <li style="width: 85%; background: #f9d21e; color: black;">CSS</li>
          <li style="width: 45%; background: #8bc53f;">C++</li>
          <li style="width: 55%; background: #5e65a5;">PHP</li>
          <li style="width: 60%; background: #32a9a5;">Javascript</li>
          <li style="width: 50%; background: #29080a;">Actionscript</li>
          <li style="width: 95%; background: #dc4d2f;">HTML</li>
        </ul> <!-- end .events -->
      </div> <!-- end .timeline -->
      <!-- END Timeline Code -->

      <div id="education" class="block">
        <h1>Education</h1>
        <img src="<?php bloginfo('template_url'); ?>/images/education.png" />
        <p>
          <a title="University of Texas at Austin" href="http://www.utexas.edu/" target="_blank"><strong>The University of Texas at Austin</strong></a><br />
          <a href="http://www.cs.utexas.edu/" target="_blank">Computer Science</a>, GPA: 3.21 (49hrs in CS, Non-degree seeking)<br /><br />
          <a title="Maryland Institute College of Art" href="http://www.mica.edu/" target="_blank"><strong>Maryland Institute College of Art</strong></a><br />
          <a href="http://www.mica.edu/Browse_Art/Graphic_Design_Student_Artwork.html" target="_blank">BFA in Graphic Design</a>, GPA: 3.35 (graduated December 2007)
        </p>
      </div><!-- -->

      <div class="block">
        <h1>Skills</h1>
        <img src="<?php bloginfo('template_url'); ?>/images/skills.png" />
        <p>
          <strong>Programming Languages</strong><br/>
          Java, Python, C++, CSS, Javascript, PHP, Actionscript
          <br /><br />
          <strong>Technology</strong><br />
          OSX/Linux, <a href="http://www.android.com/" target="_blank">Android</a>, <a href="http://www.playframework.org/" target="_blank">Play Framework</a>, <a href="http://framework.zend.com/" target="_blank">Zend Framework</a>, <a href="http://jquery.com/" target="_blank">jQuery</a>, <a href="http://960.gs/" target="_blank">960gs</a>
          <br /><br />
          <strong>Applications</strong><br />
          <a href="http://www.eclipse.org/" target="_blank">Eclipse</a>, <a href="http://www.adobe.com/products/illustrator.html" target="_blank">Adobe Illustrator</a>, <a href="http://www.photoshop.com/" target="_blank">Photoshop</a>, <a href="http://www.adobe.com/products/indesign.html" target="_blank">InDesign</a>, <a href="http://www.adobe.com/products/flash.html" target="_blank">Flash</a>, <a href="http://usa.autodesk.com/maya/" target="_blank">AutoDesk Maya</a></p>
      </div>

      <div class="block">
        <h1>Experience</h1>
        <img src="<?php bloginfo('template_url'); ?>/images/experience.png" />
        <div id="experience">
          <p><strong><a href="http://www.ainq.com" target="_blank">Audacious Inquiry, Catonsville, MD</a></strong>
            <br />
            <em>Interactive Designer</em>
            <ul>
              <li>Contributed in a team environment developing web portals for informational, social networking, and health care infrastructure websites.</li>
              <li>Designed user interface, interaction flow, and information architecture. Collaborated on wire frame and storyboarding for iOS and Android platforms.</li>
              <li>Graphic design work in print, web, and television.</li>
            </ul>
          </p>
          <p>
            <strong><a href="http://www.vertive.com/" target="_blank">Vertive, Austin, TX</a></strong>
            <br />
            <em>Web developer (Internship)</em>
            <ul>
              <li>Designed and built complete web widget using PHP, Javascript, CSS, jQuery, AJAX on top of Zend framework on offers.com.</li>
              <li>Participated in high level discussions regarding new features and formulation of database model in a MVC framework.</li>
            </ul>
          </p>
          <p>
            <strong>Freelance</strong>
            <br />
            <em>Owner/Operator</em>
            <ul>
              <li>Developed and designed websites for a number of clients including Audacious Inquiry, bloomSky health, University of Iowa iAPL lab, and Wilkins-Barbera.</li>
            </ul>
          </p>
        </div>
      </div><!-- -->
      


    </div><!-- #about -->
  </div> <!-- right -->
</body>
<?php get_footer(); /* this is used by many Wordpress features and plugins to work proporly */ ?>
