@extends('dashboard.dashboars_layout')

@section('title', 'Doctor | Dashboard')
@section('isactive1')
<span
    class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg"
    aria-hidden="true"
></span>
@endsection

@section('content')

<div class="container mx-auto mt-5">
    <div id="calendar"></div>
</div>

{{-- Inclure FullCalendar via CDN --}}


<script>
    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            locale: 'fr',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            events: @json($events) // Utilisation correcte
        });

        calendar.render();
    });
</script>

@endsection
