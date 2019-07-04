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
