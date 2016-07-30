/*banner js*/
$(".owl-carousel_banner").owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false,
            loop:true,
            thumbs: true,
            thumbImage: true,
            margin:0
        },
        640:{
            items:1,
            nav:false,
            loop:true,
            thumbs: true,
            thumbImage: true,
            margin:0
        },
        992:{
            items:1,
            nav:false,
            loop:true,
            thumbs: true,
            thumbImage: true,
            margin:0
        }
    }
})
/*banner end*/
/*team carousel*/
$(".owl-carousel_team").owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false,
            loop:true,
            thumbs: true,
            thumbImage: true,
            autoplay:false,
            autoplayTimeout:2000,
            autoplayHoverPause:true
        },
        640:{
            items:2,
            nav:false,
            loop:true,
            thumbs: true,
            thumbImage: true,
            autoplay:true,
            autoplayTimeout:2000,
            autoplayHoverPause:true
        },
        992:{
            items:3,
            nav:false,
            loop:true,
            thumbs: true,
            thumbImage: true,
            autoplay:false,
            autoplayTimeout:2000,
            autoplayHoverPause:true
        }
    }
})
/*team carousel end*/
/*testimonial carousel css start*/
$(".owl-carousel_testimonial").owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false,
            autoplay:true,
            autoplayTimeout:2000,
            autoplayHoverPause:true
        },
        640:{
            items:2,
            nav:false,
            autoplay:true,
            autoplayTimeout:2000,
            autoplayHoverPause:true
        }
    }
})
/*testimonial carousel css end*/
/*pop up box in portfolio section*/
$(document).ready(function() {
    $(".fancybox").fancybox();
});
// init Isotope for service section
$(function(){
  var $grid = $('.service-list .grid');
  $grid.isotope({
    itemSelector: '.grid-item',
    masonry : { columnWidth: '.grid-item' },
    filter: '.feature'
  });  
  // filter items of service list on button click    
  var PageLoadFilter = '.feature';
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