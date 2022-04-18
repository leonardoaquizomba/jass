<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield("title") - {{ setting('site.title') }}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="JASS é uma Empresa Angolana, que se dedica ao desenvolvimento e integração de Sistemas de Informação Geográfica para o mercado empresarial, com a finalidade de apresentar soluções práticas e inteligentes com qualidade e confiabilidade, com vasta experiência no domínio das geociências como (Geodesia, Topografia, Cartografia, Teledeteção, Fotogrametria e Sistema de Informação Geográfica).">
    <meta name="author" content="Jass Topografia">
    <meta name="" content="Jass Topografia">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset(Voyager::image(setting('site.icon'))) }}" type="image/png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendor.bundle.css') }}">
    <link id="style-css" rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body class="site-body style-v1">
    <header class="site-header header-s1 is-sticky">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="top-aside top-left">
                        <ul class="top-nav">
                            <li><a href="{{ route('site.conhecimento') }}">Centro de Pesquisa</a></li>
                            <li><a href="{{ route('site.opurtinidade') }}">Carreira / Empregos</a></li>
                            <li><a href="#">Notícias</a></li>
                            <li><a href="{{ route('site.contacto') }}">Contato</a></li>
                        </ul>
                    </div>
                    <div class="clearfix top-aside top-right">
                        <ul class="clearfix top-contact">
                            <li class="t-email t-email1">
                                <em class="fa fa-envelope-o" aria-hidden="true"></em>
                                <span><a href="#">{{ setting('site.email') }}</a></span>
                            </li>
                            <li class="t-phone t-phone1">
                                <em class="fa fa-phone" aria-hidden="true"></em>
                                <span>{{ setting('site.telefone') }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-primary">
            <div class="container">
                <a class="navbar-brand" href="./">
                    <img class="logo logo-dark" alt="" src="{{ asset(Voyager::image(setting('site.logo'))) }}"
                        srcset="{{ asset(Voyager::image(setting('site.logo'))) }} 2x">
                    <img class="logo logo-light" alt="" src="{{ asset(Voyager::image(setting('site.logo'))) }}"
                        srcset="{{ asset(Voyager::image(setting('site.logo'))) }} 2x">
                </a>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainnav"
                        aria-expanded="false">
                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="quote-btn"><a class="btn" href="#">Informe-se hoje</a></div>
                </div>
                <nav class="navbar-collapse collapse" id="mainnav">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="{{ route('site.sobre') }}">Sobre nós</a></li>
                        <li><a href="{{ route('site.servico') }}">Serviço</a></li>
                        <li><a href="{{ route('site.projecto') }}">Projetos</a></li>
                        <li><a href="{{ route('site.contacto') }}">Contacte-nos</a></li>
                        <li class="quote-btn"><a class="btn" href="{{ route('site.inquerito') }}">Informe-se hoje</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        @yield("Slider")
    </header>
    @yield("content")
    <div class="call-action bg-primary">
        <div class="cta-block">
            <div class="container">
                <div class="content row">

                    <div class="cta-sameline">
                        <h3>Procurando uma solução adequada para sua empresa?</h3>
                        <p>Contacte-nos hoje para consulta gratuita ou mais informações.</p>
                        <a class="btn btn-outline" href="{{ route('site.contacto') }}">Entrar em contato</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="footer-widget section-pad">
        <div class="container">
            <div class="row">
                <div class="widget-row row">
                    <div class="footer-col col-md-5 col-sm-6 res-m-bttm">
                        <div class="wgs wgs-footer wgs-menu">
                            <h5 class="wgs-title">Soluções</h5>
                            <div class="wgs-content">
                                <ul class="menu col-md-8 npl">
                                    @forelse (App\Models\Servico::all("nome") as $servico)
                                    <li><a href="#">{{ $servico->nome }}</a></li>
                                    @empty

                                    @endforelse
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-col col-md-2 col-sm-6 res-m-bttm">
                        <div class="wgs wgs-footer wgs-menu">
                            <h5 class="wgs-title">Links</h5>
                            <div class="wgs-content">
                                <ul class="menu">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="#">Sobre nós</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Contate-nos</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-col col-md-2 col-sm-6 res-m-bttm">
                        <div class="wgs wgs-footer wgs-text">
                            <h5 class="wgs-title">Áreas de Atendimento</h5>
                            <div class="wgs-content">
                                <ul>
                                    <li>Luanda</li>
                                    <li>Huila</li>
                                    <li>Bengo</li>
                                    <li>Malange</li>
                                    <li>Kwanza Sul</li>
                                    <li>Benguela</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-col col-md-3 col-sm-6">
                        <div class="wgs wgs-footer">
                            <h5 class="wgs-title">Contate-nos</h5>
                            <div class="wgs-content">
                                <p><strong>{{ setting('site.title') }}</strong><br>
                                    {{ setting('site.endereco') }}</p>
                                <p><span>Telefone</span>: {{ setting('site.telefone') }}<br>
                                    <span>Email</span>: {{ setting('site.email') }}
                                </p>
                                <ul class="social">
                                    <li><a href="#"><em class="fa fa-facebook" aria-hidden="true"></em></a></li>
                                    <li><a href="#"><em class="fa fa-twitter" aria-hidden="true"></em></a></li>
                                    <li><a href="#"><em class="fa fa-linkedin" aria-hidden="true"></em></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="site-copy col-sm-7">
                    <p>&copy; 2017 {{ setting('site.title') }} <span class="sep"> . </span> Licensed NI099999<span
                            class="sep"> . </span> <a href="#">Termos e Condições</a></p>
                </div>
                <div class="site-by col-sm-5 al-right">
                </div>
            </div>
        </div>
    </div>
    <div class="preload hide">
        <img alt="" src="image/slider-oil-a.jpg">
        <img alt="" src="image/slider-welding-b.jpg">
        <img alt="" src="image/slider-mine-a.jpg">
    </div>
    <script src="{{ asset('js/jquery.bundle.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
