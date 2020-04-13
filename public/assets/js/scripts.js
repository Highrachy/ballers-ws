$(document).ready(function(){    
    // slick slider
    $('.benefits-slider').slick({
        speed: 500,
        infinite: true,
        centerMode: true,
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToScroll: 1,
        centerPadding: '0',
        slidesToShow: 3,
        responsive: [
            {
              breakpoint: 992,
              settings: {
                centerMode: true,
                centerPadding: '1.5rem',
                slidesToShow: 2
              }
            },
            {
              breakpoint: 576,
              settings: {
                centerMode: true,
                centerPadding: '0',
                slidesToShow: 1
              }
            }
        ],
        prevArrow: '<span class="prev"><img src="./assets/img/icons/btn-prev.png" alt="previous-arrow" class="slider-prev arrow"></span>',
        nextArrow: '<span class="next"><img src="./assets/img/icons/btn-next.png" alt="next-arrow" class="slider-next arrow"></span>'
    });

<<<<<<< HEAD
    $('.faq-category-slider').slick({
      speed: 500,
      infinite: true,
      centerMode: true,
      autoplay: true,
      autoplaySpeed: 4000,
      slidesToScroll: 1,
      centerPadding: '0',
      slidesToShow: 4,
      responsive: [
          {
            breakpoint: 992,
            settings: {
              centerMode: true,
              centerPadding: '0',
              slidesToShow: 3
            }
          },
          {
            breakpoint: 576,
            settings: {
              centerMode: true,
              centerPadding: '0',
              slidesToShow: 1
            }
          }
      ]
    });

=======
>>>>>>> ft: small tablets design
    //faq icon toggle
    $('.card').on('shown.bs.collapse', function(){
        $(this).find('.faq-icon').text((i, t) => t == '-' ? '+' : '-');
        }).on('hidden.bs.collapse', function(){
        $(this).find('.faq-icon').text((i, t) => t == '+' ? '-' : '+');     
    });
});
