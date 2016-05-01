jQuery(document).ready(function($) {
  var $lightbox = $('.lightbox');
  var images = [];
  var index = 0;
  $('.carousel .item').each(function() {
    images.push($(this).attr('data-src'))
  });
  console.log(images);

  //listeners
  $(document).on('click', '.slick-slider .slick-slide', function() {
    var index = $(this).attr('rel');
    changeImage(parseInt(index),function(){
      $lightbox.addClass('show').fadeIn('');
    });
  });
  $('.lightbox .img-container').on('swipeleft', function() {
    changeImage((index + 1));
  });
  $('.lightbox .img-container').on('swiperight', function() {
    changeImage((index - 1));
  });
  $('.lightbox .controllers').on('click', function() {
    if ($(this).hasClass('left')) {
      changeImage((index - 1));
    } else {
      changeImage((index + 1));
    }
  });
  $('.lightbox button[name=close]').on('click',function(){
    $lightbox.fadeOut('fast',function(){
      $lightbox.removeClass('show');
    })
  });

  function changeImage(i,callback) {
    if (i > (images.length - 1)) {
      i = 0;
    } else if (i < 0) {
      i = (images.length - 1);
    }
    index = i;

    $('.img-container .image', $lightbox).fadeOut('fast', function() {
      $(this).css('background-image', "url(".concat(images[index], ")"));
      setTimeout(function() {
        $('.img-container .image', $lightbox).fadeIn('fast');
        if(typeof(callback) == 'function'){
          callback();
        }
      }, 300)
    });
  }
});
