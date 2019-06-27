<style>
    .form-control {
        border: 0;
        border-bottom: 1px solid #6c757d;
        background-color: #fbfbfb;
    }
    .form-control::placeholder {
        color: #929292;
        font-size: .9em;
    }

    @media screen and (max-width: 700px) {

        #budget ul {
            padding-left: 0;
        }
        #budget #budget-form-div {
            padding-top: 30px;
            padding-left: 15px !important;
        }
        #budget .budget-icon {
            margin-top: 30px;
        }
        #budget .budget-icon span {
            font-size: 5em !important;
        }


    }
</style>
<div class="container-fluid" style="background-color: #f3f3f3; margin-top: 60px; ">
    <div class="container" id="budget" style="padding-bottom: 50px">
        <div class="row" style="font-size: 1.1em">

            <div class="col-md-12 col-xs-12" style="padding-top: 60px;">
                <h2 class="area-title">Orçamento</h2>
            </div>

            <div class="col-md-6 col-xs-12">
                <p class="pb-3">Para atender cada vez melhor os clientes em suas necessidades, a <strong>Murayama Engenharia</strong> oferece:</p>
                <ul style="list-style: none">
                    <li class="pb-4" style="color: #1d3045; font-size: 1em"><span class="icon-arrow-right pr-1"></span> Soluções completas no desenvolvimento de projetos que atendam às estratégias de negócio dos clientes.</li>
                    <li class="pb-4" style="color: #1d3045; font-size: 1em"><span class="icon-arrow-right pr-1"></span> Agilidade no desenvolvimento e formatação de projetos e "sonhos", buscando até mesmo antecipar-se às demandas.</li>
                    <li class="pb-4" style="color: #1d3045; font-size: 1em"><span class="icon-arrow-right pr-1"></span> Expertise na estruturação de parcerias para o projeto e melhor gerenciamento,  com foco na redução de custos, diminuição de perdas e gerenciamento de tempo.</li>
                </ul>
                <p class="pt-2">Por isso, preencha o formulário, solicite agora seu <strong>orçamento grátis e sem compromisso</strong> e brevemente nossos profissionais entrarão em contato com você!</p>

            </div>

            <div class="col-md-6 col-xs-12" id="budget-form-div" style="padding-left: 80px;">

                <form  autocomplete="off">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group mb-4">
                                <label for="">Seu nome</label>
                                <input type="text" class="form-control" id="bla" placeholder="Nome completo">
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group mb-4">
                                <label for="exampleInputPassword1">Seu telefone</label>
                                <input type="text" class="form-control" id="bla2" placeholder="(xx) xxxx.xxxx">
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12">
                            <div class="form-group mb-4">
                                <label for="exampleInputPassword1">Breve descrição da obra</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Ex.: casa térrea com sala, sala de jantar, cozinha, banheiro, 3 quartos e lavanderia em terreno de 10x25m."></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12">
                            <div class="form-group mb-4">
                                <button type="submit" class="btn btn-info btn-block" style="background-color: #3A5682; border: 1px solid #354e76">Enviar</button>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="row">
                    <div class="col-md-12 col-xs-12 text-center">
                        <p class="pt-4">Ou entre em contato através:</p>
                    </div>
                    <div class="col-md-4 text-center budget-icon">
                        <span class="fab fa-facebook-square" style="font-size: 3em; color: #3C5A99"></span>
                        <p style="font-size: .9em" class="pt-1">/murayamaengenharia</p>
                    </div>
                    <div class="col-md-4 text-center budget-icon">
                        <span class="fab fa-instagram" style="font-size: 3em; color: #9b6954;"></span>
                        <p style="font-size: .9em" class="pt-1">@murayamaengenharia</p>
                    </div>
                    <div class="col-md-4 text-center budget-icon">
                        <span class="fab fa-whatsapp-square" style="font-size: 3em; color: #128C7E;"></span>
                        <p style="font-size: .9em" class="pt-1">(14) 99663.5051</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
