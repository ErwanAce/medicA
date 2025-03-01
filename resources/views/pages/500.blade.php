@extends('pages.layouts.app')

@section('title', 'Home')

@section('content')		
			<!-- Error Page -->
			<section class="error-page section">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 offset-lg-3 col-12">
							<!-- Error Inner -->
							<div class="error-inner">
								<h1>500<span>Erreur de serveur</span></h1>
								<p>Une erreur interne est survenue. Veuillez réessayer plus tard ou contacter le support si le problème persiste.</p>
							</div>
							<!--/ End Error Inner -->
						</div>
						<div class="col-12">
							<div class="return">
								<a href="{{ route('home') }}" class="btn">Accueil</a>
							</div>
						</div>
					</div>
				</div>
			</section>	
			<!--/ End Error Page -->
			<style>
				.return {
					text-align: center;
					margin-top: 20px;
					margin-bottom: 15px;
				}

				.return a {
					color: white;
					background: #2889E4;
					padding: 10px 15px;
					display: inline-block;
					border-radius: 4px;
					text-decoration: none;
					font-size: 14px;
					transition: background 0.3s ease;
				}

				.return a:hover {
					background: #1e70c9;
				}
			</style>
			@include('pages.layouts.footer')
@endsection