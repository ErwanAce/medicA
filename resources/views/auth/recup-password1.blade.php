@extends('pages.layouts.app')

@section('title', 'Mot de passe oublié')

@section('content')
    @include('pages.layouts.header')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
      <div class="container">
        <div class="bread-inner">
          <div class="row">
            <div class="col-12">
              <h2>Connexion</h2>
              <ul class="bread-list">
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li><i class="icofont-simple-right"></i></li>
                <li class="active">Connexion</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Shop Login -->
    <section class="login section">
      <div class="container">
        <div class="inner">
          <div class="row">
            <div class="col-lg-6">
              <div class="login-left"></div>
            </div>
            <div class="col-lg-6">
              <div class="login-form">
                <h2>Mot de passe oublié</h2>
                <p>
                  Vous vous rappelez de votre mot de passe ?
                  <a href="{{ route('login') }}">Se connecter</a>
                </p>
                @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                @endif
                <!-- Form -->
                <form class="form" method="post" action="{{ route('recup-password') }}">
                  @csrf
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                        <input
                          type="email"
                          name="email"
                          placeholder="Email"
                          required
                        />
                      </div>
                    </div>
                    <br/>
                    <div class="col-12">
                      <div class="form-group login-btn">
                        <button class="btn" type="submit">Envoyer</button>
                      </div>
                    </div>
                  </div>
                </form>
                <!--/ End Form -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ End Login -->
    @include('pages.layouts.footer')
@endsection