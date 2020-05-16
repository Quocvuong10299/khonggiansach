$(document).ready(function(){
    $('.banner-slick').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        dots:false,
        // centerMode: true,
        variableWidth: true,
        prevArrow: '<div class="slick-arrow slick-prev"><img src="./images/prev-arrow.svg" alt="Arrow Prev"></div>',
        nextArrow: '<div class="slick-arrow slick-next"><img src="./images/next-arrow.svg" alt="Arrow Next"></div>',
        customPaging: function (slick, index) {
            return "<span></span>";
        }
    });

    $('.slick-feedback').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2,
        dots:false,
        // centerMode: true,
        variableWidth: true,
        prevArrow: '<div class="slick-arrow slick-prev"><img src="./images/prev2.svg" alt="Arrow Prev"></div>',
        nextArrow: '<div class="slick-arrow slick-next"><img src="./images/next2.svg" alt="Arrow Next"></div>',
        customPaging: function (slick, index) {
            return "<span></span>";
        }
    })

    $('.relate_post_slick').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2,
        dots:false,
        // centerMode: true,
        variableWidth: true,
        prevArrow: '<div class="slick-arrow slick-prev"><img src="./images/prev-arrow.svg" alt="Arrow Prev"></div>',
        nextArrow: '<div class="slick-arrow slick-next"><img src="./images/next-arrow.svg" alt="Arrow Next"></div>',
        customPaging: function (slick, index) {
            return "<span></span>";
        }
    })
});