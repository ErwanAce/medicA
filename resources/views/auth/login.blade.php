@extends('pages.layouts.app')

@section('title', 'login')

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
                <h2>Se connecter ici</h2>
                <p>
                  N'avez vous pas de compte ?
                  <a href="{{ route('register') }}">S'inscrire ici</a>
                </p>
                <!-- Form -->
                <form class="form" method="post" action="{{ route('login') }}">
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
                      <div class="form-group">
                        <input
                          type="password"
                          name="password"
                          placeholder="Mot de passe"
                          required
                        />
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group login-btn">
                        <button class="btn" type="submit">Se connecter</button>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox-inline" for="2"
                          ><input name="news" id="2" type="checkbox" />Se rappeler de
                          moi</label
                        >
                      </div>
                      <a href="#" class="lost-pass">Mot de passe oublié ?</a>
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