// window.onscroll = function () {
//     scrollFunction()
// } ;

// function scrollFunction() {
//     if (document.documentElement.scrollTop > 50) {

//         document.querySelector('.navbar').classList.toggle('navbarscroll');
//         document.querySelector('.links').classList.toggle('navlinkscroll');
//     };
// }

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(window).scrollTop() > 100) {
            $('.navbar').addClass("navbarscroll");
        }
        else {
            $('.navbar').removeClass("navbarscroll");
            // $('.links').removeClass("navlinkscroll");
        }
    });
});
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(window).scrollTop() > 100) {
            $('.links').addClass("navlinkscroll");
        }
        else {
            $('.links').removeClass("navlinkscroll");
            // $('.links').removeClass("navlinkscroll");
        }
    });
});
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(window).scrollTop() > 100) {
            $('.go2top').removeClass("hide");
        }
        else {
            $('.go2top').addClass("hide");
            // $('.links').removeClass("navlinkscroll");
        }
    });
});