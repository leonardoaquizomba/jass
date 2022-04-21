@extends("site.layouts.master")

@section("title",$pesquisa->titulo)

@section("Slider")
<div class="banner banner-static">
    <div class="container">
        <div class="content row">
            <div class="imagebg">
                <img src="{{ asset('image/banner-inside-a.jpg') }}" alt="">
            </div>
        </div>
    </div>
</div>
@endsection

@section("content")
<div class="section section-contents section-products single-product section-pad">
    <div class="container">
        <div class="content row">

            <div class="products-details row">
                <div class="col-md-8 res-m-bttm">
                    <h1>{{ $pesquisa->titulo }}</h1>
                    <p>
                        <img alt="" src="@if ($pesquisa->imagem == null)
                                    {{ asset('image/product-lg-a.jpg') }}
                                    @else
                                        {{ asset(Voyager::image($pesquisa->imagem)) }}
                                @endif">
                    </p>
                    <p>
                        {!! $pesquisa->texto !!}
                    </p>
                    @if (!is_null($pesquisa->documento))
                    <div class="border feature-imagebox download-action">
                        <div class="block">
                            <h3>Download PDF</h3>
                            <p></p>
                            <a href="#" target="_blank" class="btn">Download PDF <i class="fa fa-file-pdf-o"></i> </a>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="col-md-4">
                    <div class="sidebar-right">

                        <div class="wgs-box wgs-menus">
                            <div class="wgs-content">
                                <ul class="list list-grouped">
                                    <li class="list-heading">
                                        <span>Pesquisas</span>
                                        <ul>
                                            @forelse (App\Models\Pesquisa::all() as $pesquisa)
                                            <li><a href="{{ route('site.conhecimento_info', ['id'=>$pesquisa->id]) }}">{{
                                                    $pesquisa->titulo }}</a></li>
                                            @empty

                                            @endforelse
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="wgs-box boxed">
                            <h3 class="wgs-heading">Pesquisa Top</h3>
                            <div class="wgs-content">
                                <p><img src="{{ asset('image/product-sm-c.jpg') }}" alt=""></p>
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                                <p><a href="#" class="btn btn-full">Informações </a></p>
                            </div>
                        </div>
                        <livewire:contacto-rapido>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
