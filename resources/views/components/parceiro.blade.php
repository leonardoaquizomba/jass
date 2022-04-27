<div class="section section-logos section-pad-md bdr-top bg-light">
    <div class="container">
        <div class="content row">
            <div class="owl-carousel loop logo-carousel">
                @forelse ($parceiros as $parceiro)
                <div class="logo-item"><img alt="" width="190" height="82"
                        src="{{ asset(Voyager::image($parceiro->imagem)) }}"></div>
                @empty

                @endforelse
            </div>
        </div>
    </div>
</div>
