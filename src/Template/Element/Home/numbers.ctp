<style>
    .box {
        height: 180px;
        font-size: 24px;
        color: #eeeeee;
    }
    .Count {
        font-family: 'Oswald', sans-serif;
        text-transform: uppercase;
        font-size: 4.5rem;
        color: #ffffff;
        text-shadow: 1px 1px 1px #000;
        margin: 0;
        padding: 0;
    }
    .icon {
        font-weight: lighter;
        text-shadow: 1px 1px 1px #000;

        color: #fff;
        font-size: 2rem;
        margin: 0;
        padding: 0;
        opacity: .5;
    }
    .label {
        margin: 0;
        padding: 0;
        font-size: 1rem;
        color: #afafaf;
        font-family: 'Lato', sans-serif;
        text-shadow: 1px 1px 1px #000;

    }
</style>
<section class="container-fluid" id="numbers" style="
min-height: 280px;
background-image: linear-gradient(rgba(0, 0, 0, .95), rgba(0, 0, 0, 0.80)),
url('../../img/home/bg-numbers-2.jpg');
background-attachment: fixed;
background-repeat: no-repeat;
background-position: center center; background-size: cover">
    <div class="container">
        <div class="row"  style="padding: 50px 0 10px 0">
            <div class="col-md-4 col-xs-12 box text-center">
                <p class="icon d-none d-lg-block"><i class="fas fa-clock" style="margin: 0; padding: 0"></i></p>
                <p class="Count">3580</p>
                <p class="label">horas trabalhadas</p>
            </div>
            <div class="col-md-4 col-xs-12 box text-center">
                <p class="icon d-none d-lg-block"><i class="fas fa-rocket" style="margin: 0; padding: 0"></i></p>
                <p class="Count">194</p>
                <p class="label">projetos realizados</p>
            </div>
            <div class="col-md-4 col-xs-12 box text-center">
                <p class="icon d-none d-lg-block"><i class="fas fa-user-check" style="margin: 0; padding: 0"></i></p>
                <p class="Count">187</p>
                <p class="label">clientes satisfeitos</p>
            </div>
        </div>
    </div>
</section>

<?php $this->Html->scriptStart(['block' => 'scriptBottom']); ?>

<?php echo $this->Html->scriptEnd(); ?>
