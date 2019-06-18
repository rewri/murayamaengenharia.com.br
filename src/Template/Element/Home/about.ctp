<section class="container">
    <div class="row text-left" id="who">
        <div class="col-md-12 col-xs-12" >
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
                <?php echo $this->Html->link(
                    'Conheça mais <i class="fas fa-plus-square" style="padding-left: 8px"></i>',
                    array(
                        'plugin' => null,
                        'controller' => null,
                        'action' => null
                    ),
                    array(
                        'class' => 'btn btn-dark btn-sm',
                        'style' => 'background-color: transparent !important; color: #3A5682; padding: 10px 20px; border: 1px solid #3A5682; border-radius: 10px; font-weight: 600; text-transform: uppercase',
                        'escape' => false
                    )
                ); ?>
        </div>
        <div class="col-md-5 col-xs-12 d-none d-md-block text-right" style="padding-top: 20px">

            <?php echo $this->Html->image('home/fachada.jpg', array('alt' => 'Fachada Murayama Engenharia', 'style' => 'margin-top: 5px')); ?>
            <div style="height: 270px; width: 395px; border: 1px solid #b9b9b9; background-color: #fafafa; position: absolute; top: 0; left: 30px; z-index: -99"></div>

        </div>
    </div>
</section>
