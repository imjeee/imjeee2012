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
        <p>Jie is a designe & developer currently living in Austin. Back in his hay days, he would roll with <a href="http://www.ainq.com" target="_blank">suits and ties during the day</a>, and ball till late at night with the rough and tumble playas in the deepest ghettos on the street of Baltimore. Please feel free to <a href="http://www.imjeee.com/contact/" target="_self">get in touch and discuss contract options</a> as he's currently a free agent.
      </div><!-- #jie -->

      <div class="section">
        <div class="block">
          <h1>School + work</h1>
          <p>Things I did not mention in that timeline: born in Xi'an, lived in Hebei, came to the US in 2000, and always called Houston home sweet home. I have unlocked other achievements in life as well: Cultural Shaper second place in drawing, Scholastic regional gold keys, National Art Honor's Society, Dean's list at MICA and UT, named bestman at my buddy's wedding, and scored many game winners in pick up basketball.</p>
        </div>
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
            <li style="width: 29%; left: 7%; border-top: 3px solid #89c5b9">
				      <p><strong><a href="http://www.mica.edu" target="_blank">Maryland Institute College of Art</a></strong> (paint, draw and design)</p>
            </li>
            <li style="width: 17%; left: 39%; border-top: 3px solid #195192">
				      <p><strong><a href="http://www.ainq.com" target="_blank">Audacious Inquiry</a></strong> (interactive designer)</p>
            </li>
            <li style="width: 21%; left: 59%; border-top: 3px solid #c65e00">
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
          <ul class="events">
            <li style="width: 98%; margin: 20px 0 5px 0; color: black; ">Programming Languages</li>
            <li style="width: 76%; background-color: #e52836;">Java</li>
            <li style="width: 65%; background-color: #375e8c;">Python</li>
            <li style="width: 85%; background-color: #f9d21e;">CSS</li>
            <li style="width: 45%; background-color: #8bc53f;">C++</li>
            <li style="width: 55%; background-color: #5e65a5;">PHP</li>
            <li style="width: 60%; background-color: #32a9a5;">Javascript</li>
            <li style="width: 50%; background-color: #3F1919;">Actionscript</li>
            <li style="width: 95%; background-color: #dc4d2f;">HTML</li>

            <li style="width: 98%; margin: 20px 0 5px 0; color: black; ">Technology</li>
            <li style="width: 70%; background-color: #a5cd3c;">Android</li>
            <li style="width: 56%; background-color: #8aa276;">Play Framework</li>
            <li style="width: 52%; background-color: #4698bc;">Zend Framework</li>
            <li style="width: 66%; background-color: #4b81ad;">jQuery</li>
            <li style="width: 86%; background-color: #CCC;">960gs</li>

            <li style="width: 98%; margin: 20px 0 5px 0; color: black; ">Applications</li>
            <li style="width: 74%; background-color: #3d3177;">Eclipse</li>
            <li style="width: 86%; background-color: #e99324;">Adobe Illustrator</li>
            <li style="width: 82%; background-color: #355aac;">Adobe Photoshop</li>
            <li style="width: 76%; background-color: #851d5c;">Adobe Indesign</li>
            <li style="width: 90%; background-color: #d21b2e;">Adobe Flash</li>

          </ul> <!-- end .events -->
        </div> <!-- end .Skills -->

      </div><!-- #about -->
    </div> <!-- right -->
</body>
<?php get_footer(); /* this is used by many Wordpress features and plugins to work proporly */ ?>
