@extends("site.layouts.master")

@section("title",$servico->nome)

@section("Slider")
<!-- Banner -->
<div class="banner banner-static">
    <div class="container">
        <div class="content row">

            <div class="imagebg">
                <img src="{{ asset('image/banner-inside-c.jpg') }}" alt="">
            </div>

        </div>
    </div>
</div>
<!-- End Banner -->
@endsection

@section("content")
<div class="section section-contents section-pad">
    <div class="container">
        <div class="content row">
            <div class="row">
                <div class="col-md-8">
                    <img src="@if ($servico->imagem == null)
                                    {{ asset('image/photo-sm-main-a.jpg') }}
                                    @else
                                        {{ asset(Voyager::image($servico->imagem)) }}
                                @endif" alt="" class="aligncenter">
                    <h1>{{ $servico->nome }}</h1>
                    <p class="lead">{!! $servico->descricao !!}</p>
                </div>
                <div class="col-md-4">
                    <div class="sidebar-right">
                        <div class="wgs-box wgs-menus">
                            <div class="wgs-content">
                                <ul class="list list-grouped">
                                    <li class="list-heading">
                                        <span>Nossas Soluções e Serviços</span>
                                        <ul>
                                            @forelse (App\Models\Servico::all('id','nome') as $servico)
                                            <li>
                                                <a href="{{ route('site.servico_info', ['id'=>$servico->id]) }}">
                                                    {{ $servico->nome }}
                                                </a>
                                            </li>
                                            @empty

                                            @endforelse
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <livewire:contacto-rapido />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
