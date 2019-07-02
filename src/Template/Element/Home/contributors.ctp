<style>
    .carousel-item-contributor {
        height: 450px;
        background-color: #fff;
    }
</style>
<div class="container text-center" style="margin-bottom: 100px">
    <div class="row">
        <div class="col-md-12 col-xs-12" style="padding-top: 90px; margin-bottom: 45px">
            <h2 class="area-title pb-0">Nossa Equipe</h2>
            <p class="p-0 m-0">Construir idéias e edificar sonhos</p>
        </div>
    </div>
    <div class="row mx-auto my-auto">
        <div id="myCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item carousel-item-contributor active">
                    <div class="row">
                        <?php for ($i = 1; $i < 5; $i++) : ?>
                            <div class="col-md-3 col-xs-12">
                                <div class="card p-3">
                                    <div class="card-body p-0 m-0" style="height: 350px">
                                        <div style="background: url('../../img/contributors/<?php echo $i; ?>.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat; height: 300px"></div>
                                        <p class="m-0 p-0 pt-2 text-uppercase" style="font-weight: 600">nome</p>
                                        <p class="m-0 p-0">cargo</p>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
                <div class="carousel-item carousel-item-contributor">
                    <div class="row">
                        <?php for ($i = 6; $i < 10; $i++) : ?>
                            <div class="col-md-3 col-xs-12">
                                <div class="card p-3">
                                    <div class="card-body p-0 m-0" style="height: 350px">
                                        <div style="background: url('../../img/contributors/<?php echo $i; ?>.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat; height: 300px"></div>
                                        <p class="m-0 p-0 pt-2 text-uppercase" style="font-weight: 600">nome</p>
                                        <p class="m-0 p-0">cargo</p>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-2 col-xs-12">
            <a class="carousel-control-prev text-dark" href="#myCarousel" role="button" data-slide="prev">
                <span class="fa fa-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next text-dark" href="#myCarousel" role="button" data-slide="next">
                <span class="fa fa-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="col-md-5"></div>
    </div>
</div>
