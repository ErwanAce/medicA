@extends('pages.layouts.app')

@section('title', 'Agenda')

@section('content')

    @include('pages.layouts.header')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
      <div class="container">
        <div class="bread-inner">
          <div class="row">
            <div class="col-12">
              <h2>Agenda</h2>
              <ul class="bread-list">
                <li><a href="#">Accueil</a></li>
                <li><i class="icofont-simple-right"></i></li>
                <li><a href="#">Docteurs</a></li>
                <li><i class="icofont-simple-right"></i></li>
                <li class="active">Agenda</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Doctor Schedule Area -->
    <section class="doctor-calendar section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Agenda du Dr. {{ $doctor->user->nom }} {{ $doctor->user->prenom }}</h2>
                        <img src="{{ asset('img/section-img.png') }}" alt="#" />
                        <p>Consultez les disponibilités du docteur et planifiez votre rendez-vous.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="doctor-calendar-table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Horaire / Date</th>
                                <th>Lundi</th>
                                <th>Mardi</th>
                                <th>Mercredi</th>
                                <th>Jeudi</th>
                                <th>Vendredi</th>
                                <th>Samedi</th>
                                <th>Dimanche</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($horairesParHeure as $horaire => $joursDisponibles)
                                <tr>
                                    <td><span class="time">{{ $horaire }}</span></td>
                                    @foreach(['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'] as $jour)
                                        <td>{!! $joursDisponibles[$jour] ?? '<span>&nbsp;</span>' !!}</td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                <div class="col-12">
                    <div class="return">
                        <a href="{{ route('list-doctors') }}" class="btn">Retourner</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Doctor Schedule Area -->
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