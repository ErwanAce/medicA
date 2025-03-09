@extends('pages.layouts.app')

@section('title', 'past appointments')

@section('content')
    @include('pages.layouts.header')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Mes anciens rendez-vous</h2>
                        <ul class="bread-list">
                            <li><a href="{{ route('home') }}">Accueil</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li><a>Historiques</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Anciens rendez-vous</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    
    <!-- Past Appointments -->
    <section class="doctor-calendar section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Historique des rendez-vous</h2>
                        <img src="{{ asset('img/section-img.png') }}" alt="#" />
                        <p>Consultez les rendez-vous passés du plus récent au plus ancien</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="doctor-calendar-table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>Docteur</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th>Statut</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($appointments as $index => $appointment)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>Dr. {{ $appointment->doctor->user->nom }} {{ $appointment->doctor->user->prenom }}</td>
                                        <td>{{ $appointment->message ?? 'Aucune description' }}</td>
                                        <td>{{ $appointment->appointment_time }}</td>
                                        <td>
                                            @if($appointment->status == 'cancelled')
                                                <span class="text-danger">Annulé</span>
                                            @elseif($appointment->status == 'completed')
                                                <span class="text-success">Terminé</span>
                                            @else
                                                <span>{{ ucfirst($appointment->status) }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Past Appointments -->
    @include('pages.layouts.footer')
@endsection