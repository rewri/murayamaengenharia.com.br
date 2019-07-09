<?php
echo $this->Html->css('home', array('block' => 'cssTop'));
echo $this->element('Default/topbar');
echo $this->element('Default/fixed-navbar');
?>
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
            <h2 class="area-title pb-0">Nosso Projetos</h2>
            <p class="p-0 m-0">Cada obra uma excelência, uma dedicação, uma paixão.</p>
        </div>
    </div>
    <div class="row mt-5" id="projects">
        <?php foreach ($projects as $row) : ?>
            <div class="col-md-6 col-xs-12">
                <?php
                $link = array(
                    'controller' => 'projects',
                    'action' => 'view',
                    'slug' => $this->Text->slug(mb_strtolower($row['title'])),
                    'id' => $row['id']
                );
                ?>
                <div class="row project-card">
                    <div class="col-md-12">
                        <?php
                        echo $this->Html->link('<div class="project-image" style="background: url(../../img/projects/' . $row['image'] . '); background-size: cover; background-repeat: no-repeat; background-position: center center;"></div>',
                            $link,
                            array(
                                'escape' => false,
                                'title' => $row['title'],
                            )
                        );
                        ?>
                    </div>
                    <div class="col-md-12">
                        <p class="mb-3 mt-3">
                            <?php
                            echo $this->Html->link($row['title'],
                                $link,
                                array(
                                    'class' => 'project-title',
                                    'escape' => false,
                                    'title' => $row['title'],
                                )
                            );
                            ?>
                        </p>
                        <?php if (!empty($row['subtitle'])) : ?>
                            <p class="mb-2"><?php echo $row['subtitle']; ?></p>
                        <?php endif; ?>
                        <p class="pt-0 mt-0">
                            <?php
                            echo $this->Html->link('
                                <button type="button" class="btn btn-outline-light btn-sm project-button">
                                    Veja mais <span class="icon-plus pl-1"></span>
                                </button>
                                ',
                                $link,
                                array(
                                    'escape' => false,
                                    'title' => 'Veja mais detalhes',
                                )
                            );
                            ?>
                        </p>
                    </div>
                </div>

            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php echo $this->element('Default/numbers'); ?>
<?php echo $this->element('Home/project_types'); ?>
<?php echo $this->element('Home/testimonials'); ?>
<?php echo $this->element('Home/budget'); ?>
<?php echo $this->element('Default/footer'); ?>
<div id="whatsButton"></div>
