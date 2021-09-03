$(window).scroll(function(){
  if ($(window).scrollTop() >= 87) {
    $('.bottom-header').addClass('fixed-header');
  }
  else {
    $('.bottom-header').removeClass('fixed-header');
  }
});

$(document).ready(function() {
  $('.testimonial-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: false
  });

  $('.navbar-toggler').on('click', function () {
    $(this).toggleClass('active');
  });
});