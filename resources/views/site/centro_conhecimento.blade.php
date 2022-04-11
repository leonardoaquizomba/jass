@extends("site.layouts.master")

@section("title","Centro de Pesquisa")

@section("Slider")
<!-- Banner -->
<div class="banner banner-static">
    <div class="container">
        <div class="content row">

            <div class="imagebg">
                <img src="image/banner-inside-c.jpg" alt="">
            </div>

        </div>
    </div>
</div>
<!-- End Banner -->
@endsection

@section("content")
<!-- Content -->
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
                    <li>
                        <div class="photo">
                            <img src="image/product-sm-a.jpg" alt="">
                            <div class="photo-link">
                                <span class="links">
                                    <a class="btn more-link" href="{{ route('site.conhecimento_info', ['id'=>1])
                                        }}">View Product</a>
                                </span>
                            </div>
                        </div>
                        <div class="photo-caption">
                            <a href="{{ route('site.conhecimento_info', ['id'=>1]) }}">
                                <h4>Hydraulic Power</h4>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- End Products -->
        </div>
    </div>
</div>
<!-- End Content -->
@endsection
