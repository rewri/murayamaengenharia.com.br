$(document).ready(function() {

    // CAROUSEL
    function initCarousel() {
        $('.carousel').carousel({
            interval: 6000,
            pause: false
        });
    }

    // NUMBERS
    function initNumbersCount() {
        var isVisible = true;
        function startNumbersCount() {
            $('.Count').each(function () {
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

    initCarousel();
    initNumbersCount();


});
