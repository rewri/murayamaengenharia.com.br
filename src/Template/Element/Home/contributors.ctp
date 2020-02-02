<?php $chunk = $this->request->is('mobile') ? 1 : 4;
$slices = array_chunk($contributors, $chunk); ?>
<div class="container text-center" id="contributors">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <h2 class="area-title pb-0">Equipe</h2>
            <p class="area-subtitle">Construir idéias e edificar sonhos.</p>
        </div>
    </div>
    <div class="row mx-auto my-auto">
        <div id="contributors-carousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <?php foreach ($slices as $key => $slice) : ?>
                    <?php $active = $key == 0 ? 'active' : null; ?>
                    <div class="carousel-item carousel-item-contributor <?php echo $active; ?>">
                        <div class="row">
                            <?php foreach ($slice as $row) : ?>
                                <div class="col-md-3 col-xs-12">
                                    <div class="card p-3">
                                        <div class="card-body p-0 m-0">
                                            <div style="background: url('//murayamaengenharia.com.br/webroot/img/contributors/<?php echo $row['image']; ?>'); background-size: cover; background-position: center top; background-repeat: no-repeat; height: 300px"></div>
                                            <p class="m-0 p-0 pt-2 text-uppercase contributor-name"><?php echo $row['name']; ?></p>
                                            <p class="m-0 p-0 contributor-role"><?php echo $row['role']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 col-xs-12"></div>
        <div class="col-md-2 col-xs-12">
            <a class="carousel-control-prev text-dark" href="#contributors-carousel" role="button" data-slide="prev">
                <span class="fa fa-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next text-dark" href="#contributors-carousel" role="button" data-slide="next">
                <span class="fa fa-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="col-md-5 col-xs-12"></div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12 col-xs-12 text-center">
            <?php echo $this->Html->link('
            <button type="button" class="btn btn-outline-secondary text-uppercase project-button-all">
                Conheça toda nossa equipe
            </button>
            ', array(
                'controller' => 'pages',
                'action' => 'contributors'
            ), array(
                'escape' => false
            )); ?>
        </div>
    </div>
</div>
