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

    // NUMBERS
    function initNumbersCount() {
        var isVisible = true;
        function startNumbersCount() {
            $('.count-number').each(function () {
                $(this).prop('Counter',0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
        }
        $.fn.isOnScreen = function(){
            var win = $(window);
            var viewport = {
                top : win.scrollTop(),
                left : win.scrollLeft()
            };
            viewport.right = viewport.left + win.width();
            viewport.bottom = viewport.top + win.height() - 100;
            var bounds = this.offset();
            bounds.right = bounds.left + this.outerWidth();
            bounds.bottom = bounds.top + this.outerHeight();
            return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
        };
        $(window).scroll(function(){
            if ($('#numbers').isOnScreen()) {
                if (isVisible) {
                    startNumbersCount();
                    isVisible = false;
                }
            }
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
            buttonImage: '<img src="../img/whatsapp.svg" alt="WhatsApp" />'
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

    initNumbersCount();
    initWhatsAppButton();






});

