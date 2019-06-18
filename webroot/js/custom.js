$(document).ready(function() {

    // NAVBAR
    $(document).on('scroll', function() {
        if ($(this).scrollTop() >= $('#after-carousel').position().top + 80) {
            $('.navbar').addClass('solid');
            $('.main-logo').addClass('solid-logo');
        } else {
            $('.navbar').removeClass('solid');
            $('.main-logo').removeClass('solid-logo');
        }
    });

});

