@extends('pages.layouts.app')

@section('title', 'doctor info')

@section('content')
    @include('pages.layouts.header')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Informations du docteur</h2>
                        <ul class="bread-list">
                            <li><a href="{{ route('home') }}">Accueil</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li><a href="{{ route('list-doctors') }}">Docteurs</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Infos du docteur</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Doctor Details -->
    <div class="doctor-details-area section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="doctor-details-item doctor-details-left">
                        <img src="{{ asset('img/docteur' . $doctor->id . '.png') }}" 
                        alt="{{ $doctor->name }}" 
                        onerror="this.onerror=null;this.src='{{ asset('img/docteur_default.png') }}';" />
                        <div class="doctor-details-contact">
                            <h3>Email</h3>
                            <ul class="basic-info">
                                <li>
                                    <i class="icofont-ui-message"></i>
                                    {{ $doctor->user->email }}
                                </li>
                            </ul>
                            <!-- Doctor Details Work -->
                            <div class="doctor-details-work">
                            <h3>Horaires disponibles</h3>
                                <ul class="time-sidual">
                                @foreach ($horairesFinal as $jour => $horaire)
                                    <li class="day">{{ $jour }}  <span>{{ $horaire }}</span></li>
                                @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="doctor-details-item">
                        <div class="doctor-details-right">
                            <div class="doctor-name">
                                <h3 class="name">{{ $doctor->user->nom }} {{ $doctor->user->prenom }}</h3>
                                <p class="deg">{{ $doctor->education_level }}</p>
                            </div>
                            <div class="doctor-details-biography">
                                <h3>Biography</h3>
                                <p>
                                    {{ $doctor->biography }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Doctor Details -->
    @include('pages.layouts.footer')
@endsection