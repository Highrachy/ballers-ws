function toggleQuestions(id) {
  $('#payment, #profile, #security, #getting-started').hide();
  $("#"+id).show();
}
function validateContactUsForm(){
  if (
    $('#contact-name').val().length > 0 &&
    $('#contact-email').val().length > 0 &&
    $('#contact-message').val().length > 0
  ) {
    $('.contact-hello-btn').prop('disabled', false);
  } else {
    $('.contact-hello-btn').prop('disabled', true);
  }
}

$(document).ready(function(){  
  $('#payment, #profile, #security').hide();
  var url = window.location.href;
  if(url.includes("contact.php")){
    validateContactUsForm();
    $('#contact-name, #contact-email, #contact-message').keypress(validateContactUsForm);
  }

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

  $('.faq-category-slider').slick({
    speed: 500,
    infinite: true,
    centerMode: true,
    autoplay: true,
    arrows: false,
    autoplaySpeed: 4000,
    slidesToScroll: 1,
    centerPadding: '0',
    slidesToShow: 4,
    dots: true,
    customPaging: function(i) {
      return '<span class="faq-slider-dot" id=' + i + ">&nbsp;</span>";
    },
    useTransform: true,
    cssEase: "ease-in-out",
    responsive: [
        {
          breakpoint: 992,
          dots: true,
          useTransform: true,
          cssEase: "ease-in-out",
          settings: {
            centerMode: true,
            centerPadding: '0',
            slidesToShow: 3
          }
        },
        {
          breakpoint: 576,
          dots: true,
          settings: {
            centerMode: true,
            centerPadding: '0',
            slidesToShow: 1
          }
        }
    ]
  });

  //faq icon toggle
  $('.card').on('shown.bs.collapse', function(){
      $(this).find('.faq-icon, .faq-option-category-icon').text((text) => text === '-' ? '+' : '-');
      }).on('hidden.bs.collapse', function(){
      $(this).find('.faq-icon, .faq-option-category-icon').text((text) => text === '+' ? '-' : '+');     
  });
});
