@extends('user-layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/si-details.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
@endpush

@section('content')

    <div class="backburner">
        <a href="{{ route('social-innovation-project') }}">
            <img src="{{ asset('images\back-button.png') }}" alt="" width="60px">
        </a>
    </div>

    <div class="centered-div">
        <ol class="lg:flex items-center w-full space-y-4 lg:space-y-0">
            <li class="flex-1">
                <a href="https://pagedone.io/" class="flex items-center font-medium highlight-status rounded-lg">
                    <div class="flex-shrink-0">
                        <span class="w-10 h-10 rounded-full flex justify-center items-center mr-3 text-sm text-white">
                            <svg class="w-5 h-5 stroke-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 12L9.28722 16.2923C9.62045 16.6259 9.78706 16.7927 9.99421 16.7928C10.2014 16.7929 10.3681 16.6262 10.7016 16.2929L20 7" stroke="#fff" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="my-path"></path>
                            </svg>
                        </span>
                    </div>
                    <h4 class="text-base">Proposal</h4>
                </a>
            </li>
            <svg class="w-5 h-5 ml-2 stroke-indigo-600 sm:ml-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5 18L9.67462 13.0607C10.1478 12.5607 10.3844 12.3107 10.3844 12C10.3844 11.6893 10.1478 11.4393 9.67462 10.9393L5 6M12.6608 18L17.3354 13.0607C17.8086 12.5607 18.0452 12.3107 18.0452 12C18.0452 11.6893 17.8086 11.4393 17.3354 10.9393L12.6608 6" stroke="#333" stroke-width="1.6" stroke-linecap="round" />
            </svg>
            <li class="flex-1">
                <a class="flex items-center font-medium space-x-3 p-4 rounded-lg">
                    <span class="flex-shrink-0 w-10 h-10 border rounded-full transparent flex justify-center items-center text-sm">02</span>
                    <h4 class="text-base whitespace-nowrap">Report</h4>
                </a>
            </li>
        </ol>
    </div>

    <div class="containerss">
        <section class="student-detail">
            <h2 class="form-title">Proposal</h2>
            <div class="form-group">
                <label for="si-name">Social Innovation</label>
                <span>: What are your SDGs? - BINUS @Kemanggisan</span>
            </div>
            <div class="form-group">
                <label for="nim">Leader NIM</label>
                <span>: 2702353820</span>
            </div>
            <div class="form-group">
                <label for="leader-name">Leader Name</label>
                <span>: Ahmad Fauzi</span>
            </div>
            <div class="form-group">
                <label for="phone-number">Phone Number</label>
                <span>: 081234567890</span>
            </div>
            <div class="form-group">
                <label for="project-name">Project Name</label>
                <span>: Sosialisasi Peningkatan Minat Baca</span>
            </div>
            <div class="form-group">
                <label for="start-date">Start Date</label>
                <span>: 13 October 2024</span>
            </div>
            <div class="form-group">
                <label for="end-date">End Date</label>
                <span>: 11 December 2024</span>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <span>: Education</span>
            </div>
            <div class="form-group">
                <label for="scale">Scale</label>
                <span>: Local</span>
            </div>
            <div class="form-group">
                    <label for="proposal">Proposal</label>
                    <span class="status blue">DOWNLOAD PROPOSAL</span>
                    <!-- <a href="#" class="status blue">DOWNLOAD PROPOSAL</a> -->
            </div>
        </section>
    </div>

    <div class="containerss">
        <section class="student-detail">
            <h2 class="form-title">Report</h2>
            <div class="form-group">
                    <label for="proposal">Proposal</label>
                    <input type="file" id="proposal" name="proposal" accept=".pdf, .doc, .docx" required>
            </div>
            <div class="form-group  centered-div">
                <!-- <span class="status blue">DOWNLOAD TEMPLATE</span> -->
                <a href="#" class="status blue">DOWNLOAD TEMPLATE</a>
            </div>
            <div class="form-group">
                <label for="video_link">Video Link</label>
                <input type="url" id="video_link" name="video_link" value="" required>
            </div>
            <div class="form-group">
                <label for="scale">Freshmen Chaperone Role</label>
                <select id="scale" name="scale" required>
                    <option value="">Select a role</option>
                    <option value="local">Freshmen Partner (FP)</option>
                    <option value="internatioal">Freshmen Leader (FL)</option>
                </select>
            </div>
            <div class="button-container-solo">
                <!-- <a href="{{ route('social-innovation-project') }}" class="status in-review">CANCEL</a> -->
                <a href="{{ route('social-innovation-project') }}" class="status in-review" disabled>SUBMIT</a>
            </div>
        </section>
    </div>

    @endsection