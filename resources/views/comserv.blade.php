@extends('user-layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/comserv.css') }}">
@endpush

@section('content')

    <h3 class="page-title">Community Service Hours</h3>
    <hr class="my-3">

    <div class="containerss">
        <div class="event-row">
            <div class="event-title">
                <h6 class="title-bold">Lomba HIMPAUDI Dalam Memperingati Hari Pahlawan</h6>    
                <h6 class="event-date">10 November 2024</h6>
            </div>
            <div class="event-hours"><span class="star-icon">⭐</span> 5 Hours</div>
        </div>
        <div class="event-row">
            <div class="event-title">
                <h6 class="title-bold">Donor Darah Kampus Kemanggisan Sep 2024</h6>    
                <h6 class="event-date">15 September 2024</h6>
            </div>
            <div class="event-hours"><span class="star-icon">⭐</span> 5 Hours</div>
        </div>
        <div class="event-row">
            <div class="event-title">
                <h6 class="title-bold">Volunteer Kegiatan Penanaman Bibit Pohon</h6>    
                <h6 class="event-date">1 October 2024</h6>
            </div>
            <div class="event-hours"><span class="star-icon">⭐</span> 5 Hours</div>
        </div>
        <div class="event-row">
            <div class="event-title">
                <h6 class="title-bold">Volunteer Usher dan Registration Uconnect</h6>    
                <h6 class="event-date">29 Agustus 2024</h6>
            </div>
            <div class="event-hours"><span class="star-icon">⭐</span> 5 Hours</div>
        </div>
        <div class="event-row">
            <div class="event-title">
                <h6 class="title-bold">Volunteer Kegiatan Buka Puasa Bersama BINUS</h6>    
                <h6 class="event-date">7 July 2024</h6>
            </div>
            <div class="event-hours"><span class="star-icon">⭐</span> 5 Hours</div>
        </div>
    </div>

@endsection