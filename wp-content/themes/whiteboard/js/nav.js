$(document).ready(function(){
  ajaxLoadPageInit();
  contactFormInit();
});

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


// Handle the Ajax response

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