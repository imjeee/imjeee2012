$(document).ready(function() {

  // get the action filter option item on page load
  var $filterType = $('#filterOptions li.selected a').attr('data-value');
  
  // get and assign the ourHolder element to the
  // $holder varible for use later
  var $holder = $('ul.img-grid');

  // clone all items within the pre-assigned $holder element
  var $data = $holder.clone();

  // attempt to call Quicksand when a filter option
  // item is clicked
  $('#filterOptions li a').click(function(e) {
    // reset the active class on all the buttons
    $('#filterOptions li').removeClass('selected');
    
    // assign the class of the clicked filter option
    // element to our $filterType variable
    var $filterType = $(this).attr('data-value');
    $(this).parent().addClass('selected');

    if ($filterType == 'all') {
      // assign all li items to the $filteredData var when
      // the 'All' filter option is clicked
      var $filteredData = $data.find('li');
      } 
    else {
      // find all li elements that have our required $filterType
      // values for the data-type element
      var $filteredData = $data.find('li[class=' + $filterType + ']');
    }
    
    // call quicksand and assign transition parameters
    $holder.quicksand($filteredData, {
      duration: 800,
      easing: 'easeInOutQuad'
      });
    return false;
    });
});
