@extends('pages.layouts.app')

@section('title', 'register')

@section('content')
    @include('pages.layouts.header')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
      <div class="container">
        <div class="bread-inner">
          <div class="row">
            <div class="col-12">
              <h2>Inscription</h2>
              <ul class="bread-list">
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li><i class="icofont-simple-right"></i></li>
                <li class="active">Inscription</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Shop Register -->
    <section class="register section">
      <div class="container">
        <div class="inner">
          <div class="row">
            <div class="col-lg-6">
              <div class="register-left"></div>
            </div>
            <div class="col-lg-6">
              <div class="register-form">
                <h2>S'inscrire ici</h2>
                <p>
                  Avez vous déjà un compte ? <a href="{{ route('login') }}">Se connecter ici</a>
                </p>
                <!-- Form -->
                <form class="form" method="post" action="{{ route('register') }}">
                  @csrf
                  <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" id="nom" name="nom" placeholder="Nom" required />
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" id="prenom" name="prenom" placeholder="Prenom" required />
                        </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group row">
                          <div class="col-4">
                              <input type="text" id="day" name="day" placeholder="Jour" maxlength="2" required />
                          </div>
                          <div class="col-4">
                              <input type="text" id="month" name="month" placeholder="Mois" maxlength="2" required />
                          </div>
                          <div class="col-4">
                              <input type="text" id="year" name="year" placeholder="Année" maxlength="4" required />
                          </div>
                      </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input type="email" id="email" name="email" placeholder="Email" required />
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" id="phone" name="phone" placeholder="Telephone" required />
                        </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group password-container">
                          <input type="password" id="password" name="password" placeholder="Mot de passe" required />
                          <button type="button" class="toggle-password" onclick="togglePassword('password', 'toggleIcon1')">
                            <img id="toggleIcon1" src="{{ asset('img/hide.png') }}" alt="Afficher/Masquer" />
                          </button>
                      </div>
                  </div>
                  <div class="col-12">
                      <div class="form-group password-container">
                          <input type="password" id="confirmPassword" name="password_confirmation" placeholder="Confirmer le mot de passe" required />
                          <button type="button" class="toggle-password" onclick="togglePassword('confirmPassword', 'toggleIcon2')">
                            <img id="toggleIcon2" src="{{ asset('img/hide.png') }}" alt="Afficher/Masquer" />
                          </button>
                      </div>
                      <small id="message" style="color: red;"></small>
                  </div>
                    <div class="col-12">
                        <div class="form-group login-btn">
                            <button class="btn" type="submit" id="submitBtn" disabled>S'inscrire</button>
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
    <!--/ End Register -->

    <script>
      document.addEventListener("DOMContentLoaded", function () {
          const password = document.getElementById("password");
          const confirmPassword = document.getElementById("confirmPassword");
          const submitBtn = document.getElementById("submitBtn");
          const message = document.getElementById("message");

          function checkPasswords() {
              if (password.value === confirmPassword.value && password.value !== "") {
                  message.style.color = "green";
                  message.textContent = "Les mots de passe correspondent ✅";
                  submitBtn.removeAttribute("disabled");
              } else {
                  message.style.color = "red";
                  message.textContent = "Les mots de passe ne correspondent pas ❌";
                  submitBtn.setAttribute("disabled", "true");
              }
          }

          password.addEventListener("input", checkPasswords);
          confirmPassword.addEventListener("input", checkPasswords);
      });

      function togglePassword(id, iconId) {
        const input = document.getElementById(id);
        const icon = document.getElementById(iconId);

        const hideImg = "{{ asset('img/hide.png') }}";
        const showImg = "{{ asset('img/open.png') }}";

        if (input.type === "password") {
            input.type = "text";
            icon.src = showImg; // Image pour afficher
        } else {
            input.type = "password";
            icon.src = hideImg; // Image pour masquer
        }
      }
    </script>

    <style>
      .password-container {
          position: relative;
      }

      .toggle-password {
          position: absolute;
          right: 10px;
          top: 50%;
          transform: translateY(-50%);
          background: none;
          border: none;
          cursor: pointer;
      }

      .toggle-password img {
          width: 20px;
          height: 20px;
      }
      small {
        display: block;
        margin-top: 1px; 
        font-size: 0.875rem;
      }
    </style>
    @include('pages.layouts.footer')
@endsection