<?php
echo $this->Html->css('home', array('block' => 'cssTop'));
echo $this->element('Default/topbar');
echo $this->element('Default/fixed-navbar');
?>
<div id="carouselHeader" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item carousel-item-small active carousel-item-03">
            <div class="carousel-caption text-left">
                <h1 id="after-carousel">MURAYAMA ENGENHARIA</h1>
                <p class="lead d-none d-md-block">Sempre mantendo uma equipe de profissionais direcionada para o melhor resultado.</p>
            </div>
        </div>
    </div>
</div>
<section class="container" style="margin-top: 70px">
    <div class="row text-left">
        <div class="col-md-12 col-xs-12 text-center">
            <h2 class="area-title pb-0">Nossa equipe</h2>
            <p class="p-0 m-0">Construir idéias e edificar sonhos.</p>
        </div>
    </div>
    <div class="row mt-5">
        <?php foreach ($contributors as $row) : ?>
            <div class="col-md-3 col-xs-12" style="margin-bottom: 50px">
                <div class="card p-3 text-center" style="height: 430px !important;">
                    <div class="card-body p-0 m-0">
                        <div style="background: url('../../img/contributors/<?php echo $row['image']; ?>'); background-size: cover; background-position: center center; background-repeat: no-repeat; height: 300px"></div>
                        <p class="m-0 p-0 pt-2 text-uppercase contributor-name"><?php echo $row['name']; ?></p>
                        <p class="m-0 p-0 contributor-role"><?php echo $row['role']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php echo $this->element('Home/testimonials'); ?>
<?php echo $this->element('Home/budget'); ?>
<?php echo $this->element('Default/footer'); ?>
<div id="whatsButton"></div>
