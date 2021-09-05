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
    
    //Validate the contact form
    $("#frm_contact_form").validate({
        rules: {
            name: "required",
            phone: "required",
            email: {
                required: true,
                email: true
            },
            message: "required"
        },
        submitHandler: function(form) {
            
            //Form Submit Event
            $(form).ajaxSubmit({
                type: "post",
                url: 'controllers/contact.php',
                dataType: 'json',
                beforeSend: function() {
                    $("#btn_contact_submit").attr('disabled', true);
                    $("#btn_contact_submit").html("Sending");
                },
                success: function(response) {
                    //Set the form tag
                    $("#btn_contact_submit").attr('disabled', false);
                    $("#btn_contact_submit").html("SUBMIT");

                    if (response.status == true) {
                        $("#frm_contact_form")[0].reset();
                        $('.alert-success').removeClass('d-none');
                    } else {
                        $('.alert-danger').removeClass('d-none');
                    }
                }
            });
        }
    });

});