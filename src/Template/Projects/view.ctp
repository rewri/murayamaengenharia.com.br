<?php echo $this->Html->css('style.css'); ?>
<div id="carouselHeader" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item carousel-item-small active carousel-item-04" style="background-image: linear-gradient(rgba(0, 0, 0, 0.70), rgba(0, 0, 0, 0.20)), url('//murayamaengenharia.com.br/webroot/img/projects/<?php echo $project['id']; ?>/capa.jpg'); background-position: bottom center">
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
            <?php if (!empty($project['subtitle'])) : ?>
                <p class="p-0 m-0" style="font-size: 1.1em"><?php echo $project['subtitle']; ?></p>
            <?php endif; ?>
            <p class="pt-2 m-0 text-uppercase" style="font-size: 1.1em"><?php echo $project['project_category']['title']; ?></p>
            <?php if (!empty($project['date'])) : ?>
                <p class="p-0 m-0" style="font-size: 1.1em"><?php echo $this->Time->format('d/m/Y', $project['date']); ?></p>
            <?php endif; ?>
            <?php if (!empty($project['description'])) : ?>
                <p class="text-justify mt-5" style="font-size: 1.2em"><span class="icon-check"></span> <?php echo nl2br($project['description']); ?></p>
            <?php endif; ?>

        </div>
    </div>
    <div class="row mt-5 mb-5">
        <div class="col-md-4 col-xs-12 mb-4">
            <a class="" href="//murayamaengenharia.com.br/webroot/img/projects/<?php echo $project['id']; ?>/capa.jpg" data-lightbox="<?php echo $project['title']; ?>" data-title="<?php echo $project['title']; ?>">
                <img class="" src="//murayamaengenharia.com.br/webroot/img/projects/<?php echo $project['id']; ?>/capa-thumb.jpg" width="100%" alt="" style="border-radius: 15px">
            </a>
        </div>
        <?php foreach ($project['project_images'] as $image) : ?>
            <div class="col-md-4 col-xs-12 mb-4">
                <a class="" href="//murayamaengenharia.com.br/webroot/img/projects/<?php echo $project['id']; ?>/<?php echo $image['image']; ?>" data-lightbox="<?php echo $project['title']; ?>" data-title="<?php echo $project['title']; ?>">
                    <img class="" src="//murayamaengenharia.com.br/webroot/img/projects/<?php echo $project['id']; ?>/<?php echo $image['image']; ?>" width="100%" alt="" style="border-radius: 15px">
                </a>
            </div>
        <?php endforeach;?>
    </div>
    <?php if (!empty($otherProjects)) : ?>
        <div class="row" id="projects">
            <div class="col-md-12 col-xs-12 text-center mt-5 pt-5">
                <h4>Outras obras</h4>
            </div>
            <?php foreach ($otherProjects as $row) : ?>
                <div class="col-md-3 col-xs-12">
                    <?php echo $this->element('Projects/card', array('data' => $row)); ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <div class="row mb-5">
        <div class="col-md-12 col-xs-12 text-center">
            <?php echo $this->Html->link('
            <button type="button" class="btn btn-outline-secondary text-uppercase project-button-all">
                Conheça todas nossas obras
            </button>
            ', array(
                'controller' => 'projects',
                'action' => 'index'
            ), array(
                'escape' => false
            )); ?>
        </div>
    </div>
</section>
<?php echo $this->element('Default/numbers'); ?>
<?php echo $this->element('Home/testimonials'); ?>
<?php echo $this->element('Home/budget'); ?>
