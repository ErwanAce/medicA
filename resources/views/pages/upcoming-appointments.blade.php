@extends('pages.layouts.app')

@section('title', 'upcoming appointments')

@section('content')
    @include('pages.layouts.header')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Mes prochains rendez-vous</h2>
                        <ul class="bread-list">
                            <li><a href="{{ route('home') }}">Accueil</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li><a>Historiques</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Prochains rendez-vous</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Upcoming Appointments -->
    <section class="doctor-calendar section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Historique des rendez-vous</h2>
                        <img src="{{ asset('img/section-img.png') }}" alt="#" />
                        <p>Consultez les rendez-vous à venir dans la semaine</p>
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
                                    <th>Annuler</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($appointments as $index => $appointment)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>Dr. {{ $appointment->doctor->user->nom }} {{ $appointment->doctor->user->prenom }}</td>
                                        <td>{{ $appointment->message ?? 'Aucune description' }}</td>
                                        <td>{{ $appointment->appointment_time }}</td>
                                        <td><span class="text-muted">En attente</span></td>
                                        <td>
                                            <form action="{{ route('appointment.cancel', $appointment->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger cancel-btn" title="Annuler">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </form>
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
    <!--End Upcoming Appointments -->
    @include('pages.layouts.footer')
@endsection