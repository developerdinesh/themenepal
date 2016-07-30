$("document").ready(function($){
    var nav = $('header');

    $(window).scroll(function () {
        if ($(this).scrollTop() > 55) {
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