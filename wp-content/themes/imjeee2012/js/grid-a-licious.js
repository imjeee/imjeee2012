/**
* Grid-A-Licious(tm) 0.3
*
* Terms of Use - jQuery Grid-A-Licious
* under the MIT (http://www.opensource.org/licenses/mit-license.php) License.
*
* Copyright 2010 suprb.com All rights reserved.
* (http://suprb.com/apps/grid-a-licious/)
*
*/
 
(function($) {

  $.fn.grid = function(options, item, r, scroll) {

    // Set the optional parameter if needed
    if ( item === undefined ) item = false; 
    if ( scroll === undefined ) scroll = false;
    if ( r === undefined ) r = true;
  
    // default configuration properties
    var defaults = {
      min_cols: 1,
      gap: 15,
      speed: 80,
      duration: 150,
      width: 300,
      easing: 'easeInOutQuart',
      animateUpdate: true,
      postPath: '.post',
      postWidePath: '.postwide',
      postWiderPath: '.postwider',
      postWidestPath: '.postwidest',
      allColsPath: '.allcols'
    };

    options = $.extend(defaults, options);

	var $gridbox = this;

    var l, columns, _c, columns, alt, offx, offy, hh,
     biggest = 0,
      total = 0,
      count = 0,
      footer = 0,
     start = 0;

    // find DOM elements

    $gridbox.css("position", "relative");

	var maxy = new Array();
    
    offy = parseInt($gridbox.css("padding-top").replace('px', ''));
    offx = parseInt($gridbox.css("padding-left").replace('px', ''));

    layout(r);

    // get highest column
    function highest() {
      biggest = 0;
      for (x = 0; x < maxy.length; x++) {
        if (maxy[x] > biggest) {
          biggest = parseInt(maxy[x]);
        }
      }
      $gridbox.css("height", biggest + "px");
    }

    function layout(r) {
      
    var $posts = $(options.postPath, $gridbox);
    var $postsWide = $(options.postWidePath, $gridbox);
    var $postsWider = $(options.postWiderPath, $gridbox);
    var $postsWidest = $(options.postWidestPath, $gridbox);
    var $allCols = $(options.allColsPath, $gridbox);

    var width = options.width;
    
      
      count = 0;
	
	    // column count
      columns = Math.max(options.min_cols, parseInt($gridbox.innerWidth() / (width + options.gap)));

      $posts.css('width', width + 'px');

      // width variations
      $postsWide.css('width', width * 2 + options.gap);
      $postsWider.css('width', width * 3 + options.gap * 2);
      $postsWidest.css('width', width * 4 + options.gap * 3);

      $allCols.css('width', width * columns);

      for (x = 0; x < columns; x++) {
        maxy[x] = 0;
      }

      $posts.each(function(i) {
      
      	if (item===false) $(this).removeClass('open');
        
        total = i;

        var $p = this;
        var $post = $(this);

        var pos, cursor, w, alt = 0;
        var newleft, oldleft, newtop, oldtop;

        w = (Math.floor($post.outerWidth() / width));

        cursor = 0;
        for (x = 0; x < columns - (w - 1); x++) {
          cursor = maxy[x] < maxy[cursor] ? x : cursor;
        }

        if (w > 1) {
          pos = cursor;

          for (var x = 0; x < w; x++) {
            alt = Math.max(alt, maxy[pos + x]);
          }

          for (var x = 0; x < w; x++) {
            maxy[pos + x] = parseInt($post.outerHeight()) + options.gap + alt;
          }

          newleft = pos * (width + options.gap) + offx;
          newtop = alt + offy;

          if (newleft !== oldleft) {
            
            if (options.animateUpdate === false) {
              $post.css({
                'left': pos * (width + options.gap) + offx,
                'top': alt + offy
              });
             highest();
            }

            setTimeout(function() {
              
              if (r===true) {
	              if ($post.hasClass('open'))
	              	$post.fadeOut(options.duration);
	              else 
		              $post.fadeIn(options.duration);         
              }

              count++;
              check(item,r);

              $post.animate({
                left: newleft,
                top: newtop,
                opacity: 1
              }, {
                duration: options.duration,
                easing: options.easing
              });
            }, i * (options.speed));
          } else {
            $post.css({
              'left': pos * (width + options.gap) + offx,
              'top': alt + offy
            });
          }
        } else {
          
          newleft = cursor * (width + options.gap) + offx;
          newtop = maxy[cursor] + offy;

          if (newleft !== oldleft) {
 
            if (options.animateUpdate === false) {
              $post.css({
                'left': cursor * (width + options.gap) + offx,
                'top': maxy[cursor] + offy
              });
             highest();
            }
            
            setTimeout(function() {
       
              if (r===true) {
	              if ($post.hasClass('open'))
	              	$post.fadeOut(options.duration);
	              else 
		            $post.fadeIn(options.duration);         
              }
              
              check(item,r);
              count++;

              $post.animate({
                left: newleft,
                top: newtop,
                opacity: 1
              }, {
                duration: options.duration,
                easing: options.easing
              });
            }, i * (options.speed));
          } else {
            $post.css({
              'left': pos * (width + options.gap) + offx,
              'top': alt + offy
            });
          }

          maxy[cursor] += $post.outerHeight() + options.gap;
        }
      });
    }

    function check(item,r) {
   		
      if (count === total) {
      	if (item && r) { 
		    var oy = parseInt(item.css("top").replace('px', '') - options.gap);
			var ox = parseInt(item.css("top").replace('px', ''));
    		item.fadeIn();
      		if (scroll) $('html,body').animate({scrollTop: oy}, options.duration, options.easing);
        }
        options.animateUpdate = true;
        highest();
      }
    }
  };

})(jQuery);