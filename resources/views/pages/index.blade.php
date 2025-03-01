@extends('pages.layouts.app')

@section('title', 'Home')
    
@section('content')

		@include('pages.layouts.header') 	
		<!-- Slider Area -->
		<section class="slider">
			<div class="hero-slider">
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('img/slider2.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>Nous offrons des services <span>médicaux</span> en lesquels vous pouvez <span>avoir confiance !</span></h1>
									<p>Des soins de confiance, à chaque étape de votre santé </p>
									<div class="button">
										@if(session()->has('id'))
											@if(session('role') == 'doctor')
												<a href="{{ route('doctor') }}" class="btn">Dashboard</a>
											@elseif(session('role') == 'admin')
												<a href="{{ route('admin') }}" class="btn">Dashboard</a>
											@else
												<a href="{{ route('list-doctors') }}" class="btn">Prendre rendez-vous</a>
											@endif
										@else
											<a href="{{ route('list-doctors') }}" class="btn">Prendre rendez-vous</a>
										@endif
										<a href="{{ route('about') }}" class="btn primary">En Savoir Plus</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('img/slider.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>Nous offrons des services <span>médicaux</span> en lesquels vous pouvez <span>avoir confiance !</span></h1>
									<p>Des soins de confiance, à chaque étape de votre santé </p>
									<div class="button">
										<a href="{{ route('list-doctors') }}" class="btn">Prendre Rendez-vous</a>
										<a href="{{ route('list-doctors') }}" class="btn primary">Voir les spécialistes</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Start End Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('img/slider3.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>Nous offrons des services <span>médicaux</span> en lesquels vous pouvez <span>avoir confiance !</span></h1>
									<p>Des soins de confiance, à chaque étape de votre santé </p>
									<div class="button">
										<a href="{{ route('list-doctors') }}" class="btn">Prendre Rendez-vous</a>
										<a href="{{ route('contact') }}" class="btn primary">Contactez-nous</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
			</div>
		</section>
		<!--/ End Slider Area -->
		
		<!-- Start Schedule Area -->
		<section class="schedule">
			<div class="container">
				<div class="schedule-inner">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12 ">
							<!-- single-schedule -->
							<div class="single-schedule first">
								<div class="inner">
									<div class="icon">
										<i class="fa fa-ambulance"></i>
									</div>
									<div class="single-content">
										<h4>Assistance d'urgence</h4>
										<p>Une aide immédiate pour votre bien-être, où que vous soyez, avec des soins efficaces et adaptés à vos besoins.</p>
										<a href="{{ route('about') }}">PLUS D'INFOS<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<!-- single-schedule -->
							<div class="single-schedule middle">
								<div class="inner">
									<div class="icon">
										<i class="icofont-prescription"></i>
									</div>
									<div class="single-content">
										<h4>Agenda des docteurs</h4>
										<p>Consultez les disponibilités des médecins, choisissez le spécialiste qu'il vous faut et prenez rendez-vous</p>
										<a href="{{ route('about') }}">PLUS D'INFOS<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-12">
							<!-- single-schedule -->
							<div class="single-schedule last">
								<div class="inner">
									<div class="icon">
										<i class="icofont-ui-clock"></i>
									</div>
									<div class="single-content">
										<h4>Horaires d'ouverture</h4>
										<ul class="time-sidual">
											<li class="day">Lundi - Vendredi <span>8.00-22.00</span></li>
											<li class="day">Samedi <span>8.00-18.00</span></li>
											<li class="day">Dimanche <span>9.00-13.30</span></li>
										</ul>
										<a href="{{ route('about') }}">PLUS D'INFOS<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/End Start schedule Area -->

		<!-- Start Feautes -->
		<section class="Feautes section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Nous sommes toujours prêt pour vous et votre famille</h2>
							<img src="img/section-img.png" alt="#">
							<p>Nous vous offrns des soins de qualité avec compassion et dévouement à chaque étape de votre santé.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
								<i class="icofont icofont-ambulance-cross"></i>
							</div>
							<h3>Assistance rapide</h3>
							<p>Une aide immédiate pour votre bien-être, où que vous soyez</p>
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
								<i class="icofont icofont-medical-sign-alt"></i>
							</div>
							<h3>Pharmacie bien fournie</h3>
							<p>Un large choix de médicaments et de soins pour répondre à tous vos besoins médicaux.</p>
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features last">
							<div class="signle-icon">
								<i class="icofont icofont-stethoscope"></i>
							</div>
							<h3>Traitement médical</h3>
							<p>Votre guérison commence ici, avec un traitement personnalisé et professionnel.</p>
						</div>
						<!-- End Single features -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Feautes -->
		
		<!-- Start Fun-facts -->
		<div id="fun-facts" class="fun-facts section overlay">
			<div class="container">
				<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-ambulance"></i>
							<div class="content">
								<span class="counter">2118</span>
								<p>Assistance rapide</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-user-alt-3"></i>
							<div class="content">
								<span class="counter">15</span>
								<p>Docteurs spécialistes</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont-simple-smile"></i>
							<div class="content">
								<span class="counter">12451</span>
								<p>Patients satisfaits</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-table"></i>
							<div class="content">
								<span class="counter">30</span>
								<p>Années d'expérence</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
				</div>
			</div>
		</div>
		<!--/ End Fun-facts -->
		
		<!-- Start Why choose -->
		<section class="why-choose section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Nous offrons différents services pour améliorer votre santé</h2>
							<img src="img/section-img.png" alt="#">
							<p>Nous mettons à votre disposition des soins spécialisés, une équipe dédiée et des technologies de pointe pour votre bien-être.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Why choose -->
		
		<!-- Start Call to action -->
		<section class="call-action overlay" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="content">
							<h2>Voulez-vous contactez les urgences ? Appelez le 18 ou le +226 70 60 60 60</h2>
							<p>Vous pouvez aussi nous contacter au +226 54078730</p>
							<div class="button">
								<a href="{{ route('contact') }}" class="btn">Contactez-nous</a>
								<a href="{{ route('about') }}" class="btn second">En Savoir Plus<i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Call to action -->
		
		<!-- Start portfolio -->
		<section class="portfolio section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Nous maintenons des règles de propreté à l'intérieur de notre hôpital</h2>
							<img src="img/section-img.png" alt="#">
							<p>Nous garantissons un environnement sûr, hygiénique et confortable pour le bien-être de nos patients et de leurs familles</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End portfolio -->
		@include('pages.layouts.footer')
@endsection