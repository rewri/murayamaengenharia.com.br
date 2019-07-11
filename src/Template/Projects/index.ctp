<div id="carouselHeader" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item carousel-item-small active carousel-item-04">
            <div class="carousel-caption text-left">
                <h1 id="after-carousel">MURAYAMA ENGENHARIA</h1>
                <p class="lead d-none d-md-block">Buscamos na solidez e tradições japonesas a fluidez na execução de cada obra, bem como a máxima perfeição em seus projetos.</p>
            </div>
        </div>
    </div>
</div>
<section class="container" style="margin-top: 70px">
    <div class="row text-left">
        <div class="col-md-12 col-xs-12 text-center">
            <h2 class="area-title pb-0">CONSTRUÇÕES</h2>
            <p class="area-subtitle">Cada projeto uma excelência, uma dedicação, uma paixão.</p>
        </div>
    </div>
    <div class="row mt-5" id="projects">
        <?php foreach ($projects as $row) : ?>
            <div class="col-md-6 col-xs-12">
                <?php echo $this->element('Projects/card', array('data' => $row)); ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php echo $this->element('Default/numbers'); ?>
<?php echo $this->element('Home/testimonials'); ?>
<?php echo $this->element('Home/budget'); ?>
