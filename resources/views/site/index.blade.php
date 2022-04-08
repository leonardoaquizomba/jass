@extends("site.layouts.master")

@section("title","Home")

@section("Slider")
<!-- Banner/Slider -->
<div id="slider" class="banner banner-slider carousel slide carousel-fade">
    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
        <div class="item active">
            <!-- Set the first background image using inline CSS below. -->
            <div class="fill" style="background-image:url('image/slider-oil-a.jpg');">
                <div class="banner-content">
                    <div class="container">
                        <div class="row">
                            <div class="banner-text al-left pos-left dark">
                                <div class="animated fadeInRight">
                                    <h2 class="ucap">Fornecedor líder de soluções industriais</h2>
                                    <p>Ullamcorper fringi tortor consec adipis elit sed do eiusmod tempor.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <!-- Set the second background image using inline CSS below. -->
            <div class="fill" style="background-image:url('image/slider-welding-b.jpg');">
                <div class="banner-content">
                    <div class="container">
                        <div class="row">
                            <div class="banner-text al-left pos-left light">
                                <div class="animated fadeInRight">
                                    <h2 class="ucap">Padrões mais altos <br>de conduta</h2>
                                    <p>Massa sit amet ullamcorper fringilla tortor consec adipis elit sedsmod.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background-image:url('image/slider-mine-a.jpg');">
                <div class="banner-content">
                    <div class="container">
                        <div class="row">
                            <div class="banner-text al-left pos-left light">
                                <div class="animated fadeInRight">
                                    <h2 class="ucap">Somos uma equipa de profissionais</h2>
                                    <p>Praesent gravida massa sit amet ullamcorper fringilla tortor consec.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#slider" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
    </a>
</div>
<!-- #end Banner/Slider -->
@endsection

@section("content")
<!-- Service Section -->
<div class="section section-services section-pad">
    <div class="container">
        <div class="content row">
            <div class="feature-row feature-service-row row">
                @forelse (App\Models\Servico::get()->take(6) as $servico)
                <div class="col-md-4 col-sm-6">
                    <div class="feature boxed">
                        <a href="{{ route("site.servico_info",["id"=>$servico->id]) }}">
                            <div class="fbox-photo">
                                <img src="image/photo-sm-main-a.jpg" alt="">
                            </div>
                        </a>
                        <div class="fbox-content">
                            <h3><a href="{{ route("site.servico_info",["id"=>$servico->id]) }}">{{ $servico->nome
                                    }}</a></h3>
                            <p>
                                {!! Str::limit($servico->descricao, 300) !!}
                            </p>
                            <p><a href="{{ route("site.servico_info",["id"=>$servico->id]) }}" class="btn-link">Saiba mais</a></p>
                        </div>
                    </div>
                </div>
                @empty

                @endforelse
            </div>
        </div>
    </div>
</div>
<!-- End Section -->

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

