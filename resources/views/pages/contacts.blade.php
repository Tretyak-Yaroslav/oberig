@extends('layouts.default')

@section('seo_tags')
	@include('partials.seo')
@stop

@section('main')
	<div class="main-container">
		<div class="content-container">
			@include('partials.breadcrumbs', ['page' => $page])
		</div>
	</div>
	<div class="main-container contact">
		<div class="content-container">
			<div class="map-container">
				<div class="map_info">
					<div class="map_info-wrap">
						<div class="map_info-title">
							<h3>{{$page->t('title')}}</h3>
						</div>
						<div class="map_info-address">
							<div class="map_info-label">
								<p>Адреса:</p>
							</div>

							<div class="map_info-text">
								<p>03057, Україна, м. Київ, вул. Зоологічна, 3, корпус «В»</p>
							</div>

						</div>
						<div class="map_info-tel">
							<div class="map_info-label">
								<p>Телефон:</p>
							</div>
							<div class="map_info-text">
								<p>+380 (44) 521-30-03</p>
							</div>

							<div class="map_info-btn">
								<button class="btn btn-red">
									<p class="size white"><i aria-hidden="true" class="fa fa-asterisk fa-lg"></i></p>
									<span>3003 невідкладна допомога</span>
								</button>
							</div>
						</div>
					</div>
				</div>
				<div id="map"></div>
			</div>
		</div>
	</div>
	<div class="main-container">
		<div class="content-container">
			<div class="blog-body">
				<div class="container">
					<div class="row">
						<div class="col-4">
							<div class="about-btn blog contact-padding ">
								<h3>{{$page->t('title')}}</h3>
							</div>
							<div class="contact-position background mobile-hide">
								<div class="background-one"></div>
								<div class="background-two"></div>
							</div>
							<div class="contact-addresses">
								Адреса:
							</div>
							<div class="contact-street">
								03057, Україна, м. Київ, вул. Зоологічна, 3, корпус «Г»
							</div>
						</div>
						<div class="col-4">
							<div class="contact-addresses contact-row">
								Телефон:
							</div>
							<div class="contact-phone">
								<a href="tel:+380445213003">+38 (044) 521-30-03</a>
							</div>
							<div class="contact-phone">
								<a href="tel:+380995213003">+38 (099) 521-30-03</a>
							</div>
							<div class="contact-phone">
								<a href="tel:+380735213003">+38 (073) 521-30-03</a>
							</div>
						</div>
						<div class="col-4">
							<div class="map_info-btn contact-btn__map">
								<button class="btn btn-red">
									<p class="size white"><i aria-hidden="true" class="fa fa-asterisk fa-lg"></i></p>
									<span>3003 невідкладна допомога</span>
								</button>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="blog-section contact">
				<div class="contact-route">
					{!! $page->t('description') !!}
				</div>
			</div>

			@include('partials.callback')

			@include('partials.seo_text')
		</div>
	</div>
@stop

@section('scripts')
	<script async defer type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9wG-ZpeJNw8GB6kDqhZcLfNpPLGBDEF4&callback=initMap"></script>
@stop
