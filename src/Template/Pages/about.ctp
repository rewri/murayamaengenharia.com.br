<?php
echo $this->Html->css('home', array('block' => 'cssTop'));
echo $this->element('Default/topbar');
echo $this->element('Default/fixed-navbar');
?>
<div id="carouselHeader" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item carousel-item-small active carousel-item-02">
            <div class="carousel-caption text-left">
                <h1 id="after-carousel">MURAYAMA ENGENHARIA</h1>
                <p class="lead d-none d-md-block">Profissionalismo e experiência, essa é a MURAYAMA. Empresa jovem e moderna se preocupa em antecipar tendências e construir unidades imobiliárias com qualidade e preços competitivos.</p>
            </div>
        </div>
    </div>
</div>
<section class="container">
    <div class="row text-left" id="who-detail">
        <div class="col-md-12 col-xs-12">
            <h2 class="area-title">Quem somos</h2>
        </div>
        <div class="col-md-12 col-xs-12">
            <p class="mb-5">
                A construção civil tem como característica a execução de obras em locais diversos e cada obra possui um projeto próprio.
                Pensando nisso a <strong>Murayama Engenharia e Construção</strong> nasceu com a missão de atender de maneira diferenciada a cada projeto, pensando na sustentabilidade e responsabilidade social.
                <br><br>
                Nós acreditamos que um trabalho realizado com afinco torna-se muito mais que um trabalho, torna-se uma diversão que gera amigos, conhecimento e resultados.
                <br>
                A <strong>Murayama Engenharia e Construção</strong> orgulha-se do que faz e o faz com amor e dedicação.
            </p>
        </div>
        <div class="col-md-12 col-xs-12">
            <h3 class="mt-2 mb-2 text-uppercase"><span class="icon-check"></span> UMA JOVEM HISTÓRIA DE SUCESSO</h3>
            <p class="pb-4">Constituída em 2015, a <strong>Murayama</strong> nasceu com o propósito de atender as necessidades imobiliárias da sociedade em que atua. Possui em seu portfólio a construção de diversas unidades residenciais e comerciais, de diversos tamanhos, formas e conceitos.</p>
            <h3 class="mt-2 mb-2 text-uppercase"><span class="icon-check"></span> EXPERIÊNCIA E INOVAÇÃO QUE SURPREENDEM</h3>
            <p class="pb-4">Profissionalismo e experiência, essa é a <strong>Murayama</strong>. Empresa jovem e moderna se preocupa em antecipar tendências e construir unidades imobiliárias com qualidade e preços competitivos, sempre mantendo uma equipe de profissionais direcionada para o melhor resultado.</p>
            <h3 class="mt-2 mb-2 text-uppercase"><span class="icon-check"></span> TRADIÇÃO E PERFEIÇÃO</h3>
            <p class="pb-4">A <strong>Murayama</strong> busca na solidez e tradições japonesas a fluidez na execução de cada obra, bem como a máxima perfeição em seus projetos.</p>
        </div>
    </div>
</section>
<?php echo $this->element('Home/services'); ?>
<?php echo $this->element('Default/numbers'); ?>
<?php echo $this->element('Home/testimonials'); ?>
<?php echo $this->element('Home/video'); ?>
<?php echo $this->element('Home/budget'); ?>
<?php echo $this->element('Home/projects'); ?>
<div class="spacer"></div>
<?php echo $this->element('Default/footer'); ?>
<div id="whatsButton"></div>
