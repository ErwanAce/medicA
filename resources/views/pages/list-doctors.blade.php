@extends('pages.layouts.app')

@section('title', 'Liste des docteurs')

@section('content')

    @include('pages.layouts.header')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
      <div class="container">
        <div class="bread-inner">
          <div class="row">
            <div class="col-12">
              <h2>Rencontrez nos docteurs</h2>
              <ul class="bread-list">
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li><i class="icofont-simple-right"></i></li>
                <li class="active">Docteurs</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Team -->
    <section id="team" class="team section single-page">
      <div class="container">
          <div class="row">
          <div class="col-lg-12">
            <div class="section-title">
                <h2 style="color: black;">Choississez le docteur que vous souhaitez rencontrer</h2>
                <img src="{{ asset('img/section-img.png') }}" alt="#" />
                <p style="color: black;">Consultez leur agenda et planifiez votre rendez-vous.</p>
            </div>
          </div>
              @foreach($doctors as $doctor)
                  <div class="col-lg-4 col-md-6 col-12">
                      <!-- Single Team -->
                      <div class="single-team">
                          <!-- Team Head -->
                          <div class="t-head">
                              <!-- Utiliser l'ID du docteur pour déterminer l'image -->
                              <img src="{{ asset('img/docteur' . $doctor->id . '.png') }}" 
                                alt="{{ $doctor->name }}" 
                                onerror="this.onerror=null;this.src='{{ asset('img/docteur_default.png') }}';" />
                              <div class="t-icon">
                                  <a href="{{ route('doctor.appointment', ['id' => $doctor->id]) }}" class="btn">Prendre rendez-vous</a>
                              </div>
                          </div>
                          <!-- Team Bottom -->
                          <div class="t-bottom">
                              <!-- Afficher la spécialité du docteur -->
                              <p>{{ $doctor->specialty->name ?? 'Spécialité non disponible' }}</p>
                              <h2><a href="{{ route('doctor.info', ['id' => $doctor->id]) }}">{{ $doctor->user->nom }} {{ $doctor->user->prenom }}</a></h2>
                          </div>
                          <!--/ End Team Bottom -->
                          <div class="agenda">
                          <a href="{{ route('doctor.agenda', ['id' => $doctor->id]) }}" class="btn">Voir l'agenda</a>
                          </div>
                      </div>
                      <!-- End Single Team -->
                  </div>
              @endforeach
          </div>
      </div>
    </section>
    <style>
      .agenda {
        text-align: center;
        margin-top: -10px;
        margin-bottom: 15px;
      }

      .agenda a {
          color: white;
          background: #2889E4;
          padding: 10px 15px;
          display: inline-block;
          border-radius: 4px;
          text-decoration: none;
          font-size: 14px;
          transition: background 0.3s ease;
      }

      .agenda a:hover {
          background: #1e70c9;
      }

    </style>
    <!--/ End Team -->
    @include('pages.layouts.footer')
@endsection