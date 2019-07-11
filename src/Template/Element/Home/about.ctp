<section class="container">
    <div class="row text-left" id="who">
        <div class="col-md-12 col-xs-12 text-center">
            <h2 class="area-title pb-0">Quem somos</h2>
            <p class="area-subtitle">Ética, inovação e solidez</p>
        </div>
        <div class="col-md-7 col-xs-12">
            <p>
                A construção civil tem como característica a execução de obras em locais diversos e cada obra possui um projeto próprio.
                Pensando nisso a <strong>Murayama Engenharia e Construção</strong> nasceu com a missão de atender de maneira diferenciada a cada projeto, pensando na sustentabilidade e responsabilidade social.
            </p>
            <p>
                Nós acreditamos que um trabalho realizado com afinco torna-se muito mais que um trabalho e a <strong>Murayama Engenharia e Construção</strong> se orgulha do que faz e faz com amor e dedicação.
            </p>
            <ul>
                <li><span class="icon-target"></span> Gerenciamento completo de obras</li>
                <li><span class="icon-target"></span> Construções residenciais, comerciais e industriais</li>
                <li><span class="icon-target"></span> Instalações elétricas, hidráulicas, carpintaria, pintura, reparos e reformas</li>
                <li><span class="icon-target"></span> Projetos arquitetônicos, hidrossanitários, elétricos e hidráulicos</li>
            </ul>
        </div>
        <div class="col-md-5 col-xs-12 text-right who-image-div">
            <?php echo $this->Html->image('home/fachada.jpg', array('alt' => 'Fachada Murayama Engenharia')); ?>
            <div class="who-image-back"></div>
            <p class="mt-4">
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
            </p>
        </div>
    </div>
</section>
