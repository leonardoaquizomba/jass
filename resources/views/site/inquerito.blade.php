@extends("site.layouts.master")

@section("title","Home")

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
	<div class="section section-contents section-freequote section-pad">
		<div class="container">
			<div class="row">

				<div class="freequote-content row">

					<div class="quote-list col-md-8 res-m-bttm">
						<div class="quote-group">
							<h1>Pedido de Consulta Gratuita</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor. consectetur adipiscing elit, sed do eiusmod tempor</p>
							<form id="quote-request" class="form-quote">
								<div class="form-group row">
									<div class="form-field col-md-6 form-m-bttm">
										<input name="quote-request-name" type="text" placeholder="Nome *" class="form-control required">
									</div>
									<div class="form-field col-md-6">
										<input name="quote-request-company" type="text" placeholder="Empresa" class="form-control">
									</div>
								</div>
								<div class="form-group row">
									<div class="form-field col-md-6 form-m-bttm">
										<input name="quote-request-email" type="email" placeholder="Email *" class="form-control required email">
									</div>
									<div class="form-field col-md-6">
										<input name="quote-request-phone" type="text" placeholder="Telefone *" class="form-control required">
									</div>
								</div>
								<h4>Serviços de seu interesse</h4>
								<div class="form-group row">
									<ul class="form-field clearfix">
										<li class="col-sm-4"><input type="checkbox" name="quote-request-interest[]" value="Agricultural Engineering"> <span> Agricultural Engineering</span></li>
										<li class="col-sm-4"><input type="checkbox" name="quote-request-interest[]" value="Chemical Research"> <span> Chemical Research</span></li>
										<li class="col-sm-4"><input type="checkbox" name="quote-request-interest[]" value="Material Science"> <span> Material Science</span></li>
									</ul>
									<ul class="form-field clearfix">
										<li class="col-sm-4"><input type="checkbox" name="quote-request-interest[]" value="Mechanical Engineering"> <span> Mechanical Engineering</span></li>
										<li class="col-sm-4"><input type="checkbox" name="quote-request-interest[]" value="Oil and Gas"> <span> Oil and Gas</span></li>
										<li class="col-sm-4"><input type="checkbox" name="quote-request-interest[]" value="Power and Energy"> <span> Power and Energy</span></li>
									</ul>
								</div>
								<div class="form-group row">
									<div class="form-field col-md-6">
										<p>Best Time to Reach</p>
										<select name="quote-request-reach">
											<option value="">Please select</option>
											<option value="09am-12pm">09 AM - 12 PM</option>
											<option value="12pm-03pm">12 PM - 03 PM</option>
											<option value="03pm-06pm">03 PM - 06 PM</option>
										</select>
									</div>
									<div class="form-field col-md-6">
										<p>Como ouviu falar de nos</p>
										<select name="quote-request-hear">
											<option value="">Please select</option>
											<option value="Friends">Friends</option>
											<option value="Facebook">Facebook</option>
											<option value="Google">Google</option>
											<option value="Collegue">Collegue</option>
											<option value="Others">Others</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<div class="form-field col-md-12">
										<textarea name="quote-request-message" placeholder="Mensagem *" class="txtarea form-control required"></textarea>
									</div>
								</div>
								<input type="text" class="hidden" name="form-anti-honeypot" value="">
								<button type="submit" class="btn">Enviar</button>
								<div class="form-results"></div>
							</form>
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
	<!-- End Content -->
@endsection
