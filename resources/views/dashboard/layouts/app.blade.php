<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{$dir ? 'rtl' : 'ltr'}}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

    <!-- Favicon -->
        <link rel="icon" href="{{ asset('img/favicon.png') }}">
        <link rel="stylesheet" href="{{asset('css/libs.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/hope-ui.css?v=1.1.0')}}">
        <link rel="stylesheet" href="{{asset('css/custom.css?v=1.1.0')}}">
        <link rel="stylesheet" href="{{asset('css/dark.css?v=1.1.0')}}">
        <link rel="stylesheet" href="{{asset('css/rtl.css?v=1.1.0')}}">
        <link rel="stylesheet" href="{{asset('css/customizer.css?v=1.1.0')}}">

        <!-- Fullcalender CSS -->
        <link rel='stylesheet' href="{{asset('js/fullcalendar/core/main.css')}}" />
        <link rel='stylesheet' href="{{asset('js/fullcalendar/daygrid/main.css')}}" />
        <link rel='stylesheet' href="{{asset('js/fullcalendar/timegrid/main.css')}}" />
        <link rel='stylesheet' href="{{asset('js/fullcalendar/list/main.css')}}" />
        <link rel="stylesheet" href="{{asset('js/Leaflet/leaflet.css')}}" />
        <link rel="stylesheet" href="{{asset('js/vanillajs-datepicker/dist/css/datepicker.min.css')}}" />

        <link rel="stylesheet" href="{{asset('js/aos/dist/aos.css')}}" />

        <style>
            th.hide-search input{
            display: none;
            }
        </style>
    </head>
    <body class="" >
        <div>
            @yield('content')
        </div>

        <!-- Backend Bundle JavaScript -->
        <script src="{{ asset('js/libs.min.js')}}"></script>
        @if(in_array('data-table',$assets ?? []))
        <script src="{{ asset('js/datatables/buttons.server-side.js')}}"></script>
        @endif
        @if(in_array('chart',$assets ?? []))
            <!-- apexchart JavaScript -->
            <script src="{{asset('js/charts/apexcharts.js') }}"></script>
            <!-- widgetchart JavaScript -->
            <script src="{{asset('js/charts/widgetcharts.js') }}"></script>
            <script src="{{asset('js/charts/dashboard.js') }}"></script>
        @endif

        <!-- mapchart JavaScript -->
        <script src="{{asset('js/Leaflet/leaflet.js') }} "></script>
        <script src="{{asset('js/charts/vectore-chart.js') }}"></script>


        <!-- fslightbox JavaScript -->
        <script src="{{asset('js/plugins/fslightbox.js')}}"></script>
        <script src="{{asset('js/plugins/slider-tabs.js') }}"></script>
        <script src="{{asset('js/plugins/form-wizard.js')}}"></script>

        <!-- settings JavaScript -->
        <script src="{{asset('js/plugins/setting.js')}}"></script>

        <script src="{{asset('js/plugins/circle-progress.js') }}"></script>
        @if(in_array('animation',$assets ?? []))
        <!--aos javascript-->
        <script src="{{asset('js/aos/dist/aos.js')}}"></script>
        @endif

        @if(in_array('calender',$assets ?? []))
        <!-- Fullcalender Javascript -->
        <script src="{{asset('js/fullcalendar/core/main.js')}}"></script>
        <script src="{{asset('js/fullcalendar/daygrid/main.js')}}"></script>
        <script src="{{asset('js/fullcalendar/timegrid/main.js')}}"></script>
        <script src="{{asset('js/fullcalendar/list/main.js')}}"></script>
        <script src="{{asset('js/fullcalendar/interaction/main.js')}}"></script>
        <script src="{{asset('js/moment.min.js')}}"></script>
        <script src="{{asset('js/plugins/calender.js')}}"></script>
        @endif

        <script src="{{asset('js/vanillajs-datepicker/dist/js/datepicker-full.js')}}"></script>

        @stack('scripts')

        <script src="{{asset('js/plugins/prism.mini.js')}}"></script>

        <!-- Custom JavaScript -->
        <script src="{{asset('js/hope-ui.js') }}"></script>
        <script src="{{asset('js/modelview.js')}}"></script>

        <!-- App Toast -->
        <script type="text/javascript">
            {{-- Success Message --}}
            @if (Session::has('success'))
            Swal.fire({
            icon: 'success',
            title: 'Done',
            text: '{{ Session::get("success") }}',
            confirmButtonColor: "#3a57e8"
            });
            @endif
            {{-- Errors Message --}}
            @if (Session::has('error'))
            Swal.fire({
            icon: 'error',
            title: 'Opps!!!',
            text: '{{Session::get("error")}}',
            confirmButtonColor: "#3a57e8"
            });
            @endif
            @if(Session::has('errors') || ( isset($errors) && is_array($errors) && $errors->any()))
            Swal.fire({
            icon: 'error',
            title: 'Opps!!!',
            text: '{{Session::get("errors")->first() }}',
            confirmButtonColor: "#3a57e8"
            });
            @endif
        </script>

        <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formTitle">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="main_form"></div>
                </div>
                </div>
            </div>
        </div>

    </body>
    
</html>