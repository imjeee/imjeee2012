// Submit the form via Ajax

function submitForm() {
  var contactForm = $(this);

  // Are all the fields filled in?
  $('#sendingMessage').fadeIn();

  $.ajax( {
    url: contactForm.attr( 'action' ) + "?ajax=true",
    type: contactForm.attr( 'method' ),
    data: contactForm.serialize(),
    success: submitFinished
  } );

  // Prevent the default form submission occurring
  return false;
}


// Handle the form Ajax response
function submitFinished( response ) {
  alert('sent');
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

$(document).ready(function() {
  $('#sendMessage').click(function() {
    return submitForm();
  });
});
