<div id="carouselHeader" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselHeader" data-slide-to="0" class="active"></li>
        <li data-target="#carouselHeader" data-slide-to="1"></li>
        <li data-target="#carouselHeader" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active carousel-item-01">
            <div class="carousel-caption text-left">
                <h1 id="after-carousel">MURAYAMA ENGENHARIA</h1>
                <p class="lead d-none d-md-block">A Murayama nasceu com a missão de atender de maneira diferenciada a cada projeto, pensando na sustentabilidade e responsabilidade social.</p>
                <?php echo $this->Html->link(
                    'Solicite um orçamento',
                    'javascript:;',
                    array(
                        'class' => 'btn btn-dark btn-sm mt-1 d-none d-md-inline-block text-uppercase',
                        'escape' => false,
                        'id' => 'carousel-budget'
                    )
                ); ?>
            </div>
        </div>
        <div class="carousel-item carousel-item-02">
            <div class="carousel-caption text-center">
                <h2>UMA JOVEM HISTÓRIA DE SUCESSO</h2>
                <p class="lead d-none d-md-block">Profissionalismo e experiência, essa é a MURAYAMA. Empresa jovem e moderna se preocupa em antecipar tendências e construir unidades imobiliárias com qualidade e preços competitivos.</p>
                <?php echo $this->Html->link(
                    'Conheça mais',
                    array(
                        'plugin' => null,
                        'controller' => 'pages',
                        'action' => 'about'
                    ),
                    array(
                        'class' => 'btn btn-dark btn-sm mt-1 d-none d-md-inline-block text-uppercase',
                        'escape' => false
                    )
                ); ?>
            </div>
        </div>
        <div class="carousel-item carousel-item-03">
            <div class="carousel-caption text-right">
                <h2 class="display-4">CONHEÇA NOSSAS OBRAS</h2>
                <p class="lead d-none d-md-block">Nossos clientes recebem atenção diferenciada, uma parceria de respeito e objetivos mútuos. Esse é nosso papel como construtores: construir idéias e edificar sonhos.</p>
                <?php echo $this->Html->link(
                    'Veja nossas construções',
                    array(
                        'plugin' => null,
                        'controller' => 'projects',
                        'action' => 'index'
                    ),
                    array(
                        'class' => 'btn btn-dark btn-sm mt-1 d-none d-md-inline-block text-uppercase',
                        'escape' => false
                    )
                ); ?>
            </div>
        </div>
    </div>
</div>
