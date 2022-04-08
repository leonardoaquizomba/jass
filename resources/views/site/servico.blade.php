@extends("site.layouts.master")

@section('title', 'Serviços')

@section('Slider')
<div class="banner banner-static">
    <div class="container">
        <div class="content row">

            <div class="imagebg">
                <img src="image/banner-inside-a.jpg" alt="">
            </div>

        </div>
    </div>
</div>
@endsection

@section('content')
<div class="section section-services section-pad">
    <div class="container">
        <div class="content row">

            <div class="wide-md center">
                <h2 class="heading-section">Serviços da nossa empresa</h2>
                <p>Cepsum dolor sit amet consectetur to adipiscing elit, sed dot eiusmod tempor incididunt labore et
                    dolore magna aliqua. Veniam quis nostrud exercitation ullamco laboris.</p>
            </div>
            <div class="feature-row feature-service-row row">
                @forelse (App\Models\Servico::get() as $servico)
                <div class="col-md-4 col-sm-6">
                    <div class="feature boxed">
                        <a href="{{ route('site.servico_info', ['id' => $servico->id]) }}">
                            <div class="fbox-photo">
                                <img src="image/photo-sm-main-a.jpg" alt="">
                            </div>
                        </a>
                        <div class="fbox-content">
                            <h3>
                                <a href="{{ route('site.servico_info', ['id' => $servico->id]) }}">{{ $servico->nome
                                    }}</a>
                            </h3>
                            <p>
                                {!! Str::limit($servico->descricao, 300) !!}
                            </p>
                            <p><a href="{{ route('site.servico_info', ['id' => $servico->id]) }}"
                                    class="btn-link">Saiba
                                    mais</a></p>
                        </div>
                    </div>
                </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
