@extends("site.layouts.master")

@section("title","Home")

@section("Slider")
<x-sliders />
@endsection

@section("content")
<x-servico />

<!--Content  -->
<div class="bg-light section-pad">
    <div class="container">
        <div class="content row">

            <div class="wide-sm center">
                <h1>Um provedor de serviços de alto nível recomendado para qualquer empresa, firma ou indústria.</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris a enim aliquam, condimentum nisl a,
                    laoreet lectus. Aliquam convallis sed elit nec vehicula. Praesent gravida, massa sit amet
                    ullamcorper fringilla, tortor nunc ultrices dui porttitor mi non, elementum dui.</p>
            </div>

        </div>
    </div>
</div>
<!-- End conetnt -->

<!-- Content -->
<div class="section section-about section-pad">
    <div class="container">
        <div class="content row">

            <div class="row row-vm">
                <div class="col-md-6 res-m-bttm">
                    <h2>Somos uma equipe de profissionais que construirão tudo para você</h2>
                    <p>Vivamus finibus accumsan ultricies orem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                        eleifend consequat metus, ac egestas tortor placerat vehicula. Nulla tincidunt risus nisl, sed
                        iaculis elit dapibus id. Suspendisse quis lorem nibh. Fusce a magna sollicitudin, semper justo a
                        sagittis.</p>
                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curay. Fusce a
                        magna sollicitudin, semper justo a sagittis est. Vestibulum ante ipsum primis in faucibus orci
                        luctus et ultrices posuere cubilia curay.</p>
                </div>
                <div class="col-md-5 col-md-offset-1">
                    <img src="image/photo-sm-main-g.jpg" alt="">
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End content -->

<!-- CTA-Parallax -->
<div class="call-action has-parallax cta-large" style="background-image: url('image/plx-dark-default.jpg');">
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
<!-- End Section -->

<!-- Call Action -->
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
<!-- End Section -->

<x-projecto />

<!-- Testimonials -->
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
<!-- End Section -->

<x-noticia />

<x-parceiro />
@endsection
