$(document).ready(function() {

  $('.contact-btn').click(function() {
    $('#contact-box').fadeTo("normal", 1);
    $('#contact-box').css("top", "20%");
    $('#cover').fadeTo("normal", .7);
  });

  $('#cover').click(function() {
    $(this).fadeOut("normal");
    $('#contact-box').fadeOut("normal");
  });

  $('input, textarea').focus(function() {
    $(this).animate({ backgroundColor: "white" }, 'fast');
  });

  //if submit button is clicked
  $('#submit').click(function () {

    /* stop form from submitting normally */
    event.preventDefault(); 

    var url = 'http://imjeee.com/wp-content/themes/imjeee2012/process.php';
    var name = $('input[name=name]');
    var email = $('input[name=email]');
    var message = $('textarea[name=message]');

    console.log('name: ' + encodeURIComponent(name.val()));
    console.log('email: ' + email.val());
    console.log('message: ' + encodeURIComponent(message.val())); 

    var error = false;

    if (!name.val()){
      $('#senderName').animate({ backgroundColor: "#ffd3d3" }, 'fast');
      error = true;
    }
    
    if (!email.val()){
      $('#senderEmail').animate({ backgroundColor: "#ffd3d3" }, 'fast');
      error = true;
    }

    if (!message.val()){
      $('#message').animate({ backgroundColor: "#ffd3d3" }, 'fast');
      error = true;
    }

    if (error) return;

    //organize the data properly
    var data = '?name=' + encodeURIComponent(name.val()) + '&email=' + email.val() + '&message='  + encodeURIComponent(message.val());
    url = url + data;
    console.log(data);

    $('#submit').attr("disabled", "disabled");

    $('.ajax').fadeTo("fast", 1);

    var jqxhr = $.post( url, function(data) {
      alert('success');
    })
    .success(function() { alert("second success"); })
    .error(function() { })
    .complete(function() {
      $('.ajax').fadeOut("fast", function() {
        $(this).html('<p>GOT IT</p>');
        $(this).fadeTo("fast", 1, function() {
          $('input, textarea').val('');
          $('#cover').fadeOut("formal");
          $('#contact-box').fadeOut("normal", function() {
            $('.ajax').html('<p>SENDING</p>');
            $('.ajax').fadeOut("fast");
          });
        });
      });
    });

    //cancel the submit button default behaviours
    return false;
  });
});
