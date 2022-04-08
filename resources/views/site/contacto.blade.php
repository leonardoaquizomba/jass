@extends("site.layouts.master")

@section("title","Contacto")

@section("Slider")
		<!-- Banner -->
		<div class="banner banner-static">
			<div class="container">
				<div class="content row">
					
					<div class="imagebg">
						<img src="image/banner-contact.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
		<!-- End Banner -->
@endsection

@section("content")
	<!-- Content -->
	<div class="section section-contents section-contact section-pad">
		<div class="container">
			<div class="content row">

				<h1>Contate-nos</h1>
				<div class="contact-content row">
					<div class="drop-message col-md-7 res-m-bttm">
						<p>Want to work with us or need more details about consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>
						<form id="contact-us" class="form-message">
							<div class="form-results"></div>
							<div class="form-group row">
								<div class="form-field col-md-6 form-m-bttm">
									<input name="contact-name" type="text" placeholder="Nome *" class="form-control required">
								</div>
								<div class="form-field col-md-6">
									<input name="contact-email" type="email" placeholder="Email *" class="form-control required email">
								</div>
							</div>
							<div class="form-group row">
								<div class="form-field col-md-6 form-m-bttm">
									<input name="contact-phone" type="text" placeholder="Telefone" class="form-control">
								</div>
								<div class="form-field col-md-6">
									<input name="contact-service" type="text" placeholder="Serviço interresado" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<div class="form-field col-md-12">
									<textarea name="contact-message" placeholder="Mensagem *" class="txtarea form-control required"></textarea>
								</div>
							</div>
							<input type="text" class="hidden" name="form-anti-honeypot" value="">
							<button type="submit" class="btn solid-btn sb-h">Enviar</button>
						</form>
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
	<!-- End Content -->
@endsection
