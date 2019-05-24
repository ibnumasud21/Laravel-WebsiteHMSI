$(window).on('load', function() {
  $('#status').fadeOut();
  $('#preloader').delay(5000).fadeOut('slow');
  $('body').delay(5000).css({'overflow':'visible'});
})
