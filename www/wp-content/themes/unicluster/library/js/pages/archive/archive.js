var timer;
jQuery(document).ready(function($) {
  var $container = $('#inner-content');
  $(window).resize(function() {
    clearTimeout(timer);
    timer = setTimeout(function() {
      correctH();
    }, 100);
  });
  correctH();

  function correctH() {
    if ($(window).width() >= 768) {
      var max = 0;
      $('ul li article', $container).css('height','auto');
      $('ul li article', $container).each(function() {
        if ($(this).outerHeight() > max) {
          max = $(this).outerHeight();
        }
      });
      $('ul li article', $container).height(max);
    } else {
      $('ul li article', $container).height('');
    }
  }
});
