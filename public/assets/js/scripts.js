// show questions based on slider on faq page
function toggleQuestions(id) {
  $('#payment, #profile, #security, #getting-started').hide();
  $('#' + id).show();
}

//function to format slider values to currency like format
function formatToCurrency(number) {
  return number.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ',');
}

function removeCommasAndMakeNumber(string) {
  return parseInt(string.replace(/,/g, ''));
}

// google maps initialization
function initMap() {
  let office = { lat: 6.4297284, lng: 3.4297021 };
  let map = new google.maps.Map(
    document.getElementById('contact-address-map'),
    { zoom: 18, center: office }
  );
  let marker = new google.maps.Marker({
    position: office,
    map: map,
    icon: './assets/img/icons/map-marker-icon.png',
  });
}

$(document).ready(function () {
  $('#payment, #profile, #security').hide();

  // initialize popovers
  $(function () {
    $('[data-toggle="popover"]').popover();
  });

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
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 576,
        settings: {
          centerMode: true,
          centerPadding: '0',
          slidesToShow: 1,
        },
      },
    ],
    prevArrow:
      '<span class="prev"><img src="./assets/img/icons/btn-prev.png" alt="previous-arrow" class="slider-prev arrow"></span>',
    nextArrow:
      '<span class="next"><img src="./assets/img/icons/btn-next.png" alt="next-arrow" class="slider-next arrow"></span>',
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
      return '<span class="faq-slider-dot" id=' + i + '>&nbsp;</span>';
    },
    useTransform: true,
    cssEase: 'ease-in-out',
    responsive: [
      {
        breakpoint: 992,
        dots: true,
        useTransform: true,
        cssEase: 'ease-in-out',
        settings: {
          centerMode: true,
          centerPadding: '0',
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 576,
        dots: true,
        settings: {
          centerMode: true,
          centerPadding: '0',
          slidesToShow: 1,
        },
      },
    ],
  });

  //faq icon toggle
  $('.faq-card')
    .on('shown.bs.collapse', function () {
      $(this)
        .find('.faq-option-category-icon')
        .text((text) => (text === '-' ? '+' : '-'));
    })
    .on('hidden.bs.collapse', function () {
      $(this)
        .find('.faq-option-category-icon')
        .text((text) => (text === '+' ? '-' : '+'));
    });

  // use ajax to update select options on index page
  const state = $('#state');
  const area = $('#area');
  const type = $('#type');

  const preSelectedState = state.data('current-value');
  const preSelectedArea = area.data('current-value');
  const preSelectedType = type.data('current-value');

  $.ajax({
    type: 'POST',
    url: './includes/find-house.php',
    data: {
      load_state: true,
    },
    success: function (data) {
      data = JSON.parse(data);
      let text = `<option selected disabled>${
        preSelectedState || 'State'
      }</option>`;

      for (let i = 0; i < data.length; i++) {
        text += `<option value="${data[i].state_id}">${data[i].state_name}</option>`;
      }

      state.html(text);
      area.prop('disabled', true);
      type.prop('disabled', true);
    },
  });

  // set area if it is preselected
  if (preSelectedArea) {
    area.html(
      `<option selected disabled>${preSelectedArea || 'Area'}</option>`
    );
  }

  state.on('change', function () {
    let stateID = $(this).val();
    if (stateID) {
      $.ajax({
        type: 'POST',
        url: './includes/find-house.php',
        data: {
          state_id: stateID,
        },
        success: function (data) {
          data = JSON.parse(data);
          let text = '<option selected disabled>Area</option>';

          for (let i = 0; i < data.length; i++) {
            text += `<option value="${data[i].area_id}">${data[i].area_name}</option>`;
          }

          if (data.message) {
            text = '<option selected disabled>No Area Available</option>';
          }

          area.html(text);
          type.html('<option value="">Select area</option>');
          area.prop('disabled', false);
          type.prop('disabled', true);
        },
      });
    } else {
      area.html('<option value="">Select state</option>');
      type.html('<option value="">Select area</option>');
      area.prop('disabled', true);
      type.prop('disabled', true);
    }
  });

  // set type if it is preselected
  if (preSelectedType) {
    type.html(
      `<option selected disabled>${preSelectedType || 'House Type'}</option>`
    );
  }

  area.on('change', function () {
    let areaID = $(this).val();
    let stateID = state.val();

    if (areaID) {
      $.ajax({
        type: 'POST',
        url: './includes/find-house.php',
        data: {
          area_id: areaID,
          state_id: stateID,
        },
        success: function (data) {
          data = JSON.parse(data);
          let text = '<option selected disabled>House Type</option>';

          for (let i = 0; i < data.length; i++) {
            text += `<option value="${data[i].type}">${data[i].type}</option>`;
          }

          if (data.message) {
            text = '<option selected disabled>No House Available</option>';
          }

          type.html(text);
          type.prop('disabled', false);
        },
      });
    } else {
      area.html('<option value="">Select state</option>');
      type.html('<option value="">Select area</option>');
      area.prop('disabled', true);
      type.prop('disabled', true);
    }
  });
});
