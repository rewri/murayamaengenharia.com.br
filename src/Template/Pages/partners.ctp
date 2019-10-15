<div id="carouselHeader" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item carousel-item-small active carousel-item-04">
            <div class="carousel-caption text-left">
                <h1 id="after-carousel">MURAYAMA ENGENHARIA</h1>
                <p class="lead d-none d-md-block">Profissionalismo e experiência, essa é a MURAYAMA.</p>
            </div>
        </div>
    </div>
</div>
<div class="container pb-5" style="padding-top: 70px">
    <div class="row" id="project_types_top">
        <div class="col-md-12 col-xs-12 text-center">
            <h2 class="area-title pb-0">Parceiros</h2>
            <p class="area-subtitle">Compartilhar o ideal e ampliar resultados</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-xs-12 text-center mb-5">
            <?php echo $this->Html->image('partners/logo_avalize_branco.jpg', array('class' => 'pt-4 mb-5 logo-partners', 'alt' => 'Logo Avalize Engenharia', 'id' => 'partner01')); ?>
        </div>
        <div class="col-md-12 col-xs-12 text-center mb-5">
            <?php echo $this->Html->image('partners/logo_ecosolar.jpg', array('width' => 200, 'class' => 'pt-4 mb-5 logo-partners', 'alt' => 'Logo Ecosolar', 'id' => 'partner02')); ?>
        </div>
        <div class="col-md-12 col-xs-12 text-center">
            <?php echo $this->Html->image('partners/logo_iluminar.jpg', array('width' => 380, 'class' => 'pt-4 logo-partners', 'alt' => 'Logo Iluminar', 'id' => 'partner03')); ?>
        </div>
    </div>
</div>
<?php echo $this->element('Home/budget'); ?>
