@extends('pages.layouts.app')

@section('title', 'Rendez-vous')

@section('content')
    @include('pages.layouts.header')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
      <div class="container">
        <div class="bread-inner">
          <div class="row">
            <div class="col-12">
              <h2>Prendre Rendez-Vous</h2>
              <ul class="bread-list">
                <li><a href="index.html">Accueil</a></li>
                <li><i class="icofont-simple-right"></i></li>
                <li class="active">Rendez-Vous</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Appointment -->
    <section class="appointment single-page">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-12 col-12">
            <div class="appointment-inner">
              <div class="title">
                <h3>Réservez dès maintenant !</h3>
                <p>Nous vous confirmerons votre rendez-vous en moins de 2 heures</p>
              </div>
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
              <form class="form" action="{{ route('appointment') }}" method="POST" id="appointment-form">
                @csrf
                <div class="row">
                    <!-- Spécialité (Département) -->
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <input type="text" class="form-control" value="{{ $doctor->specialty->name }}" readonly />
                            <input type="hidden" name="department" value="{{ $doctor->specialty->id }}" />
                        </div>
                    </div>

                    <!-- Docteur -->
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <input type="text" class="form-control" value="{{ $doctor->user->nom }} {{ $doctor->user->prenom }}" readonly />
                            <input type="hidden" name="doctor" value="{{ $doctor->id }}" />
                        </div>
                    </div>

                    <!-- Champ de Date -->
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <input type="text" placeholder="Date" id="datepicker" name="date" />
                        </div>
                    </div>

                    <!-- Champ de Téléphone -->
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <input name="phone" type="text" placeholder="Téléphone" />
                        </div>
                    </div>

                    <!-- Message -->
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="form-group">
                            <textarea name="message" placeholder="Écrivez votre message ici..."></textarea>
                        </div>
                    </div>

                    <!-- Bouton -->
                    <div class="col-12">
                        <div class="form-group">
                            <div class="button">
                                <button type="submit" class="btn">Réservez maintenant</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
          </div>
          <div class="col-lg-5 col-md-12">
            <div class="work-hour">
              <h3>Horaires de travail</h3>
              <ul class="time-sidual">
                <li class="day">Lundi <span>8.00-13.00 | 14.00-21.00</span></li>
                <li class="day">Mardi <span>8.00-13.00 | 14.00-21.00</span></li>
                <li class="day">Mercredi <span>8.00-13.00 | 14.00-21.00</span></li>
                <li class="day">Jeudi <span>8.00-13.00 | 14.00-21.00</span></li>
                <li class="day">Vendredi <span>8.00-13.00 | 14.00-21.00</span></li>
                <li class="day">Samedi <span>8.00-13.00 | 14.00-21.00</span></li>
                <li class="day">Dimanche <span>9.00-13.30</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/End Appointment -->
    @include('pages.layouts.footer')
@endsection