$(document).ready(function(){
    // $('img.plusone').hide();
    // $('img.minustwo').hide();
    // $('img.minusthree').hide();
    

    $('.benefits-slider').slick({
        speed: 500,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        centerPadding: '3rem',
        prevArrow: '<img src="./assets/img/btn-prev.png" alt="previous-arrow" class="slider-prev arrow">',
        nextArrow: '<img src="./assets/img/btn-next.png" alt="next-arrow" class="slider-next arrow">',
    });

    $(".one").click(function() {
        $("img.minusone").toggle();
        $("img.plusone").toggle();
    });
    
    // $(".btn-link").click(function(event) {
    //     var id = event.target.id;
    //     console.log(id);
    //     $("img.plus"+id).toggle();
    //     $("img.minus"+id).toggle();
    // });

    $('.accordion').on('hidden.bs.collapse', function () {
        console.log('closed');    
    });
});
