$("document").ready(function($){
    var nav = $('header');

    $(window).scroll(function () {
        if ($(this).scrollTop() >41) {
            nav.addClass("sticky");
        } else {
            nav.removeClass("sticky");
        }
    });
});
jQuery(document).ready(function($){
	$(".navbar-responsive .fa").on("click", function(){
    $(".nav-main").slideToggle();
    $(this).toggleClass("active");
    $(".nav-main").toggleClass("active");
})
});
$(function() {
    $('.service-list .button-group button').click(function() {
        $('.service-list .button-group button.active').removeClass('active');
        $(this).addClass('active');
    });
});
$(function() {
    $('.portfolio-list button ').click(function() {
        $('.portfolio-list button.active').removeClass('active');
        $(this).addClass('active');
    });
});


