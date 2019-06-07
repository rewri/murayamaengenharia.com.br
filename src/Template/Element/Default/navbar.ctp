<nav class="navbar navbar-expand-lg navbar-dark fixed-top">

    <?php echo $this->Html->link(
        $this->Html->image('murayama_logo.svg', array('class' => 'main-logo', 'alt' => 'Logo Murayama Engenharia', 'title' => 'Murayama Engenharia')),
        array(
            'plugin' => null,
            'controller' => 'Pages',
            'action' => 'index'
        ),
        array(
            'class' => 'navbar-brand',
            'escape' => false
        )
    ); ?>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#"><i class="fas fa-home"></i> <span class="d-sm-none pl-1"> Home</span> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Quem somos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Projetos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Orçamentos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Equipe</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contato</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Trabalhe conosco</a>
            </li>
        </ul>

    </div>
</nav>

<?php $this->Html->scriptStart(['block' => 'scriptBottom']); ?>
    $(document).ready(function() {

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
<?php echo $this->Html->scriptEnd(); ?>


