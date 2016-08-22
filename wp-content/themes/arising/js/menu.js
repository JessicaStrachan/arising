jQuery(document).ready(function($) {
  $('body').click(function() {
    console.log('hello');
    $('.js-nav-menu').toggleClass('active');
    $('.js-menu-icon').toggleClass('active');
  });
});
