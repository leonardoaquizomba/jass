@extends("site.layouts.master")

@section("title","Sobre-nos")

@section("Slider")
<!-- Banner -->
<div class="banner banner-static">
    <div class="container">
        <div class="content row">

            <div class="imagebg">
                <img src="image/banner-inside-d.jpg" alt="">
            </div>

        </div>
    </div>
</div>
<!-- End Banner -->
@endsection

@section("content")
<!-- Contents -->
<div class="section section-contents section-pad">
    <div class="container">
        <div class="content row">

            <div class="row">
                <div class="col-md-8">

                    <h1>Sobre a Empresa</h1>
                    <p>
                        JASS é uma Empresa Angolana, que se dedica ao desenvolvimento e integração de Sistemas de
                        Informação Geográfica para o mercado empresarial,
                        com a finalidade de apresentar soluções práticas e inteligentes com qualidade e confiabilidade,
                        com vasta experiência no domínio das geociências como (Geodesia, Topografia, Cartografia,
                        Teledeteção, Fotogrametria e Sistema de Informação Geográfica).
                    </p>
                    <p>
                        Afirmamo-nos como uma equipa técnica pró-ativa e inovadora, destacando-se pela responsabilidade,
                        motivação pelos trabalhos a que nos propomos a executar.
                    </p>

                    <div class="clear"></div>
                    <hr>
                    <h2>Nosso Propósito Estratégico</h2>
                    <p class="lead">
                        Nosso objetivo é seguir uma empresa líder em design, engenharia e fabricação industrial
                        especializada em serviços de
                        mineração, petróleo, gás e engenharia.
                    </p>
                    <div class="gaps"></div>
                    <h4>Nossa visão</h4>
                    <p>
                        Ser uma empresa reconhecida no ramo da Geociência, assegurando a satisfação e confiança dos seus
                        clientes pela qualidade
                        e competitividade dos serviços a prestar, gerando valores e crescimento sócioeconómico dos seus
                        colaboradores.
                    </p>
                    <h4>Nossa missão</h4>
                    <p>
                        Corresponder as exigências do mercado, clientes e parceiros, mediante práticas reconhecidas
                        internacionalmente,
                        garantindo com que os trabalhos em geral, sejam baseados nos mais altos padrões de performance
                        em termos de qualidade,
                        custo e prazo.
                    </p>
                    <div class="gaps"></div>
                    <div class="col-md-6 npl res-m-bttm">
                        <h4>INOVAÇÃO</h4>
                        <ul class="list-style arrow">
                            <li>Promoção de canais de comunicação adequada para um desenvolvimento e conhecimento real
                                do mercado</li>
                            <li>Aplicar as novas tecnologias de maneira a aprimorar a capacidade técnica dos
                                colaboradores</li>
                            <li>Ser uma empresa diferenciada, com vantagens competitivas no mercado onde actua e
                                naqueles onde pretende se inserir.</li>
                        </ul>
                    </div>
                    <div class="col-md-5 npr col-md-offset-1">
                        <h4>Nossos valores</h4>
                        <ul class="list-style arrow">
                            <li>Integridade, ética e responsabilidade social</li>
                            <li>Eficiência e eficácia</li>
                            <li>Respeito pela pessoa e pelo ambiente</li>
                            <li>Qualidade Organizacional</li>
                            <li>Desenvolvimento profissional dos seus Colaboradores</li>
                        </ul>
                    </div>
                    <div class="clear"></div>

                    <hr>
                    <h2>EXPERIÊNCIA NO RAMO DA GEOCIÊNCIAS</h2>
                    <p>
                        Realiza diversos trabalhos visando atender as necessidades dos seus clientes em vários segmentos
                        da Geociência, contando
                        com profissionais especializados, proporcionando soluções rápidas e eficientes, como:
                    </p>
                    <ul class="list-style arrow">
                        <li>Topografia (Monitoramento, cálculo de volume, etc)</li>
                        <li>Geodesia</li>
                        <li>Teledeteção e Fotogrametria</li>
                        <li>SIG - Sistema de Informação Geográfica (Georreferenciação, etc)</li>
                        <li>Cartografia</li>
                        <li>Cadastramento Urbano</li>
                        <li>Geoprocessamento</li>
                    </ul>
                </div>

                <div class="col-md-4">
                    <div class="sidebar-right">
                        <div class="wgs-box wgs-quoteform">
                            <h3 class="wgs-heading">Contato rápido</h3>
                            <div class="wgs-content">
                                <p>Se você tiver alguma dúvida ou quiser marcar uma sessão, entre em contato conosco.
                                </p>
                                <form id="contact-us" class="form-quote">
                                    <div class="form-results"></div>
                                    <div class="form-group">
                                        <div class="form-field">
                                            <input name="contact-name" type="text" placeholder="Nome *"
                                                class="form-control required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-field">
                                            <input name="contact-email" type="email" placeholder="Email *"
                                                class="form-control required email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-field form-m-bttm">
                                            <input name="contact-phone" type="text" placeholder="Telefone"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-field">
                                            <input name="contact-service" type="text" placeholder="Interesse do serviço"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-field">
                                            <textarea name="contact-message" placeholder="Mensagem *"
                                                class="txtarea form-control required"></textarea>
                                        </div>
                                    </div>
                                    <input type="text" class="hidden" name="form-anti-honeypot" value="">
                                    <button type="submit" class="btn btn-alt sb-h">Enviar</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
