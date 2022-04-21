@extends("site.layouts.master")

@section("title","Informa-se")

@section("Slider")
<div class="banner banner-static">
    <div class="container">
        <div class="content row">
            <div class="imagebg">
                <img src="{{ asset('image/banner-contact.jpg') }}" alt="">
            </div>
        </div>
    </div>
</div>
@endsection

@section("content")
<div class="section section-contents section-freequote section-pad">
    <div class="container">
        <div class="row">
            <div class="freequote-content row">
                <div class="quote-list col-md-8 res-m-bttm">
                    <div class="quote-group">
                        <h1>Pedido de Consulta Gratuita</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolor. consectetur adipiscing elit, sed do eiusmod tempor</p>
                        <livewire:inquerito>
                    </div>
                </div>

                <div class="contact-details col-md-4">
                    <h3>Informações de contato</h3>
                    <ul class="contact-list">
                        <li><em class="fa fa-map" aria-hidden="true"></em>
                            <span>{{ setting('site.endereco') }}</span>
                        </li>
                        <li><em class="fa fa-phone" aria-hidden="true"></em>
                            <span>Telefone : {{ setting('site.telefone') }}</span>
                        </li>
                        <li><em class="fa fa-envelope" aria-hidden="true"></em>
                            <span>Email : <a href="#">{{ setting('site.email') }}</a></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
