//animate hamburger on click
const $ = jQuery.noConflict();
const mainNav = $('#main-navigation');

export default function () {
  $('.header .hamburger').click(function () {

    //fires when closing menu
    if ( $(this).is('.is-active') ) {
      $(this).removeClass('is-active');
      mainNav.removeClass('is-open');
      mainNav.attr('aria-expanded', 'false')

    }
    //fires when opening menu
    else {
      $(this).addClass('is-active');
      mainNav.addClass('is-open');
      mainNav.attr('aria-expanded', 'true')
    }
  });
}
