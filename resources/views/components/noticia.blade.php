<div class="section section-news section-pad">
    <div class="container">
        <div class="content row">
            <h2 class="heading-section center">Últimas notícias</h2>
            <div class="row">
                <div class="blog-posts">
                    @forelse ($noticias as $noticia)
                    <div class="post post-loop col-md-4">
                        <div class="post-thumbs">
                            <a href="#"><img alt="" src="@if (!is_null($noticia->image))
                                {{ asset(Voyager::image($noticia->image)) }}
                            @else
                                {{ asset('image/post-thumb-a.jpg') }}}}
                            @endif"></a>
                        </div>
                        <div class="post-entry">
                            <div class="post-meta"><span class="pub-date">{{ $noticia->created_at }}</span></div>
                            <h2><a href="#">{{ $noticia->title }}</a></h2>
                            <p>{!! Str::limit($noticia->body, 500) !!}</p>
                            <a class="btn btn-alt" href="#">Leia mais</a>
                        </div>
                    </div>
                    @empty

                    @endforelse
                </div>
            </div>

        </div>
    </div>
</div>
