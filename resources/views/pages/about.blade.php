@extends('pages.layouts.app')

@section('title', 'contact')

@section('content')

    @include('pages.layouts.header')	
		<!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>A propos de nous</h2>
							<ul class="bread-list">
								<li><a href="{{ route('home') }}">Accueil</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">A propos de nous</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
	
		<!-- Start Portfolio Details Area -->
		<section class="pf-details section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="inner-content">
							<div class="body-text">
								<h3>Le nom de notre projet s'appelle MedicA</h3>
								<p>MedicA est une plateforme innovante dédiée à la gestion des hôpitaux, conçue pour améliorer l'efficacité et la qualité des soins. Elle permet de centraliser toutes les informations médicales, administratives et logistiques, assurant une coordination fluide entre les différents services et personnels de santé</p>
								<p>Grâce à MedicA, les hôpitaux offrent une prise en charge rapide et personnalisée à chaque patient. L'application permet un suivi précis des traitements, des rendez-vous et des ressources, garantissant une expérience médicale plus fluide et agréable pour les patients et leurs familles.</p>
								<p>MedicA facilite la gestion quotidienne des établissements de santé tout en assurant la sécurité des données sensibles des patients. Sa simplicité d'utilisation et ses fonctionnalités adaptées font de cette solution un atout indispensable pour un environnement hospitalier moderne et réactif.</p>
								<div class="share">
									<h4>Partagez maintenant -</h4>
									<ul>
										<li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Portfolio Details Area -->
        @include('pages.layouts.footer')
@endsection