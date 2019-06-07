<style>
    section .services {
        margin-top: 60px
    }
    .services-card {
        min-height: 210px;
        padding: 15px;
        border: 1px solid #dddddd;
        border-radius: 5px;
        margin: 50px 0 20px 0;
        position: relative;
    }
    .services-icon {
        position:absolute;
        top: 0;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .services-icon i {
        font-size: 46px;
        color: #3A5784;
        background-color: #fff;
        padding: 0 40px;
        display: inline;
    }
    .services-title h2 {
        margin: 40px 0 10px 0;
        font-size: 1em;
        font-weight: 800;
        color: #3A5784;
        text-transform: uppercase;
        text-align: center;
    }
    .services-content p {
        font-size: .9em;
        padding: 0;
        margin: 0;
        text-align: left;
    }

    /* Small devices */
    @media screen and (max-width: 700px) {

        section .services {
            margin-top: 40px
        }

        .services-card {
            margin: 30px 0 20px 0;
            min-height: 80px;
        }

        .services-icon i {
            padding: 0 20px;
        }

        .services-title h2 {
            margin: 20px 0 5px 0;
        }

    }

</style>
<section class="row services">
    <div class="col-md-4 col-xs-12">

        <div class="services-card">
            <div class="services-icon">
                <i class="fas fa-store-alt"></i>
            </div>
            <div class="services-title">
                <h2>Residenciais</h2>
            </div>
            <div class="services-content">
                <p>
                    Beneficiando-se da experiência de sua equipe, a <strong>Murayama</strong> atua na elaboração de projetos e execução de obras civis.
                    Nessa área, desenvolve projetos de pequeno, médio e grande porte. Desde a elaboração do projeto ao acabamento.
                </p>
            </div>
        </div>

    </div>
    <div class="col-md-4 col-xs-12">

        <div class="services-card">
            <div class="services-icon">
                <i class="fa fa-warehouse"></i>
            </div>
            <div class="services-title">
                <h2>Alvarás</h2>
            </div>
            <div class="services-content">
                <p>
                    A <strong>Murayama</strong> oferece um pacote completo com serviços de regularização para os mais diversos tipos de imóveis e
                    suas respectivas atividades.
                </p>
            </div>
        </div>

    </div>
    <div class="col-md-4 col-xs-12">

        <div class="services-card">
            <div class="services-icon">
                <i class="fa fa-building"></i>
            </div>
            <div class="services-title">
                <h2>Comerciais</h2>
            </div>
            <div class="services-content">
                <p>
                    Com experiencia e dedicação, a <strong>Murayama</strong> planeja, desenvolve e executa empreendimentos destinados aos mais variados
                    perfis de clientes, atendendo também aos programas governamentais e particulares.
                </p>
            </div>
        </div>

    </div>
</section>
