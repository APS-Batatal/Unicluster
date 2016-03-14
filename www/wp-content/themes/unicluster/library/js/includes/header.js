jQuery(document).ready(function($) {
  var $header = $('header.header');
  $('.navbar-toggle', $header).on('click',function(){
    $(this).toggleClass('collapsed');
    $('.navbar-collapse',$header).toggleClass('collapse')

  });
});
