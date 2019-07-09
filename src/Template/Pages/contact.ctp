<?php
echo $this->Html->css('home', array('block' => 'cssTop'));
echo $this->element('Default/topbar');
echo $this->element('Default/fixed-navbar');
?>
<div id="carouselHeader" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item carousel-item-small active carousel-item-01">
            <div class="carousel-caption text-left">
                <h1 id="after-carousel">MURAYAMA ENGENHARIA</h1>
                <p class="lead d-none d-md-block">Informações, orçamentos, dúvidas ou comentários? Fale conosco.</p>
            </div>
        </div>
    </div>
</div>
<div class="container" id="contact">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <h2 class="area-title">Contato</h2>
            <p class="m-0 mb-4">Fique à vontade para falar conosco. Estamos sempre prontos para atendê-lo!</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-xs-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="pb-3"><span class="fa fa-map-marker-alt"></span> Endereço</h3>
                    <address>
                        <p class="m-0">Rua João Passos, 2010, Centro</p>
                        <p class="m-0">Botucatu/SP</p>
                        <p class="pt-3 d-block d-sm-none">
                            <a href="https://goo.gl/maps/ZPXZtSzpSNJhaDH26" class="mobile-contact-btn">
                                <span class="fa fa-map-marked-alt pr-2"></span> Abrir mapa
                            </a>
                        </p>
                    </address>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="pb-3"><span class="fa fa-phone-alt"></span> Telefones</h3>
                    <p class="m-0">(14) 3813.6812</p>
                    <p class="m-0 d-block d-sm-none phone">
                        <a href="tel:551438136812" class="mobile-contact-btn">
                            <span class="fa fa-phone-alt pr-2"></span> Ligar
                        </a>
                    </p>
                    <p class="m-0">(14) 99663.5051</p>
                    <p class="m-0 d-block d-sm-none phone">
                        <a href="tel:5514996635051" class="mobile-contact-btn">
                            <span class="fa fa-phone-alt pr-2"></span> Ligar
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="pb-3"><span class="fa fa-globe"></span> Redes Sociais</h3>
                    <p class="m-0"><a href="https://www.instagram.com/murayamaengenharia/" title="@murayamaengenharia" target="_blank">instagram.com/murayamaengenharia</a></p>
                    <p class="m-0"><a href="https://www.facebook.com/murayamaengenharia/" title="/murayamaengenharia" target="_blank">facebook.com/murayamaengenharia</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <iframe width="100%" height="550" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/search?q=Murayama%20Engenharia%20e%20Constru%C3%A7%C3%A3o%20-%20Rua%20Jo%C3%A3o%20Passos%20-%20Centro%2C%20Botucatu%20-%20SP%2C%20Brasil&key=AIzaSyCqewyBxr-1pP4glqlRPZZDn-y-CrFbpbY" allowfullscreen></iframe>
    </div>
</div>
<?php echo $this->element('Home/budget'); ?>
<?php echo $this->element('Default/footer'); ?>
<div id="whatsButton"></div>
