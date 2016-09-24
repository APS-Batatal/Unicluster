jQuery(document).ready(function($) {
  var $header = $('header.header');
  $('.navbar-toggle', $header).on('click',function(){
    $(this).toggleClass('collapsed');
    $('.navbar-collapse',$header).toggleClass('collapse');
  });
  $(document).on('click','.navbar-header >a:not(.navbar-brand)', function(e){
    e.preventDefault();
  });
  $('.current_page_parent', $header).addClass('active');
});
