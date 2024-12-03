
@extends('user-layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cb-course.css') }}">
@endpush

@section('content')

    <div>
        <h3 class="page-title">Character Building Course</h3>
    </div>

    <hr class="my-3">

<div class="cards-container">
            <div class="card">
                <h4>Project CB Course Odd 2023/2024</h4>
                <p>CB Type: Agama</p>
                <p>Opening Registration: 2024-01-01</p>
                <p>Closing Registration: 2024-02-01</p>
                <p>Report Deadline: 2024-05-27</p>
                <button class="status reviewed">Reviewed</button>
            </div>

            <div class="card">
                <h4>Project CB Course Odd 2023/2024</h4>
                <p>CB Type: Pancasila</p>
                <p>Opening Registration: 2023-01-01</p>
                <p>Closing Registration: 2023-02-01</p>
                <p>Report Deadline: 2023-05-27</p>
                <button class="status in-review">Report In Review</button>
            </div>

            <div class="card">
                <h4>Project CB Course Odd 2024/2025</h4>
                <p>CB Type: Pendidikan</p>
                <p>Opening Registration: 2024-02-10</p>
                <p>Closing Registration: 2024-03-01</p>
                <p>Report Deadline: 2024-12-25</p>
                <a href="{{ route('CBdetails') }}" class="status waiting">Waiting To Upload Report</a>
            </div>

            <div class="card">
                <h4>Project CB Course Odd 2024/2025</h4>
                <p>CB Type: Pendidikan</p>
                <p>Opening Registration: 2024-02-10</p>
                <p>Closing Registration: 2024-03-01</p>
                <p>Report Deadline: 2024-12-25</p>
                <a href="{{ route('CBdetails') }}" class="status waiting">Waiting To Upload Report</a>
            </div>

            <div class="card">
                <h4>Project CB Course Odd 2024/2025</h4>
                <p>CB Type: CB Pendidikan</p>
                <p>Opening Registration: 2024-02-10</p>
                <p>Closing Registration: 2024-03-01</p>
                <p>Report Deadline: 2024-12-25</p>
                <a href="{{ route('CBdetails') }}" class="status waiting">Waiting To Upload Report</a>
            </div>
        <!-- </a>    -->
</div>

@endsection