<!-- Project Section -->
<div class="section section-projects recent-project section-pad">
    <div class="container">
        <div class="content row">

            <h2 class="heading-section center">Projetos</h2>
            <!-- Projects/Feature Row  -->
            <div class="feature-row feature-project-row mgfix">
                <div class="owl-carousel loop has-carousel" data-items="4" data-navs="true">
                    <div class="even">
                        <!-- featured box  -->
                        <div class="feature feature-project boxed">
                            <a href="project-single.html">
                                <div class="fbox-photo">
                                    <img src="image/work-sm-a.jpg" alt="">
                                </div>
                            </a>
                            <div class="fbox-content">
                                <h3><a href="project-single.html">Altria Warehouse Complex</a></h3>
                            </div>
                        </div>
                        <!-- End -->
                    </div>
                    <div class="odd">
                        <!-- featured box -->
                        <div class="feature feature-project boxed">
                            <a href="project-single.html">
                                <div class="fbox-photo">
                                    <img src="image/work-sm-c.jpg" alt="">
                                </div>
                            </a>
                            <div class="fbox-content">
                                <h3><a href="project-single.html">Apollo Hill Project</a></h3>
                            </div>
                        </div>
                        <!-- End -->
                    </div>
                    <div class="even">
                        <!-- featured box -->
                        <div class="feature feature-project boxed">
                            <a href="project-single.html">
                                <div class="fbox-photo">
                                    <img src="image/work-sm-b.jpg" alt="">
                                </div>
                            </a>
                            <div class="fbox-content">
                                <h3><a href="project-single.html">Balko Wind Power</a></h3>
                            </div>
                        </div>
                        <!-- End -->
                    </div>
                    <div class="odd">
                        <!-- featured box -->
                        <div class="feature feature-project boxed">
                            <a href="project-single.html">
                                <div class="fbox-photo">
                                    <img src="image/work-sm-e.jpg" alt="">
                                </div>
                            </a>
                            <div class="fbox-content">
                                <h3><a href="project-single.html">Rocky Forge Refinary</a></h3>
                            </div>
                        </div>
                        <!-- End -->
                    </div>
                    <div class="odd">
                        <!-- featured box -->
                        <div class="feature feature-project boxed">
                            <a href="project-single.html">
                                <div class="fbox-photo">
                                    <img src="image/work-sm-f.jpg" alt="">
                                </div>
                            </a>
                            <div class="fbox-content">
                                <h3><a href="project-single.html">Mingo Village Mining</a></h3>
                            </div>
                        </div>
                        <!-- End -->
                    </div>
                </div>
            </div>
            <!-- Projects/Feature Row  #end -->

        </div>
    </div>
</div>
<!-- End Section -->

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

<!-- Latest News -->
<div class="section section-news section-pad">
    <div class="container">
        <div class="content row">

            <h2 class="heading-section center">Últimas notícias</h2>

            <div class="row">
                <!-- Blog Post Loop -->
                <div class="blog-posts">
                    <div class="post post-loop col-md-4">
                        <div class="post-thumbs">
                            <a href="news-details.html"><img alt="" src="image/post-thumb-a.jpg"></a>
                        </div>
                        <div class="post-entry">
                            <div class="post-meta"><span class="pub-date">15, Jun 2017</span></div>
                            <h2><a href="news-details.html">Power Technology solar programme welcomes</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt
                                laboris nisi ut aliquip ex ea commodo consequat...</p>
                            <a class="btn btn-alt" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="post post-loop col-md-4">
                        <div class="post-thumbs">
                            <a href="news-details.html"><img alt="" src="image/post-thumb-b.jpg"></a>
                        </div>
                        <div class="post-entry">
                            <div class="post-meta"><span class="pub-date">04, Mar 2017</span></div>
                            <h2><a href="news-details.html">Is your home/place suitable for solar energy?</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt
                                laboris nisi ut aliquip ex ea commodo consequat...</p>
                            <a class="btn btn-alt" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="post post-loop col-md-4">
                        <div class="post-thumbs">
                            <a href="news-details.html"><img alt="" src="image/post-thumb-c.jpg"></a>
                        </div>
                        <div class="post-entry">
                            <div class="post-meta"><span class="pub-date">26, Nov 2016</span></div>
                            <h2><a href="news-details.html">Renewables become the largest source of power capacity</a>
                            </h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt
                                laboris nisi ut aliquip ex ea commodo consequat...</p>
                            <a class="btn btn-alt" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Section -->

<!-- Client logo -->
<div class="section section-logos section-pad-md bdr-top bg-light">
    <div class="container">
        <div class="content row">

            <div class="owl-carousel loop logo-carousel">
                <div class="logo-item"><img alt="" width="190" height="82" src="image/cl-logo1.png"></div>
                <div class="logo-item"><img alt="" width="190" height="82" src="image/cl-logo2.png"></div>
                <div class="logo-item"><img alt="" width="190" height="82" src="image/cl-logo3.png"></div>
                <div class="logo-item"><img alt="" width="190" height="82" src="image/cl-logo4.png"></div>
                <div class="logo-item"><img alt="" width="190" height="82" src="image/cl-logo5.png"></div>
                <div class="logo-item"><img alt="" width="190" height="82" src="image/cl-logo6.png"></div>
            </div>

        </div>
    </div>
</div>
<!-- End Section -->
@endsection
