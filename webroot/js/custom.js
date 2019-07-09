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

    // NAVBAR
    function initNavbar() {

        $("#navbar-home").click(function() {
            $([document.documentElement, document.body]).animate({
                scrollTop: $("#topbar").offset().top
            }, 1200);
        });


        $("#navbar-who").click(function() {
            $([document.documentElement, document.body]).animate({
                scrollTop: $("#who").offset().top - 30
            }, 1200);
        });

        $("#navbar-projects").click(function() {
            $([document.documentElement, document.body]).animate({
                scrollTop: $("#projects").offset().top - 120
            }, 1200);
        });

        $("#navbar-budget, #carousel-budget").click(function() {
            $([document.documentElement, document.body]).animate({
                scrollTop: $("#budget").offset().top - 70
            }, 1200);
        });

        $("#navbar-contributors").click(function() {
            $([document.documentElement, document.body]).animate({
                scrollTop: $("#contributors").offset().top - 30
            }, 1200);
        });
    }

    // WhatsApp
    function initWhatsAppButton() {
        const whatsBtn = $('#whatsButton');
        whatsBtn.hide();
        whatsBtn.floatingWhatsApp({
            phone: '5514996635051 ',
            popupMessage: 'Olá, como podemos ajudar?',
            message: "Olá, gostaria de solicitar um orçamento.",
            showPopup: true,
            showOnIE: false,
            headerTitle: 'Murayama Engenharia',
            headerColor: '#128C7E',
            backgroundColor: '#128C7E',
            buttonImage: '<img src="http://murayamaengenharia.com.br/novo/img/whatsapp.svg" alt="WhatsApp" />'
            // buttonImage: '<img src="http://murayamaengenharia.com.br/znovo/img/whatsapp.svg" alt="WhatsApp" />'
        });

        $(document).scroll(function() {
            var y = $(this).scrollTop();
            if (y > 370) {
                whatsBtn.fadeIn();
            } else {
                whatsBtn.fadeOut();
            }
        });
    }

    initNavbar();
    initWhatsAppButton();
});

