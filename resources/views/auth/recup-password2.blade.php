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

    <!-- Shop Change Password -->
    <section class="login section">
      <div class="container">
        <div class="inner">
          <div class="row">
            <div class="col-lg-6">
              <div class="login-left"></div>
            </div>
            <div class="col-lg-6">
              <div class="login-form">
                <h2>Changez le mot de passe</h2>
                <p>
                  Nous vous avons envoyé un code OTP. Vous devez le renseigner dans le champ correspondant.</p>
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
                <form class="form" method="post" action="{{ route('change-password', ['email' => $email]) }}">
                  @csrf
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                        <input
                          type="text"
                          name="codeOTP"
                          placeholder="Code OTP"
                          required
                        />
                      </div>
                    </div>
                    <br/>
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
    <!--/ End Change Password -->
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