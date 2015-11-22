jQuery(document).ready(function($) {
	jQuery('.grid').isotope({
	  itemSelector: '.grid-item',
	  layoutMode: 'masonry'
	});	
	jQuery('li a','#menu-selector').on('click',function(){
		jQuery(this).parent().addClass('active').siblings().removeClass('active');
		var sel = (jQuery(this).attr('rel')) || "*";
		jQuery('.grid').isotope({filter: sel});
		return false;
	});
});
