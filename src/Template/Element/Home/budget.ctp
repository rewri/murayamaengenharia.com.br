<?php $whatsAppMessage = "Ol%C3%A1%20Murayama%20Engenharia.%20Gostaria%20de%20solicitar%20um%20or%C3%A7amento."; ?>
<div class="container-fluid" id="budget">
    <div class="container">
        <div class="row budget-text">
            <div class="col-md-12 col-xs-12">
                <h2 class="area-title">Orçamentos</h2>
            </div>
            <div class="col-md-6 col-xs-12">
                <p class="pb-3">Para atender cada vez melhor os clientes em suas necessidades, a <strong>Murayama Engenharia</strong> oferece:</p>
                <ul>
                    <li class="pb-4"><span class="icon-arrow-right pr-1"></span> Soluções completas no desenvolvimento de projetos que atendam às estratégias de negócio dos clientes.</li>
                    <li class="pb-4"><span class="icon-arrow-right pr-1"></span> Agilidade no desenvolvimento e formatação de projetos e "sonhos", buscando até mesmo antecipar-se às demandas.</li>
                    <li class="pb-4"><span class="icon-arrow-right pr-1"></span> Expertise na estruturação de parcerias para o projeto e melhor gerenciamento,  com foco na redução de custos, diminuição de perdas e gerenciamento de tempo.</li>
                </ul>
                <p class="pt-2">Por isso, preencha o formulário, solicite agora seu <strong>orçamento grátis e sem compromisso</strong> e brevemente nossos profissionais entrarão em contato com você!</p>
            </div>
            <div class="col-md-6 col-xs-12" id="budget-form-div">
                <?php echo $this->Form->create('Budget', array('url' => array('controller' => 'pages', 'action' => 'budget'), 'id' => 'budget-form')); ?>
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group mb-4">
                                <label for="name">Seu nome</label>
                                <?php echo $this->Form->control('name', array('class' => 'form-control', 'required' => true, 'label' => false, 'placeholder' => 'Nome completo'))?>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group mb-4">
                                <label for="phone">Seu telefone</label>
                                <?php echo $this->Form->control('phone', array('type' => 'tel', 'class' => 'form-control phone', 'required' => true, 'label' => false, 'placeholder' => '(xx) xxxxx.xxxx'))?>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12">
                            <div class="form-group mb-4">
                                <label for="description">Breve descrição da obra</label>
                                <?php echo $this->Form->textarea('description', array('class' => 'form-control', 'rows' => 3, 'required' => true, 'label' => false, 'placeholder' => 'Ex.: casa térrea com sala, sala de jantar, cozinha, banheiro, 3 quartos e lavanderia em terreno de 10x25m.'))?>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12">
                            <div class="form-group mb-4">
                                <button type="submit" class="btn btn-info btn-block text-uppercase" id="budget-form-btn">Enviar</button>
                                <p class="font-italic d-none" id="budget-form-sending">Enviando...</p>
                                <div class="alert d-none alert-success" role="alert" id="budget-form-msg-success">
                                    Contato enviado com sucesso!
                                </div>
                                <div class="alert d-none alert-danger" role="alert" id="budget-form-msg-error">
                                    Erro ao enviar. Atualize a página e tente novamente.
                                </div>
                            </div>
                        </div>
                    </div>
                <?php echo $this->Form->end(); ?>
                <div class="row">
                    <div class="col-md-12 col-xs-12 text-center">
                        <p class="pt-4">Ou entre em contato através:</p>
                    </div>
                    <div class="col-md-4 text-center budget-icon">
                        <a href="https://www.facebook.com/murayamaengenharia/" target="_blank">
                            <span class="fab fa-facebook-square budget-social-icon"></span>
                        </a>
                        <p class="pt-1 budget-social-text">
                            <a href="https://www.facebook.com/murayamaengenharia/" target="_blank">/murayamaengenharia</a>
                        </p>
                    </div>
                    <div class="col-md-4 text-center budget-icon">
                        <a href="https://www.instagram.com/murayamaengenharia/" target="_blank">
                            <span class="fab fa-instagram budget-social-icon"></span>
                        </a>
                        <p class="pt-1 budget-social-text">
                            <a href="https://www.instagram.com/murayamaengenharia/" target="_blank">@murayamaengenharia</a>
                        </p>
                    </div>
                    <div class="col-md-4 text-center budget-icon">
                        <a href="https://web.whatsapp.com/send?phone=5514996635051&text=<?php echo $whatsAppMessage; ?>" target="_blank">
                            <span class="fab fa-whatsapp-square budget-social-icon"></span>
                        </a>
                        <p class="pt-1 budget-social-text">
                            <a href="https://web.whatsapp.com/send?phone=5514996635051&text=<?php echo $whatsAppMessage; ?>" target="_blank">(14) 99663.5051</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->Html->script('jquery.mask.js', array('block' => 'scriptBottom'))?>
<?php echo $this->Html->scriptBlock("
    $(document).ready(function(){
    
        $('#budget-form').submit(function(e) {
        
            e.preventDefault(); 
            const path = 'http://murayamaengenharia.com.br/';
            const form = $(this);
            const url  = path + 'solicitar-orcamento';
            const btn  = $('#budget-form-btn');
            const send = $('#budget-form-sending');
            const msgS = $('#budget-form-msg-success');
            const msgE = $('#budget-form-msg-error');

            btn.hide('slow');
            send.removeClass('d-none').show('slow');
      
            $.ajax({
                type: 'POST',
                url: url,
                data: form.serialize(), 
                success: function(data) {
                    form.find('input[type=text], input[type=tel], textarea').val('');
                    send.hide();
                    msgS.removeClass('d-none').show('slow');
                },
                error: function(err) {
                    form.find('input[type=text], input[type=tel], textarea').val('');
                    send.hide();
                    msgE.removeClass('d-none').show('slow');
                }
            });
        });
    
        var SPMaskBehavior = function (val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        spOptions = {
            onKeyPress: function(val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
            }
        };    
        $('.phone').mask(SPMaskBehavior, spOptions);
    
    });
", array('block' => 'scriptBottom')); ?>
