<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php echo $this->element('Default/metaTags') ?>
    <title><?php echo $defaultPageTitle ?></title>
<?php echo $this->Html->css(array(
    'bootstrap-grid.min.css',
    'bootstrap.min.css',
    'fontawesome-all.min.css',
    'base.css',
    'style.css'
)) ?>
<?php echo $this->fetch('cssTop') ?>
</head>
<body>
    <?php echo $this->fetch('content') ?>
    <?php echo $this->Html->script(array(
        'jquery.min.js',
        'bootstrap.bundle.min.js',
        'fontawesome.min.js',
    )) ?>
    <?php echo $this->fetch('scriptBottom') ?>

    <script>
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

        $(document).ready(function(){

            var flag = true;

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

            $(window).scroll(function(){
                if ($('#numbers').isOnScreen()) {
                    if (flag) {
                        console.log('aqui');
                        startNumbersCount();
                        flag = false;
                    }
                }
            });


        });
    </script>

</body>
</html>
