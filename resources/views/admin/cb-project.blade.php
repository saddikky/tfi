@extends('admin.admin-layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin/adm-cb-project.css') }}">
@endpush

@section('content')

    <div>
        <h3 class="page-title">Character Building Project Report Submission</h3>
    </div>

    <hr class="my-3">
    
    <!-- <div class="containerss"> -->
        <div class="tabs">
            <!-- <button class="tab" data-tab="lab">Ongoing Event</button>
            <button class="tab" data-tab="lec">Past Event</button> -->
            <ul class="C--tabs type-3 nav nav-tabs">
                <li class="tabssrcomp tab-item nav-item">
                    <a class="pb-4 label-tab tab-item-link tab-active nav-link" data-tab="ongoing">NEED TO BE REVIEWED</a>
                </li>
                <li class="tabssrcomp tab-item nav-item">
                    <a class="pb-4 label-tab tab-item-link tab-inactive nav-link" data-tab="past">REVIEWED</a>
                </li>
            </u1>
        </div>

        <div class="cards-container">
            <div class="tab-content" data-tab="ongoing">
                <div class="card ongoing">
                    <h4>Project CB Course Odd 2023/2024</h4>
                    <p>CB Type: Pancasila</p>
                    <p>Lecturer: Bambas Pamungkang</p>
                    <p>Leader Name: Kiyora Wears</p>
                    <p>CB Class: LA07</p>
                    <a href="#" class="status in-review">VIEW VIDEO</a>
                    <a href="#" class="status in-review">VIEW REPORT</a>
                    <div class="button-container">
                        <a href="#" class="status waiting">REVISION</a>
                        <a href="#" class="status blue">ACCEPT</a>    
                    </div>
                </div>

                <div class="card ongoing">
                    <h4>Project CB Course Odd 2023/2024</h4>
                    <p>CB Type: Pancasila</p>
                    <p>Lecturer: Thomas Shelebey</p>
                    <p>Leader Name: Jeremy Tetty</p>
                    <p>CB Class: LB07</p>
                    <a href="#" class="status in-review">VIEW VIDEO</a>
                    <a href="#" class="status in-review">VIEW REPORT</a>
                    <div class="button-container">
                        <a href="#" class="status waiting">REVISION</a>
                        <a href="#" class="status blue">ACCEPT</a>    
                    </div>
                </div>
            </div>


            <div class="tab-content" data-tab="past">
                <div class="card past">
                    <p><b>STATUS: REVIEWED</b></p>
                    <hr>
                    <h4>Project CB Course Odd 2023/2024</h4>
                    <p>CB Type: Pancasila</p>
                    <p>Lecturer: Bambas Pamungkang</p>
                    <p>Leader Name: Fedrick Tasripin</p>
                    <p>CB Class: LA07</p>
                    <p>Reviewer: Ave Maria</p>
                </div>

                <div class="card past">
                    <p><b>STATUS: REVIEWED</b></p>
                    <hr>
                    <h4>Project CB Course Odd 2023/2024</h4>
                    <p>CB Type: Pancasila</p>
                    <p>Lecturer: Bambas Pamungkang</p>
                    <p>Leader Name: Oh Sehun</p>
                    <p>CB Class: LA07</p>
                    <p>Reviewer: Claribel Anindita Sehulina Pinem</p>
                </div>

                <div class="card past">
                    <p><b>STATUS: REVIEWED</b></p>
                    <hr>
                    <h4>Project CB Course Odd 2023/2024</h4>
                    <p>CB Type: Agama</p>
                    <p>Lecturer: Syaura Pamungkang</p>
                    <p>Leader Name: Prasetyo Arvin</p>
                    <p>CB Class: LB08</p>
                    <p>Reviewer: Solihin</p>
                </div>

                <div class="card past">
                    <p><b>STATUS: REVIEWED</b></p>
                    <hr>
                    <h4>Project CB Course Odd 2023/2024</h4>
                    <p>CB Type: Kewarganegaraan</p>
                    <p>Lecturer: Arnold Poernomo</p>
                    <p>Leader Name: Andira Dinda Larasathi</p>
                    <p>CB Class: LD64</p>
                    <p>Reviewer: Ave Maria</p>
                </div>
            </div>

        </div>
    <!-- </div> -->
    <script src="script.js"></script>
    
@endsection

@push('scripts')
    <script src="{{ asset('js/social-event.js') }}"></script>
@endpush