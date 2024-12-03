@extends('user-layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cb-details.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
@endpush

@section('content')

<body>

    <div class="backburner">
        <a href="{{ route('cb-course') }}">
            <img src="{{ asset('images\back-button.png') }}" alt="" width="60px">
        </a>
    </div>

    <div class="centered-div">
        <ol class="lg:flex items-center w-full space-y-4 lg:space-y-0">
            <li class="flex-1">
                <a class="flex items-center font-medium space-x-3 p-4 rounded-lg">
                    <div class="flex-shrink-0">
                        <span class="flex-shrink-0 w-10 h-10 border rounded-full transparent flex justify-center items-center text-sm">01</span>
                    </div>
                    <h4 class="text-base">Student Detail</h4>
                </a>
            </li>
            <svg class="w-5 h-5 ml-2 stroke-indigo-600 sm:ml-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5 18L9.67462 13.0607C10.1478 12.5607 10.3844 12.3107 10.3844 12C10.3844 11.6893 10.1478 11.4393 9.67462 10.9393L5 6M12.6608 18L17.3354 13.0607C17.8086 12.5607 18.0452 12.3107 18.0452 12C18.0452 11.6893 17.8086 11.4393 17.3354 10.9393L12.6608 6" stroke="#333" stroke-width="1.6" stroke-linecap="round" />
            </svg>
            <li class="flex-1">
                <a class="flex items-center font-medium space-x-3 p-4 rounded-lg">
                    <span class="flex-shrink-0 w-10 h-10 border rounded-full before flex justify-center items-center text-sm">02</span>
                    <h4 class="text-before whitespace-nowrap">Progress Update</h4>
                </a>
            </li>
        </ol>
    </div>
   
    <div class="containerss">
    <h2 class="form-title">Character Building Course Detail</h2>
        <div class="form-group">
            <label>Status</label>
            <span>: Project In Review</span>
        </div>
        <div class="form-group">
            <label>Event Name</label>
            <span>: Project Character Building Course Odd 2023/2024</span>
        </div>
        <div class="form-group">
            <label>Event Type</label>
            <span>: Social Activity</span>
        </div>
        <div class="form-group">
            <label>Organizer</label>
            <span>: BINUS University</span>
        </div>
        <div class="form-group">
            <label>Role</label>
            <span>: Volunteer</span>
        </div>
        <div class="form-group">
            <label>Opening Registration</label>
            <span>: 20 November 2023</span>
        </div>
        <div class="form-group">
            <label>Closing Registration</label>
            <span>: 27 January 2024</span>
        </div>
        <div class="form-group">
            <label>Report Deadline</label>
            <span>: 27 January 2024</span>
        </div>
        <div class="form-group">
            <label>Event Description</label>
            <span>: 
            The deadline for submission remains January 27, 2027. [PLEASE READ THE EVENT GUIDANCE!] Dear Student, Greetings from Teaching For Indonesia! This event will be available only for students taking character building courses in this semester Odd 2023/2024 (CB Kewarganegaraan/ CB Agama/ CB Pancasila). Please submit the final project for the Character Building courses that have been done. If you takes more than one Character Building course in the same semester, then the student needs to submit it according to the number of Character Building courses taken. Thank you for your attention. Regards, Teach For Indonesia</span>
        </div>
        <div class="form-group">
            <label>Notes</label>
            <span>: The maximum number of revision is 2 during the Social Activity - CB Course period in the current semester.</span>
        </div>
    </div>

        <div class="containerss">
            <section class="student-detail">
                <h2 class="form-title">Student Detail Form</h2>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" id="nim" name="nim" value="" required>
                </div>
                <div class="form-group">
                    <label for="leader_nim">Leader NIM</label>
                    <input type="text" id="leader_nim" name="leader-nim" value="" required>
                </div>
                <div class="form-group">
                    <label for="lecturer_code">Lecture Code</label>
                    <input type="text" id="lecturer_code" value="" required>
                </div>
                <div class="form-group">
                    <label for="lecturer">Lecturer</label>
                    <input type="text" id="lecturer" value="" required>
                </div>
                <div class="form-group">
                    <label for="cb_type">CB Type</label>
                    <span>: Agama</span>    
                </div>
                <div class="form-group">
                    <label for="cb_class">CB Class</label>
                    <input type="text" id="cb_class" name="cb_class" value="" required>
                </div>
                <div class="button-container-solo">
                    <!-- <a href="{{ route('cb-course') }}" class="back-button">BACK</a> -->
                    <a href="{{ route('CBdetails2') }}" type="submit" class="status in-review">NEXT</a>    
                </div>
            </section>
        </div>
    </div>
</body>

@endsection
