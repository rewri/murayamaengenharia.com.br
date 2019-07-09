<?php
echo $this->Html->css('home', array('block' => 'cssTop'));
echo $this->element('Default/topbar');
echo $this->element('Default/fixed-navbar');
?>
<div id="carouselHeader" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item carousel-item-small active carousel-item-04" style="background-image: linear-gradient(rgba(0, 0, 0, 0.70), rgba(0, 0, 0, 0.20)), url('http://murayamaengenharia.com.br/novo/img/projects/<?php echo $project['image']; ?>'); background-position: bottom center">
            <div class="carousel-caption text-left">
                <h1 id="after-carousel">MURAYAMA ENGENHARIA</h1>
                <p class="lead d-none d-md-block">A Murayama Engenharia e Construção orgulha-se do que faz e o faz com amor e dedicação.</p>
            </div>
        </div>
    </div>
</div>
<section class="container" style="margin-top: 70px">
    <div class="row text-left">
        <div class="col-md-12 col-xs-12 text-center">
            <h2 class="area-title pb-0"><?php echo $project['title']; ?></h2>
            <p class="p-0 m-0" style="font-size: 1.1em"><?php echo $project['subtitle']; ?></p>
            <p class="text-justify mt-5" style="font-size: 1.2em"><span class="icon-check"></span> <?php echo nl2br($project['description']); ?></p>
        </div>
    </div>
    <div class="row mt-5 mb-5">
        <div class="col-md-4 col-xs-12">
            <a class="" href="http://murayamaengenharia.com.br/novo/img/projects/<?php echo $project['image']; ?>" data-lightbox="<?php echo $project['title']; ?>" data-title="<?php echo $project['title']; ?>">
                <img class="" src="http://murayamaengenharia.com.br/novo/img/projects/<?php echo $project['image']; ?>" width="100%" alt="" style="border-radius: 15px">
            </a>
        </div>
        <?php foreach ($project['project_images'] as $image) : ?>
            <div class="col-md-4 col-xs-12 mb-4">
                <a class="" href="<?php echo $image['image']; ?>" data-lightbox="<?php echo $project['title']; ?>" data-title="<?php echo $project['title']; ?>">
                    <img class="" src="<?php echo $image['image']; ?>" width="100%" alt="" style="border-radius: 15px">
                </a>
            </div>
        <?php endforeach;?>
    </div>
</section>
<?php echo $this->element('Default/numbers'); ?>
<?php echo $this->element('Home/testimonials'); ?>
<?php echo $this->element('Home/budget'); ?>
<?php echo $this->element('Default/footer'); ?>
<div id="whatsButton"></div>
