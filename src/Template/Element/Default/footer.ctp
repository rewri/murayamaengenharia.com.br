<?php $whatsAppMessage = "Ol%C3%A1%20Murayama%20Engenharia%2C%20%20gostaria%20de%20algumas%20informa%C3%A7%C3%B5es.%20Me%20retorne%20assim%20que%20poss%C3%ADvel.%20Obrigado."; ?>
<div class="container-fluid" id="footer">
    <div class="container text-white">
        <div class="row">
            <div class="col-md-12 col-xs-12 text-center pt-4 pb-5">
                <?php echo $this->Html->link(
                    $this->Html->image('murayama_logo.svg', array('alt' => 'Logo Murayama Engenharia', 'title' => 'Murayama Engenharia', 'class' => 'footer-logo')),
                    array(
                        'plugin' => null,
                        'controller' => 'Pages',
                        'action' => 'index'
                    ),
                    array(
                        'escape' => false
                    )
                ); ?>
            </div>
            <div class="col-md-6 col-xs-12">
                <address>
                    <ul>
                        <li>
                            <a href="https://goo.gl/maps/ZPXZtSzpSNJhaDH26" title="Ver no Google Maps" target="_blank">Rua João Passos, 2010 <br> Centro - Botucatu/SP</a>
                        </li>
                        <li><i class="fas fa-phone"></i> (14) 3813.6812</li>
                        <li><i class="fab fa-whatsapp"></i> (14) 99663.5051</li>
                        <li class="d-none d-md-block"><a href="mailto:contato@murayamaengenharia.com.br">contato@murayamaengenharia.com.br</a></li>
                    </ul>
                </address>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <a href="https://www.facebook.com/murayamaengenharia/" target="_blank">
                            <span class="fab fa-facebook-square footer-social-icon"></span>
                        </a>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="https://www.instagram.com/murayamaengenharia/" target="_blank">
                            <span class="fab fa-instagram footer-social-icon"></span>
                        </a>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="https://web.whatsapp.com/send?phone=5514996635051&text=<?php echo $whatsAppMessage; ?>" target="_blank">
                            <span class="fab fa-whatsapp-square footer-social-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
