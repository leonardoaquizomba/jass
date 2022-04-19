<div class="section section-projects recent-project section-pad">
    <div class="container">
        <div class="content row">
            <h2 class="heading-section center">Projetos</h2>
            <div class="feature-row feature-project-row mgfix">
                <div class="owl-carousel loop has-carousel" data-items="4" data-navs="true">
                    @forelse (App\Models\Projecto::all() as $projecto)
                    <div class="even">
                        <div class="feature feature-project boxed">
                            <a href="{{ route('site.projecto_info', ['id'=>$projecto->id]) }}">
                                <div class="fbox-photo">
                                    <img src="@if ($projecto->imagens == null)
                                    {{ asset('image/gallery/gallery1.jpg') }}
                                    @else
                                        {{ asset(Voyager::image(json_decode($projecto->imagens)[0])) }}
                                @endif" alt="">
                                </div>
                            </a>
                            <div class="fbox-content">
                                <h3>
                                    <a href="{{ route('site.projecto_info', ['id'=>$projecto->id]) }}">{{
                                        $projecto->titulo }}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    @empty

                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
