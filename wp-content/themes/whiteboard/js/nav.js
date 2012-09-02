$(document).ready(function(){

	/* ajax loading pages */

	var $mainContent = $("#content"),
	siteUrl = "http://" + top.location.host.toString(),
	url = ''; 

	$(document).delegate("a[href^='"+siteUrl+"']:not([href*=/wp-admin/]):not([href*=/wp-login.php]):not([href$=/feed/])", "click", function() {
		location.hash = this.pathname;
		return false;
	});

	$("#searchform").submit(function(e) {
		location.hash = '?s=' + $("#s").val();
		e.preventDefault();
	});

	$(window).bind('hashchange', function(){
		url = window.location.hash.substring(1); 
		if (!url) { return; } 
		url = url + " #content"; 
		$mainContent.animate({opacity: "0.1"}).html('&lt;p&gt;Please wait...&lt;/&gt;').load(url, function() {
			$mainContent.animate({opacity: "1"});
		});
	});

	$(window).trigger('hashchange');

          // hide contact form
          $('#contact-form').hide();

          //  Initialize auto-hint fields
          $('INPUT.auto-hint, TEXTAREA.auto-hint').focus(function(){
            if($(this).val() == $(this).attr('title')){ 
              $(this).val('');
              $(this).removeClass('auto-hint');
            }
          });
          
          $('INPUT.auto-hint, TEXTAREA.auto-hint').blur(function(){
            if($(this).val() == '' && $(this).attr('title') != ''){ 
              $(this).val($(this).attr('title'));
              $(this).addClass('auto-hint'); 
            }
          });
            
          $('INPUT.auto-hint, TEXTAREA.auto-hint').each(function(){
            if($(this).attr('title') == ''){ return; }
              if($(this).val() == ''){ $(this).val($(this).attr('title')); }
              else { $(this).removeClass('auto-hint'); } 
          });

          // when user click submit button
          // hide contact form
          $('#contact-form :button').click(function() {

            // check if name field is default value
            var name = $('#fullname').val();
            if (name == 'name') {
              $('#fullname').stop().css("background-color", "red").animate({ backgroundColor: "black"}, 1000);
              return false;
            }

            // check if email field is default value
            var email = $('#email').val();
            if (email == 'email') {
              $('#email').stop().css("background-color", "red").animate({ backgroundColor: "black"}, 1000);
              return false;
            }

            // check if message field is default value
            var message = $('#message').val();
            if (message == 'Enter Your Message Here...') {
              $('#message').stop().css("background-color", "red").animate({ backgroundColor: "black"}, 1000);
              return false;
            }

            var dataString = 'name='+ name + '&email=' + email + '&phone=' + phone;
            alert (dataString);
            /*
            $.ajax({
              type: "POST",
              url: "bin/process.php",
              data: dataString,
              success: function() {
                $('#contact-form').hide("slide", { direction: "up" }, 300);
                $('#openContact').show("slide", { direction: "up" }, 300);
              }
            });
            return false;*/

            $('#contact-form').hide("slide", { direction: "up" }, 300);
            $('#openContact').show("slide", { direction: "up" }, 300);
            $('#openContact').append("Thanks! I'll get in touch soon!");
            return false;
          });

          // show contact form
          $('#openContact').click(function() {
            $('#contact-form').show("slide", { direction: "up" }, 300);
            $('#openContact').hide();
          });


        });