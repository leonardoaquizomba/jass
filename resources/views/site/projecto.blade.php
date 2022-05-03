@extends("site.layouts.master")

@section("title","Nossos Projectos")

@section("Slider")
<div class="banner banner-static">
    <div class="container">
        <div class="content row">

            <div class="imagebg">
                <img src="{{ asset('image/andrea-piacquadio.jpg') }}" alt="">
            </div>

        </div>
    </div>
</div>
@endsection

@section("content")
<div class="section section-projects section-pad">
    <div class="container">
        <div class="content row">

            <div class="text-center wide-sm">
                <h1>Nossos Projectos</h1>
                <p>Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat do eiusmod tempor
                    incidid. Adipiscing elit sed do eiusmod tempor incididunt bore eter dolore magna aliqua.</p>
            </div>
            <div class="clear"></div>
            <div class="gallery-lists gallery-project-lists filter-menu style-v2 al-center">
                <ul class="list">
                    <li class="active" data-filter="all">Todos</li>
                    @forelse (App\Models\ProjectoCategoria::all() as $categoria)
                    <li data-filter="{{ $categoria->id }}">{{ $categoria->nome }}</li>
                    @empty

                    @endforelse
                </ul>
            </div>
            <div class="gallery gallery-folio with-caption gallery-filter hover-zoom">
                <ul class="photos-list col-x3">
                    @forelse (App\Models\Projecto::all() as $projecto)
                    <li class="filtr-item" data-category="{{ $projecto->projecto_categoria_id }}">
                        <div class="photo">
                            <img src="@if ($projecto->imagens == null)
                                    {{ asset('image/gallery/gallery1.jpg') }}
                                    @else
                                        {{ asset(Voyager::image(json_decode($projecto->imagens)[0])) }}
                                @endif" alt="{{ $projecto->titulo }}">
                            <div class="photo-item-link">
                                <span class="link-block">
                                    <a class="link link-more"
                                        href="{{ route('site.projecto_info', ['id'=>$projecto->id]) }}">
                                        <em class="fa fa-link"></em>
                                    </a>
                                    <a class="link link-popup single-lightbox" href="@if ($projecto->imagens == null)
                                    {{ asset('image/gallery/gallery1.jpg') }}
                                    @else
                                        {{ asset(Voyager::image(json_decode($projecto->imagens)[0])) }}
                                @endif" title="{{ $projecto->titulo }}"><em class="fa fa-arrows-alt"></em></a>
                                </span>
                            </div>
                            <div class="photo-item-caption light">
                                <p class="item-cat">Design</p>
                                <h4 class="item-title">{{ $projecto->titulo }}</h4>
                            </div>
                        </div>
                    </li>
                    @empty

                    @endforelse
                </ul>

            </div>
        </div>
    </div>
</div>
@endsection
