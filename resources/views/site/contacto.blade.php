@extends("site.layouts.master")

@section("title","Contacto")

@section("Slider")
<div class="banner banner-static">
    <div class="container">
        <div class="content row">

            <div class="imagebg">
                <img src="image/banner-contact.jpg" alt="">
            </div>
        </div>
    </div>
</div>
@endsection

@section("content")
<div class="section section-contents section-contact section-pad">
    <div class="container">
        <div class="content row">
            <h1>Contate-nos</h1>
            <div class="contact-content row">
                <div class="drop-message col-md-7 res-m-bttm">
                    <p>Want to work with us or need more details about consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolor.</p>
                    <livewire:contacto />
                </div>
                <div class="contact-details col-md-4 col-md-offset-1">
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
