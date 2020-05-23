// show questions based on slider on faq page
function toggleQuestions(id) {
  $('#payment, #profile, #security, #getting-started').hide();
  $("#" + id).show();
}

// js validation on contact us page
function validateContactUsForm() {
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

//function to format slider values to currency like format
function formatToCurrency(number) {
  return number.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
}

function removeCommasAndMakeNumber(string) {
  return parseInt(string.replace(/,/g, ''));
}

// google maps initialization to remove errors on other pages
var initMap = () => { }

$(document).ready(function () {
  $('#payment, #profile, #security').hide();

  // code to run if on contact.php
  var url = window.location.href;
  if (url.includes("contact.php")) {
    validateContactUsForm();
    $('#contact-name, #contact-email, #contact-message').keypress(validateContactUsForm);

    initMap = () => {
      var office = { lat: 6.4297284, lng: 3.4297021 };
      var map = new google.maps.Map(document.getElementById('contact-address-map'), { zoom: 18, center: office });
      var marker = new google.maps.Marker({
        position: office,
        map: map,
        // icon: ''
      });
    }
  }

  // slick slider
  $('.benefits-slider').slick({
    speed: 1500,
    infinite: true,
    centerMode: true,
    autoplay: true,
    autoplaySpeed: 7000,
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
    customPaging: function (i) {
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
  $('.card').on('shown.bs.collapse', function () {
    $(this).find('.faq-icon, .faq-option-category-icon').text((text) => text === '-' ? '+' : '-');
  }).on('hidden.bs.collapse', function () {
    $(this).find('.faq-icon, .faq-option-category-icon').text((text) => text === '+' ? '-' : '+');
  });

  //function to format number input values to currency like format
  $(".investment-value-input").on('keyup', function () {
    var number = parseInt($(this).val().replace(/\D/g, ''), 10);
    number = (isNaN(number) ? 0 : number);
    $(this).val(number.toLocaleString());
  });

  const rangeSliderDiv = document.querySelectorAll('.custom-range-div');
  //update the input & label value when slider is moved
  Array.prototype.forEach.call(rangeSliderDiv, (slider) => {
    slider.querySelector('.custom-range').addEventListener('input', (event) => {
      var inputValue = removeCommasAndMakeNumber(event.target.value)
      slider.querySelector('label').innerHTML = 'NGN ' + formatToCurrency(inputValue);
      slider.querySelector('.form-control').value = formatToCurrency(inputValue);
    });
  });

  // update the slider thumb location & label when input value changes
  Array.prototype.forEach.call(rangeSliderDiv, (input) => {
    input.querySelector('.form-control').addEventListener('input', (event) => {
      const maxInputValue = removeCommasAndMakeNumber($(event.target).data('max-amount') || 1000000);
      var inputValue = removeCommasAndMakeNumber(event.target.value);
      if (isNaN(inputValue)) {
        inputValue = 0;
      }
      if (inputValue > maxInputValue) {
        inputValue = maxInputValue;
      }
      input.querySelector('.custom-range').value = inputValue;
      input.querySelector('label').innerHTML = 'NGN ' + formatToCurrency(inputValue);
      input.querySelector('.form-control').value = formatToCurrency(inputValue);
    });
  });

});
