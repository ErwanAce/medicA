<!-- Preloader -->
<div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div class="indicator"> 
                    <svg width="16px" height="12px">
                        <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                        <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
<!-- End Preloader -->
<!-- Header Area -->
<header class="header" >
				<!-- Topbar -->
				<div class="topbar">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 col-md-5 col-12">
								<!-- Contact -->
								<ul class="top-link">
									<li><a href="{{ route('about') }}">À propos de nous</a></li>
									<li><a href="{{ route('contact') }}">Contact</a></li>
									<li><a href="#">FAQ</a></li>
								</ul>
								<!-- End Contact -->
							</div>
							<div class="col-lg-6 col-md-7 col-12">
								<!-- Top Contact -->
								<ul class="top-contact">
									<li><i class="fa fa-phone"></i>+226 54078730</li>
									<li><i class="fa fa-envelope"></i><a href="mailto:medicaApp@yourmail.com">medicaApp@gmail.com</a></li>
								</ul>
								<!-- End Top Contact -->
							</div>
						</div>
					</div>
				</div>
				<!-- End Topbar -->
				<!-- Header Inner -->
				<div class="header-inner">
					<div class="container">
						<div class="inner">
							<div class="row">
								<div class="col-lg-3 col-md-3 col-12">
									<!-- Start Logo -->
									<div class="logo">
										<a href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}" alt="#"></a>
									</div>
									<!-- End Logo -->
									<!-- Mobile Nav -->
									<div class="mobile-nav"></div>
									<!-- End Mobile Nav -->
								</div>
								<div class="col-lg-7 col-md-9 col-12">
									<!-- Main Menu -->
									<div class="main-menu">
										<nav class="navigation">
											<ul class="nav menu">
												<li class="{{ Route::is('home') ? 'active' : '' }}">
													<a href="{{ route('home') }}">Accueil</a>
												</li>
												<li class="{{ Route::is('list-doctors') ? 'active' : '' }}">
													<a href="{{ route('list-doctors') }}">Docteurs</a>
												</li>
												<li class="{{ Route::is('contact') ? 'active' : '' }}">
													<a href="{{ route('contact') }}">Contactez-Nous </a>
												</li>
											</ul>
										</nav>
									</div>
									<!--/ End Main Menu -->
								</div>
								<div class="col-lg-2 col-12 d-flex">
									<div class="get-quote" style="margin-right: 8px;">
										<a href="{{ route('list-doctors') }}" class="btn">Prendre rendez-vous</a>
									</div>
									<br/>   
									<div class="get-quote">
									@if(auth()->check())
										<a href="{{ route('logout') }}" class="btn"
										onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
											Se déconnecter
										</a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
									@else
										<a href="{{ route('login') }}" class="btn">Se connecter</a>
									@endif

									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/ End Header Inner -->
			</header>
			<!-- End Header Area -->