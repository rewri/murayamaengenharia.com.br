<?php echo $this->Html->css('style.css'); ?>
<div id="carouselHeader" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <?php $numbers = array('01', '02', '03', '04'); $randKey = array_rand($numbers, 1); ?>
        <div class="carousel-item carousel-item-small active carousel-item-<?php echo $numbers[$randKey]; ?>">
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
            <h2 class="area-title pb-0"><?php echo $category['title']; ?></h2>
            <?php if (!empty($category['description'])) : ?>
                <p class="text-justify mt-5" style="font-size: 1.2em"><span class="icon-check"></span> <?php echo nl2br($category['description']); ?></p>
            <?php endif; ?>
        </div>
    </div>
    <?php if (!empty($projects)) : ?>
        <div class="row" id="projects">
            <?php foreach ($projects as $row) : ?>
                <div class="col-md-4 col-xs-12">
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
    <?php if (!empty($projectCategories)) : ?>
        <div class="row">
            <?php echo $this->element('Projects/categories_buttons', array('projectCategories' => $projectCategories)); ?>
        </div>
    <?php endif; ?>
</section>
<?php echo $this->element('Default/numbers'); ?>
<?php echo $this->element('Home/testimonials'); ?>
<?php echo $this->element('Home/budget'); ?>
