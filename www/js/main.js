$( document ).ready(function() {



  /* Search Results Page Functions. */

  // Checks if there are no search results and displays message.
  function check_if_no_movies() {
    // If no movies to show, display message.
    if($('ul.movies-list li:visible').length == 0) {
      $('#no-movies-message').slideDown();
    } else {
      $('#no-movies-message').slideUp();
    }
  }

  // Check on page load on results page.
  if($('ul.movies-list').length) {
    check_if_no_movies();

    // Check if less than 10 results to hide load more button.
    if($('ul.movies-list li').children().length < 10) $('#load-more-movies').hide();
  }



  /* Ajax load search results */
  var offset = 6;

  function load_more_results(query) {

    // send ajax request to get more results.
    $.ajax({
      url: "php/ajax_load.php?" + query + "&offset=" + offset,
      success: function(result) {

        // console.log(result);

        // If no more results, remove load more button.
        if(result.replace(/\s/g, '') == "") {
          $('#load-more-movies').fadeOut();
          $('#pagination').html('<h5>No more results to load...</h5>');
        }

        // Add to webpage.
        $('ul.movies-list').append(result);

        // Update offset for next load.
        offset += 6;
      }
    });
  }

  // Button to load more click function.
  $('#load-more-movies').click(function(e) {
    e.preventDefault();
    load_more_results($(this).data('query'));
  });




  /* Search Results Filter. */

  // Filter by genre.
  if($('#genre-filter').length) { // Check if search results page.

    $('#genre-filter li a').click(function(e) {

      e.preventDefault(); // prevent default action.

      var genre = $(this).data('genre');

      if(genre == 0) {
        $('ul.movies-list li[data-genre=' + genre + ']').show();
      } else {
        $('ul.movies-list li:not([data-genre=' + genre + '])').hide();
        $('ul.movies-list li[data-genre=' + genre + ']').show();
      }

      // Update genre filter highlight
      $('#genre-filter li').removeClass('active');
      $(this).parent('li').addClass('active');

      // Update cost filter highlight
      $('#cost-filter li').removeClass('active');
      $('#normal-cost-filter').parent('li').addClass('active');

      check_if_no_movies();
    });

  }


  // Filter by cost.
  if($('#cost-filter').length) { // Check if search results page.

    $('#cost-filter li a').click(function(e) {

      e.preventDefault(); // prevent default action.

      $('ul.movies-list li').hide();

      if($(this).attr('id') == "low-cost-filter") {

        $('ul.movies-list li').each(function() {
          if(parseInt($(this).data('cost')) < 5) $(this).show();
        });

      } else if($(this).attr('id') == "high-cost-filter") {

        $('ul.movies-list li').each(function() {
          if(parseInt($(this).data('cost')) > 5) $(this).show();
        });

      } else {
        $('ul.movies-list li').show();
      }
      
      // Update cost filter highlight
      $('#cost-filter li').removeClass('active');
      $(this).parent('li').addClass('active');

      // Update genre filter highlight
      $('#genre-filter li').removeClass('active');
      $('#all-movies-filter').parent('li').addClass('active');

      check_if_no_movies();
    });

  }




  /* User Registration */

  // Check if username is available.
  if($('form#register').length) { // if on register page

    var valid_username = false;

    // Disable submitting the form until valid username.
    $('form#register').submit(function(){
      return valid_username;
    });

    $('form#register input#username').on('input', function() {

      var username = $(this).val();

      // Check for username length.
      if(username.length < 5) {
        $("form#register label[for='username'] small").removeClass('green').addClass('red').html("Username is too short...");
        valid_username = false;
        return false; // Stop here.
      }

      $.ajax({
        url: "php/check_username.php?username=" + username,
        success: function(result) {

          if(result == "true") {
            valid_username = true;
            $("form#register label[for='username'] small").addClass('green').html("Username is available!");
          } else {
            valid_username = false;
            $("form#register label[for='username'] small").removeClass('green').addClass('red').html("Username is taken!");
          }

        }
      });
    });

  }


  /* Cart & Checkout */

  $(document).on('click', 'ul.movies-list li a.button-yellow', function(e) {

    e.preventDefault();
    var button = $(this);
    var movie_id = $(this).parent('li').data('id');
    var cart_count = parseInt($('#cart_count').html());

    if(button.data('action') == "add") {

      $.ajax({
        url: "php/cart_update.php?action=add&movie=" + movie_id,
        success: function(result) {

          $('.cart_count').html(result); // Update cart count.
          button.html("View Cart").data('action', 'checkout');

        }
      });

    } else {

      // Redirect to checkout page.
      window.location.href = "cart.php";

    }
    

  });


  $('ul.movies-list li a.remove_from_cart').on('click', function(e) {

    e.preventDefault();
    var button = $(this);
    var movie_id = $(this).parent('li').data('id');
    var cart_count = parseInt($('#cart_count').html());

    $.ajax({
      url: "php/cart_update.php?action=remove&movie=" + movie_id,
      success: function(result) {

        // Redirect if nothing in cart. When removing last item.
        if(parseInt(result) == 0) {
          window.location.href = "movies.php";
          return false;
        }

        $('.cart_count').html(result); // Update cart count.
        button.parent('li').fadeOut();
        $('.checkout_button a').html("Checkout");

      }
    });

  });


});