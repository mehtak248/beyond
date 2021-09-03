$(window).scroll(function(){
  if ($(window).scrollTop() >= 87) {
    $('.bottom-header').addClass('fixed-header');
  }
  else {
    $('.bottom-header').removeClass('fixed-header');
  }
});

$(document).ready(function() {
  $('.navbar-nav .nav-link, .navbar-nav .btn-blue, .footer-bottom-block ul li a').on('click', function() {
    $('html, body').animate({
      scrollTop: $( $(this).attr('href') ).offset().top - 250
    }, 500);
    return false;
  });

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