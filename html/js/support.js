/*initialization of bx-slider */
$(document).ready(function() {
    $('.bxslider').bxSlider({
		auto:false,
		autoControls:true,
		mode: 'vertical',
  		slideMargin: 0
	});
});
// init Isotope for service section
$(function(){
  var $grid = $('.service-list .grid');
  $grid.isotope({
    itemSelector: '.grid-item',
    masonry : { columnWidth: '.grid-item' },
    filter: '.price, .feature'
  });  
  // filter items of service list on button click    
  var PageLoadFilter = '.price';
  $grid.isotope({ filter: PageLoadFilter});
  $('.service-list .filter-button-group').on( 'click', 'button', function() {
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({ filter: filterValue });
  });
});
// init Isotope for portfolio section
$(function(){
  var $grid = $('.portfolio-list .grid');
  $grid.isotope({
    itemSelector: '.grid-item',
    masonry : { columnWidth: '.grid-item' },
    filter: '.personal, .business'
  });  
  // filter items of portfolio list on button click    
  var PageLoadFilter = '*';
  $grid.isotope({ filter: PageLoadFilter});
  $('.portfolio-list .filter-button-group').on( 'click', 'button', function() {
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({ filter: filterValue });
  });
});