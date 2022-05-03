@extends("site.layouts.master")

@section("title","Centro de Pesquisa")

@section("Slider")
<div class="banner banner-static">
    <div class="container">
        <div class="content row">

            <div class="imagebg">
                <img src="{{ asset('image/vlada-karpovich.jpg') }}" alt="">
            </div>

        </div>
    </div>
</div>
@endsection

@section("content")
<div class="section section-contents section-products section-pad">
    <div class="container">
        <div class="content row">

            <div class="wide-md center">
                <h1>Nossas Pesquisas</h1>
                <p>Cepsum dolor sit amet consectetur to adipiscing elit, sed dot eiusmod tempor incididunt labore et
                    dolore magna aliqua. Veniam quis nostrud exercitation ullamco laboris.</p>
            </div>
            <div class="gallery gallery-products with-caption hover-fade center mgfix">
                <ul class="photos-list col-x3">
                    @forelse (App\Models\Pesquisa::all() as $pesquisa)
                    <li>
                        <div class="photo">
                            <img src="@if ($pesquisa->imagem == null)
                                    {{ asset('image/product-sm-a.jpg') }}
                                    @else
                                        {{ asset(Voyager::image($pesquisa->imagem)) }}
                                @endif" alt="">
                            <div class="photo-link">
                                <span class="links">
                                    <a class="btn more-link" href="{{ route('site.conhecimento_info', ['id'=>$pesquisa->id])
                                                                                    }}">Ver Informações</a>
                                </span>
                            </div>
                        </div>
                        <div class="photo-caption">
                            <a href="{{ route('site.conhecimento_info', ['id'=>$pesquisa->id]) }}">
                                <h4>{{ $pesquisa->titulo }}</h4>
                            </a>
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
