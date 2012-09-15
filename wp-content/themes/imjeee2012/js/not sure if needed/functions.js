// ajax loading pages 
function ajaxLoadPageInit(){
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
}

// contact form
function contactFormInit() {

  // hide contact form
  $('#contact-form').hide();

  // show contact form
  $('#openContact').click(function() {
    $('#contact-form').fadeIn( 'slow', function() {
      $('#senderName').focus();
    });
    return false;
  });

  // When the "Cancel" button is clicked, close the form
  $('#cancel').click( function() { 
    $('#contact-form').fadeOut();
  });
}

// Submit the form via Ajax

function submitForm() {
  var contactForm = $(this);

  // Are all the fields filled in?

  if ( !$('#senderName').val() || !$('#senderEmail').val() || !$('#message').val() ) {

    // No; display a warning message and return to the form
    
    $('#incompleteMessage').fadeIn().delay(messageDelay).fadeOut();
    contactForm.fadeOut().delay(messageDelay).fadeIn();

  } else {

    // Yes; submit the form to the PHP script via Ajax

    $('#sendingMessage').fadeIn();
    contactForm.fadeOut();

    $.ajax( {
      url: contactForm.attr( 'action' ) + "?ajax=true",
      type: contactForm.attr( 'method' ),
      data: contactForm.serialize(),
      success: submitFinished
    } );
  }

  // Prevent the default form submission occurring
  return false;
}


// Handle the form Ajax response
function submitFinished( response ) {
  response = $.trim( response );
  $('#sendingMessage').fadeOut();

  if ( response == "success" ) {

    // Form submitted successfully:
    // 1. Display the success message
    // 2. Clear the form fields
    // 3. Fade the content back in

    $('#successMessage').fadeIn().delay(messageDelay).fadeOut();
    $('#senderName').val( "" );
    $('#senderEmail').val( "" );
    $('#message').val( "" );

    $('#content').delay(messageDelay+500).fadeTo( 'slow', 1 );

  } else {

    // Form submission failed: Display the failure message,
    // then redisplay the form
    $('#failureMessage').fadeIn().delay(messageDelay).fadeOut();
    $('#contactForm').delay(messageDelay+500).fadeIn();
  }
}

function callGrid() {
  $.preload('.post img', {
    placeholder:'http://suprb.com/lib/img/grey.gif',
    threshold: 1,
    onComplete:complete,
    onFinish:finish
  });

  function complete(data){
    var img = new Image();
    img.src = data.image;
    post = $("img[src='"+data.image+"']").parent();
    $(post).css('height',img.height);
  };

  function finish(data){
    $('#box1').grid(settings);
  };

  // on window resize, call again
    var resizeTimer = null;
    $(window).bind('resize', function() {
      if (resizeTimer) clearTimeout(resizeTimer);
      resizeTimer = setTimeout(function(){ 
          $("#box1").grid(settings, null, false);
      }, 100 );   
    });
    

  $(".post").live('click', function() {
    $(t).empty();
    $(t).animate({height:prevh, width: prevw}, 200, function(){
        $(this).append('<img src="'+thumb+'" />');
    });
    
    $(t).delay(100).removeClass('open postwide');
    
    t = this;
    
    $(this).fadeOut('fast', function() {
    
        $(t).append('<div class="loader"><img src="http://suprb.com/lib/img/loading.gif"></div>');
    
          prevh = $(t).height();
          prevw = $(t).width();
          thumb = $(t).find('img').attr('src');
    
          $(t).addClass('open postwide');
          num = nums[Math.floor(Math.random()*nums.length)];
          $(t).empty();
          
          $(t).append('<img class="pme" src="'+$(t).attr('ref')+'" />');
          
          $.preload('.pme', {
            placeholder:'http://suprb.com/lib/img/grey.gif',
            threshold: 1,
            onComplete:complete,
            onFinish:finishh
          });
          function finishh($t){
              $("#box1").grid(settings, $(t), true, true);
          };

      });
  
  });
}

function get_cat_slug($cat_id) {
  $cat_id = (int) $cat_id;
  $category = &get_category($cat_id);
  return $category->slug;
}
