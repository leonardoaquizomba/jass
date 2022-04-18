<div id="slider" class="banner banner-slider carousel slide carousel-fade">
    <div class="carousel-inner">
        @forelse ($sliders as $slider)
        <div class="item active">
            <div class="fill" style="background-image:url('{{ asset(Voyager::image($slider->image)) }}');">
                <div class="banner-content">
                    <div class="container">
                        <div class="row">
                            <div class="banner-text al-left pos-left dark">
                                <div class="animated fadeInRight">
                                    <h2 class="ucap">{{ $slider->nome }}</h2>
                                    <p>{{ $slider->descricao }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @empty

        @endforelse
    </div>
    <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#slider" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
    </a>
</div>
