<style>
    .box {
        height: 150px;
        font-size: 24px;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #232323;
    }
</style>
<section class="container-fluid" id="numbers" style="background-color: rgba(94,141,213,0.25); background-image: linear-gradient(45deg, #f7f7f7 3.70%, #d6d6d6 3.70%, #d6d6d6 50%, #f7f7f7 50%, #f7f7f7 53.70%, #d6d6d6 53.70%, #d6d6d6 100%);
background-size: 38.18px 38.18px;;">
    <div class="container">
        <div class="row"  style="padding: 25px 0 10px 0">
            <div class="col-md-4 col-xs-12 box text-left">
                <p class="float-number" style="float: left; font-size: 5rem; font-weight: 800">
                    <span class="Count">87</span>
                </p>
                <p class="float-text" style="display: inline; padding-left: 10px">Projetos em andamento</p>
            </div>
            <div class="col-md-4 col-xs-12 box text-left">
                <p class="float-number" style="float: left; font-size: 5rem; font-weight: 800">
                    <span class="Count">175</span>
                </p>
                <p class="float-text" style="display: inline; padding-left: 10px">Projetos entregues</p>
            </div>
            <div class="col-md-4 col-xs-12 box text-left">
                <p class="float-number" style="float: left; font-size: 5rem; font-weight: 800">
                    <span class="Count">49</span>
                </p>
                <p class="float-text" style="display: inline; padding-left: 10px">Clientes satisfeitos</p>
            </div>
        </div>
    </div>
</section>

<?php $this->Html->scriptStart(['block' => 'scriptBottom']); ?>

<?php echo $this->Html->scriptEnd(); ?>
