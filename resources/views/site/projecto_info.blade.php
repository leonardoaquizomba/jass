@extends("site.layouts.master")

@section("title",$projecto->titulo)

@section("Slider")
<!-- Banner -->
<div class="banner banner-static">
    <div class="container">
        <div class="content row">

            <div class="imagebg">
                <img src="{{ asset('image/banner-inside-f.jpg') }}" alt="">
            </div>

        </div>
    </div>
</div>
<!-- End Banner -->
@endsection

@section("content")
<!-- Content -->
<div class="section section-projects single-project section-pad">
    <div class="container">
        <div class="content row">

            <div class="project-info">

                <h1>{{ $projecto->titulo }}</h1>
                <div class="row">
                    <div class="col-md-6 col-sm-12 res-m-bttm">
                        {!! $projecto->descricao !!}
                    </div>
                    <div class="col-md-5 col-sm-12 col-md-offset-1">
                        <h3>At a Glance</h3>
                        <div class="table-responsive">
                            <table class="table table-striped bdr-bottom">
                                <tbody>
                                    <tr>
                                        <td><strong>Finalização do projecto</strong></td>
                                        <td>{{ $projecto->conclusao }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Cliente</strong></td>
                                        <td>{{ $projecto->cliente }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Arquitecto</strong></td>
                                        <td>{{ $projecto->arquitecto }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Localização</strong></td>
                                        <td>{{ $projecto->localizacao }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Area</strong></td>
                                        <td>{{ $projecto->area }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Serviços adicionais</strong></td>
                                        <td>{{ $projecto->servicos_prestados }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="project-gallery">
                <h3 class="heading-section heading-sm">Galeria</h3>
                <div class="gallery gallery-lightbox gallery-photos gallery-filled hover-zoom">
                    <ul class="photos-list col-x4">
                        @forelse (json_decode($projecto->imagens) as $imagem)
                        <li>
                            <a href="{{ asset(Voyager::image($imagem)) }}">
                                <div class="photo">
                                    <img src="{{ asset(Voyager::image($imagem)) }}" alt="{{ $projecto->titulo }}">
                                </div>
                            </a>
                        </li>
                        @empty

                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section-projects recent-project section-pad bg-light">
    <div class="container">
        <div class="content row">
            <h3 class="heading-section">Outros Projectos</h3>
            <div class="feature-row feature-project-row mgfix">
                <div class="owl-carousel loop has-carousel" data-items="4" data-navs="true">
                    @forelse (App\Models\Projecto::all() as $projecto)
                    <div class="">
                        <div class="feature feature-project boxed">
                            <a href="{{ route('site.projecto_info', ['id'=>$projecto->id]) }}">
                                <div class="fbox-photo">
                                    <img src="@if ($projecto->imagens == null)
                                    {{ asset('image/work-sm-a.jpg') }}
                                    @else
                                        {{ asset(Voyager::image(json_decode($projecto->imagens)[0])) }}
                                @endif" alt="">
                                </div>
                            </a>
                            <div class="fbox-content">
                                <h3><a href="{{ route('site.projecto_info', ['id'=>$projecto->id]) }}">{{
                                        $projecto->titulo }}</a></h3>
                            </div>
                        </div>
                        <!-- End -->
                    </div>
                    @empty

                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
