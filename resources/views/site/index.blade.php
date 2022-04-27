@extends("site.layouts.master")

@section("title","Home")

@section("Slider")
<x-sliders />
@endsection

@section("content")
<x-servico />

<div class="bg-light section-pad">
    <div class="container">
        <div class="content row">

            <div class="wide-sm center">
                <h1>Um provedor de serviços de alto nível recomendado para qualquer empresa, firma ou indústria.</h1>
                <p>
                    Complementarmente a estas atividades assegura ainda o estudo de projetos e sua otimização,
                    assessoria técnica
                    especializada, legalização, licenciamento e coordenação de obra.
                    Os nossos principais objetivos enquanto empresa são garantir a Qualidade do trabalho e a Satisfação
                    do cliente, pelo que
                    nos regemos pela Excelência, Paixão, Honestidade, Compromisso e Disponibilidade, valores
                    estruturantes que consideramos
                    essenciais no cumprimento destes mesmos objetivos.
                </p>
            </div>

        </div>
    </div>
</div>

<div class="section section-about section-pad">
    <div class="container">
        <div class="content row">

            <div class="row row-vm">
                <div class="col-md-6 res-m-bttm">
                    <h2>Somos uma equipe de profissionais que construirão tudo para você</h2>
                    <p>
                        Uma equipe composta por um corpo técnico extremamente competente, que coleciona uma bagagem
                        enorme tanto em conhecimento
                        quanto em números.
                    </p>
                </div>
                <div class="col-md-5 col-md-offset-1">
                    <img src="{{ asset('image/photo-sm-main-g.jpg') }}" alt="">
                </div>
            </div>

        </div>
    </div>
</div>

<div class="call-action has-parallax cta-large"
    style="background-image: url('{{ asset('image/plx-dark-default.jpg') }}');">
    <div class="cta-block">
        <div class="container">
            <div class="content row">
                <div class="cta-content wide-sm center">
                    <h2>Fornecemos soluções de produtos inovadores para o progresso sustentável.</h2>
                    <p>Aqui é importante que indique todos os seus requisitos e a nossa equipa de engenheiros com muita
                        experiência irá apresentar-lhe a possível solução para as suas necessidades</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="call-action cta-small">
    <div class="cta-block">
        <div class="container">
            <div class="content row">

                <div class="cta-sameline">
                    <h3>Qualquer tipo de solução de negócio ou consulta não hesite em contactar.</h3>
                    <a class="btn btn-light" href="#">Contate-nos</a>
                </div>

            </div>
        </div>
    </div>
</div>

<x-projecto />

<div class="section section-quotes section-pad bg-light">
    <div class="container">
        <div class="content row">

            <div class="col-md-offset-2 col-md-8 center">
                <h2 class="heading-section">O que os nossos clientes dizem</h2>
            </div>
            <div class="gaps"></div>
            <div class="testimonials">
                <div id="testimonial" class="quotes-slider col-md-8 col-md-offset-2">
                    <div class="owl-carousel loop has-carousel" data-items="1" data-loop="true" data-dots="true"
                        data-auto="true">
                        <div class="item">
                            <!-- Each Quotes -->
                            <div class="quotes">
                                <div class="quotes-text center">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam.
                                    </p>
                                </div>
                                <div class="profile">
                                    <h5>John Doe</h5>
                                    <h6>CEO, Company Name</h6>
                                </div>
                            </div>
                            <!-- End Quotes -->
                        </div>
                        <!-- End Slide -->
                        <!-- Each Slide -->
                        <div class="item">
                            <!-- Each Quotes -->
                            <div class="quotes">
                                <div class="quotes-text center">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                        ipsam.</p>
                                </div>
                                <div class="profile">
                                    <h5>John Doe</h5>
                                    <h6>CEO, Company Name</h6>
                                </div>
                            </div>
                            <!-- End Quotes -->
                        </div>
                    </div>
                    <!-- End Slide -->
                </div>
            </div>

        </div>
    </div>
</div>

<x-noticia />

<x-parceiro />
@endsection
