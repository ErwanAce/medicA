@extends('pages.layouts.app')

@section('title', 'Mail Success')

@section('content')
    <!-- Mail Success Page -->
    <section class="mail-seccess section">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-lg-6 col-12">
                <!-- Error Inner -->
                <div class="success-inner">
                <h1>
                    <i class="icofont-send-mail"></i>
                    <span>Your Mail Sent Successfully!</span>
                </h1>
                <p>
                    Aenean eget sollicitudin lorem, et pretium felis. Nullam euismod
                    diam libero, sed dapibus leo laoreet ut. Suspendisse potenti.
                    Phasellus urna lacus
                </p>
                <a href="{{ route('home') }}" class="btn">Accueil</a>
                </div>
                <!--/ End Error Inner -->
            </div>
            </div>
        </div>
        </section>
        <!--/ End Mail Success -->
        @include('pages.layouts.footer')
@endsection