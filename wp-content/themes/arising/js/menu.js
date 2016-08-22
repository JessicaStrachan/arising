jQuery(document).ready(function($) {
  $('body').click(function() {
    console.log('hello');
    $('.js-nav-menu').addClass('active');
    $('.js-menu-icon').addClass('active');
  });
});
