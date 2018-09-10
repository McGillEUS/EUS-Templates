/*(function ($) {
  "use strict"

  var $mobileNavToggleBtn = $('.mobile-nav-toggle');

  function onBtnClick (e) {
    var $this = $(this),
        $selectors = $('.mobile-nav');

    $this.toggleClass('is-open');
    $selectors.toggleClass('is-open');
  }

  $(document).ready(function () {
    $mobileNavToggleBtn.on('click', onBtnClick);
  });

})(jQuery);
*/

$(function() {
  mobileNav();
});

function mobileNav() {
  $('.mobile-nav-toggle').on('click', function(){
    var status = $(this).hasClass('is-open');
    if(status){ $('.mobile-nav-toggle, .mobile-nav').removeClass('is-open'); }
    else { $('.mobile-nav-toggle, .mobile-nav').addClass('is-open'); }
  });
}
