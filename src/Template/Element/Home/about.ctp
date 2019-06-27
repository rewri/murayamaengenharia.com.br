<section class="container">
    <div class="row text-left" id="who">
        <div class="col-md-12 col-xs-12">
            <h2 class="area-title">Quem somos</h2>
        </div>
        <div class="col-md-7 col-xs-12">
            <p>
                A construção civil tem como característica a execução de obras em locais diversos e cada obra possui um projeto próprio.
                Pensando nisso a <strong>Murayama Engenharia e Construção</strong> nasceu com a missão de atender de maneira diferenciada a cada projeto, pensando na sustentabilidade e responsabilidade social.
                <br><br>
                Nós acreditamos que um trabalho realizado com afinco torna-se muito mais que um trabalho, torna-se uma diversão que gera amigos, conhecimento e resultados.
                <br>
                A <strong>Murayama Engenharia e Construção</strong> orgulha-se do que faz e o faz com amor e dedicação.
            </p>
            <?php echo $this->Html->link('
            <button type="button" class="btn btn-outline-secondary text-uppercase btn-more">
                Conheça mais
            </button>
            ', array(
                'controller' => 'Pages',
                'action' => 'about'
            ), array(
                'escape' => false
            )); ?>
        </div>
        <div class="col-md-5 col-xs-12 d-none d-md-block text-right who-image-div">
            <?php echo $this->Html->image('home/fachada.jpg', array('alt' => 'Fachada Murayama Engenharia')); ?>
            <div class="who-image-back"></div>
        </div>
    </div>
</section>
