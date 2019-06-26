<?php
    $projects = array(
        array(
            'id' => 1,
            'title' => 'Residencial 01',
            'category' => 1,
            'category_name' => 'Residencial',
            'description' => 'Lorem ipsum consectetur adipisicing elit. Animi aut cum, cumque dignissimos.',
            'image' => '../../img/projects/01.jpg',
            'icon' => 'icon-home'
        ),
        array(
            'id' => 2,
            'title' => 'Comercial 01',
            'category' => 1,
            'category_name' => 'Comercial',
            'description' => 'Lorem ipsum consectetur adipisicing elit. Animi aut cum, cumque dignissimos.',
            'image' => '../../img/projects/02.jpg',
            'icon' => 'icon-bag'
        ),
        array(
            'id' => 3,
            'title' => 'Industrial 01',
            'category' => 1,
            'category_name' => 'Industrial',
            'description' => 'Lorem ipsum consectetur adipisicing elit. Animi aut cum, cumque dignissimos.',
            'image' => '../../img/projects/03.jpg',
            'icon' => 'icon-wrench'
        ),
        array(
            'id' => 4,
            'title' => 'Residencial 02',
            'category' => 1,
            'category_name' => 'Residencial',
            'description' => 'Lorem ipsum consectetur adipisicing elit. Animi aut cum, cumque dignissimos.',
            'image' => '../../img/projects/04.jpg',
            'icon' => 'icon-home'
        ),
        array(
            'id' => 5,
            'title' => 'Comercial 02',
            'category' => 1,
            'category_name' => 'Comercial',
            'description' => 'Lorem ipsum consectetur adipisicing elit. Animi aut cum, cumque dignissimos.',
            'image' => '../../img/projects/05.jpg',
            'icon' => 'icon-bag'
        ),
        array(
            'id' => 6,
            'title' => 'Industrial 02',
            'category' => 1,
            'category_name' => 'Industrial',
            'description' => 'Lorem ipsum consectetur adipisicing elit. Animi aut cum, cumque dignissimos.',
            'image' => '../../img/projects/06.jpg',
            'icon' => 'icon-wrench'
        ),
    );
    shuffle($projects);
?>
<section class="container" id="projects">
    <div class="row">
        <div class="col-md-12 col-xs-12 text-center" >
            <h2 class="area-title pb-0">Projetos</h2>
            <p class="p-0 m-0">Cada obra uma excelência, uma dedicação, uma paixão.</p>
        </div>
    </div>
    <div class="row">
        <?php foreach ($projects as $row) : ?>
        <div class="col-md-4 col-xs-12">
            <?php echo $this->element('Projects/card', array('data' => $row)); ?>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="row">
        <div class="col-md-12 col-xs-12 text-center">
            <?php echo $this->Html->link('
            <button type="button" class="btn btn-outline-secondary text-uppercase project-button-all">
                Conheça todos nossos projetos
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
