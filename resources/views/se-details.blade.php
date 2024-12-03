@extends('user-layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/se-details.css') }}">
@endpush

@section('content')

<body>

    <div class="backburner">
        <a href="{{ route('social-event') }}">
            <img src="{{ asset('images\back-button.png') }}" alt="" width="60px">
        </a>
    </div>

    <div class="containerss">
        <h2 class="form-title">Event Detail</h2>
        <div class="form-group">
            <label>Status</label>
            <span>: Not Registered</span>
        </div>
        <div class="form-group">
            <label>Event Name</label>
            <span>: Lomba HIMPAUDI Dalam Memperingati Hari Pahlawan</span>
        </div>
        <div class="form-group">
            <label>Event Type</label>
            <span>: Social Event</span>
        </div>
        <div class="form-group">
            <label>Opening Registration</label>
            <span>: 09 November 2024</span>
        </div>
        <div class="form-group">
            <label>Closing Registration</label>
            <span>: 11 November 2024</span>
        </div>
        <div class="form-group">
            <label>Max Confirmation Date</label>
            <span>: H+1 After Registration</span>
        </div>
        <div class="form-group">
            <label>Evaluation Deadline</label>
            <span>: 22 November 2024</span>
        </div>
        <div class="form-group">
            <label>Category</label>
            <span>: Education</span>
        </div>
        <div class="form-group">
            <label>Scale</label>
            <span>: Local</span>
        </div>
        <div class="form-group">
            <label>Event Description</label>
            <span>: Dibutuhkan 30 volunteer untuk kegiatan penanaman bibit pohon     di Taman Palmerah pada hari Minggu, 17 November 2024. Berkumpul di Lobby Admisi Kampus Anggrek pukul 07.00, berangkat bersama menggunakan kendaraan BINUS pukul 07.30, dan kembali maksimal pukul 13.00.</span>
        </div>
        <div class="form-group">
            <label>Organizer</label>
            <span>: SSO Kemangsian</span>
        </div>
        <div class="form-group">
            <label>Role</label>
            <span>: Volunteer</span>
        </div>
        <div class="form-group">
            <label>Requirements</label>
            <span>: Bagi yang berminat dan berhasil mendaftar, silakan bergabung di grup WhatsApp melalui tautan berikut: https://chat.whatsapp.com/</span>
        </div>
        <div class="button-container-solo">
            <!-- <a href="{{ route('social-event') }}" class="status in-review">BACK</a> -->
            <a href="{{ route('SEregister') }}" class="status in-review">SIGN UP</a>          
        </div>
    </div>
</body>

@endsection