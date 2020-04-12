$(document).ready(function(){
    // slick slider
    $('.benefits-slider').slick({
        speed: 500,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        centerPadding: '3rem',
        prevArrow: '<span class="prev"><img src="./assets/img/btn-prev.png" alt="previous-arrow" class="slider-prev arrow"></span>',
        nextArrow: '<span class="next"><img src="./assets/img/btn-next.png" alt="next-arrow" class="slider-next arrow"></span>'
    });

    $('.card').on('shown.bs.collapse', function(){
        $(this).find('.faq-icon').text((i, t) => t == '-' ? '+' : '-');
        }).on('hidden.bs.collapse', function(){
        $(this).find('.faq-icon').text((i, t) => t == '+' ? '-' : '+');     
    });
});
