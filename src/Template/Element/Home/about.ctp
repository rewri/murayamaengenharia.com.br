<style>
    h2.who {
        text-align:center;
        text-transform:uppercase;
        font-weight: 300 !important;

        color: #454545;

        display: grid;
        grid-template-columns: 1fr auto 1fr;
        grid-template-rows: 25px 0;
        grid-gap: 40px;

        font-size: 2.5rem;
        padding-bottom: 30px;
    }

    h2.who:after,h2.who:before {
        content: " ";
        display: block;
        border-bottom: 1px solid #ccc;
    }
</style>

<section class="container mt-5 mb-5">
    <div class="row text-left">
        <div class="col-md-12 col-xs-12"  style="margin-top: 60px">
            <h2 class="who">Quem somos</h2>
        </div>

        <div class="col-md-7 col-xs-12" style="font-size: 1.1rem; font-weight: 300; font-family: 'Lato', sans-serif; color: #181818">
            <p>
                A construção civil tem como característica a execução de obras em locais diversos e cada obra possui um projeto próprio.
                Pensando nisso a Murayama nasceu com a missão de atender de maneira diferenciada a cada projeto, pensando na sustentabilidade e responsabilidade social.
            </p>
            <p>
                Nós acreditamos que um trabalho realizado com afinco torna-se muito mais que um trabalho, torna-se uma diversão que gera amigos, conhecimento e resultados.
            </p>
            <p>
                A Murayama Engenharia e Construção orgulha-se do que faz e o faz com amor e dedicação.
            </p>
        </div>
        <div class="col-md-5 col-xs-12">
            <?php echo $this->Html->image('home/fachada.jpg'); ?>
        </div>
    </div>


    <div class="row" >
        <div class="col-md-12 col-xs-12 text-left">
            <h2 class="who">Quem somos</h2>
        </div>
        <div class="col-md-7 col-xs-12">
            <p class="lead" style="font-size: 17px">
                A construção civil tem como característica a execução de obras em locais diversos e cada obra possui um projeto próprio.
                Pensando nisso a Murayama nasceu com a missão de atender de maneira diferenciada a cada projeto, pensando na sustentabilidade e responsabilidade social.
            </p>
            <p class="lead" style="font-size: 17px">
                Nós acreditamos que um trabalho realizado com afinco torna-se muito mais que um trabalho, torna-se uma diversão que gera amigos, conhecimento e resultados.
            </p>
            <p class="lead" style="font-size: 17px">
                A Murayama Engenharia e Construção orgulha-se do que faz e o faz com amor e dedicação.
            </p>
        </div>
        <div class="col-md-5 col-xs-12">
            <?php echo $this->Html->image('home/fachada.jpg'); ?>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

</section>
