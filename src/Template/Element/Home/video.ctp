<section class="container-fluid" id="video">
    <div class="container text-white">
        <div class="row">
            <div class="col-md-5 col-xs-12 video-text">
                <h2 class="area-title text-white pb-2">Murayama</h2>
                <p>Oferecemos serviços diferenciados para atender a cada necessidade de modo diferenciado, buscando sempre uma execução limpa e transparente.</p>
                <p>Nos orgulhamos de cada obra executada, pois em cada um nós colocamos nosso coração e dedicação.</p>
                <?php echo $this->Html->link('
                    <button type="button" class="btn btn-outline-secondary text-uppercase btn-more mt-2">
                        Conheça mais
                    </button>
                    ', array(
                    'controller' => 'Pages',
                    'action' => 'about'
                ), array(
                    'escape' => false,
                )); ?>
            </div>
            <div class="col-md-7 col-xs-12 pt-5 pb-5 text-center">
                <div class="embed-responsive embed-responsive-16by9">
                     <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/bFljMHTQ1QY?rel=0&modestbranding=1&autohide=1&showinfo=0&controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
