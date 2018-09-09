$(document).ready(function(){


var $tags = $('#goto-splash, #goto-blurb, #goto-schedule, #goto-faq, #goto-register, #goto-sponsor');

$tags.click(function(e) {
    var name  = e.target.id.substr(5);
    $('body, html').animate({
        scrollTop: $('#' + name).offset().top
    }, 1600);

    return false;

});

  /* Following Nav Bar */
  var scrollTimeout;
  $(window).on('scroll', function() {
    if ($(window).width() >= 786) {
      clearTimeout(scrollTimeout);
      scrollTimeout = setTimeout(checkAndMoveNavbarPosition(), 250);
    }
  });

  /* move the nav bar as appropriate */
  var isFixed = false;
  var navbarHeight;
  var deltaLocation;

  recalculateNavbarPosition();

  function checkAndMoveNavbarPosition() {
    if (!isFixed && $(window).scrollTop() > deltaLocation) {
      $('#navbar').stop(true).hide();
      $('#navbar').addClass('fixed');
      isFixed = true;
      $('#navbar').show();
    }
    else if (isFixed && $(window).scrollTop() < deltaLocation) {
      $('#navbar').stop(true).css("display", "none");
      $('#navbar').removeClass('fixed');
      isFixed = false;
      $('#navbar').show();
    }
  }

  function recalculateNavbarPosition() {
    navbarHeight = $('#navbar').outerHeight();
    deltaLocation = $('#splash').outerHeight() - navbarHeight;
    console.log("navbarHeight" + navbarHeight);
    console.log("deltaLocation" + deltaLocation);
  }
});
