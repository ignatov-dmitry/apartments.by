/******************************************
    File Name: custom.js
    Template Name: Evernest - Responsive HTML5 Theme 
    Created By: htmldotdesign
    Envato Profile: https://themeforest.net/user/htmldotdesign
    Website: https://html.design
    Version: 1.0
******************************************/

/**== loader js ==*/

setTimeout(function() {
  $(".bg_load").fadeOut("slow");
}, 700);

// search input show/hide

$(".user_search_btn").click(function(e) {
  e.preventDefault();
  $(".user_search_input").toggleClass("search_active");
});

// nice select
$(document).ready(function() {
  //$("select").niceSelect();
});

// client section owl carousel
$(".client_owl-carousel").owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  navText: [],
  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1
    },
    991: {
      items: 2
    }
  }
});

//  team section owl carousel

$(".team_owl-carousel").owlCarousel({
  autoplay: true,
  loop: true,
  margin: 20,
  autoHeight: true,
  nav: true,
  autoWidth: true
});

// gradient background for slider section and contact section on mouse move
$(document).mousemove(function(event) {
  windowWidth = $(window).width();
  windowHeight = $(window).height();

  mouseXpercentage = Math.round((event.pageX / windowWidth) * 100);
  mouseYpercentage = Math.round((event.pageY / windowHeight) * 100);

  $(".slider_section .section_bg").css("background", "radial-gradient(at " + mouseXpercentage + "% " + mouseYpercentage + "%, #440ead, #8322da)");
  $(".contact_section .section_bg").css("background", "radial-gradient(at " + mouseXpercentage + "% " + mouseYpercentage + "%, #440ead, #8322da)");
  $(".team_section .section_bg").css("background", "radial-gradient(at " + mouseXpercentage + "% " + mouseYpercentage + "%, #440ead, #8322da)");
  $(".bg_load").css("background", "radial-gradient(at " + mouseXpercentage + "% " + mouseYpercentage + "%, #440ead, #8322da)");
});

// second carousel indicators
$(".carousel").on("slid.bs.carousel", function() {
  $(".second_indicator li").removeClass("active");
  indicators = $(".carousel-indicators li.active").data("slide-to");
  a = $(".second_indicator")
    .find("[data-slide-to='" + indicators + "']")
    .addClass("active");
});

// showing current year on footer
function displayYear() {
  var d = new Date();
  var currentYear = d.getFullYear();
  document.querySelector("#displayDate").innerHTML = currentYear;
}
displayYear();

// navlink toggle

$(".page_link_dmenu").click(function() {
  $(".page_link_sm-menu").slideToggle(300);
  $(this)
    .find(".dropdown-toggle")
    .toggleClass("drop_active");
});

$(".blog_link_dmenu").click(function() {
  $(".blog_link_sm-menu").slideToggle(300);
  $(this)
    .find(".dropdown-toggle")
    .toggleClass("drop_active");
});

/** google_map js **/

function myMap() {
  var mapProp = {
    center: new google.maps.LatLng(40.712775, -74.005973),
    zoom: 18
  };
  var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
}


function urlGetParams(param = null) {
  let params = [];

  params = window
      .location
      .search
      .replace('?','')
      .split('&')
      .reduce(
          function(p,e){
            var a = e.split('=');
            p[ decodeURIComponent(a[0])] = decodeURIComponent(a[1]);
            return p;
          },
          {}
      );
  if (param === null) {
    return params;
  }
  else if (param in params) {
    return params[param];
  }
  else {
    return false;
  }
}

$('#country_id').change(function () {
  let id = $(this).val();
  getRegions(id);
});

$('#region_id').change(function () {
  let id = $(this).val();
  getCities(id);
});

function getRegions(id, regionId = false) {
  $.ajax({
    async:false,
    url: '/get_regions_ajax/' + id,
    success: function (data) {
      console.log(data);
      $('#region_id').html('').append(data).niceSelect('update');
      if (regionId)  {
        $('#region_id [value=' + regionId + ']').attr('selected', 'selected');
      }
    }
  });
}

function getCities(id, cityId = false) {
  $.ajax({
    async:false,
    url: '/get_cities_ajax/' + id,
    success: function (data) {
      $('#city_id').html('').append(data).niceSelect('update');
      if (cityId)  {
        $('#city_id [value=' + cityId + ']').attr('selected', 'selected');
      }
    }
  });
}

function getApartmentLocation(apartment_id) {
  $.ajax({
    async:false,
    url: '/get_location_ajax/' + apartment_id,
    success: function (data) {
      $('#city_id #city_id_' + data['city']).attr('selected', true)
      $('#city_id').niceSelect('update')
    }
  });
}

$(document).ready(function () {
  if($('input').is('#apartment_id')){
    $('#country_id').change();
    getApartmentLocation($('#apartment_id').val());
  }

  let countryId = urlGetParams('filter[country_id]');
  let regionId = urlGetParams('filter[region_id]');
  let cityId = urlGetParams('filter[city_id]');

  if (countryId) {
    getRegions(countryId, regionId);
  }

  if (regionId) {
    getCities(regionId, cityId)
  }
});

let inputs = document.querySelectorAll('.input__file');
Array.prototype.forEach.call(inputs, function (input) {
  let label = input.nextElementSibling,
      labelVal = label.querySelector('.input__file-button-text').innerText;

  input.addEventListener('change', function (e) {
    let countFiles = '';
    if (this.files && this.files.length >= 1)
      countFiles = this.files.length;

    if (countFiles)
      label.querySelector('.input__file-button-text').innerText = 'Выбрано файлов: ' + countFiles;
    else
      label.querySelector('.input__file-button-text').innerText = labelVal;
  });
});

function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#preview_image').attr('src', e.target.result);
    };

    reader.readAsDataURL(input.files[0]);
  }
}
$("#input__file").change(function(){
  readURL(this);
});