@extends('user-layout')


@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cb-details.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

@endpush


@section('content')


<body>

    <div class="backburner">
        <a href="{{ route('CBdetails') }}">
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
                    <h4 class="text-base">Student Detail</h4>
                </a>
            </li>
            <svg class="w-5 h-5 ml-2 stroke-indigo-600 sm:ml-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5 18L9.67462 13.0607C10.1478 12.5607 10.3844 12.3107 10.3844 12C10.3844 11.6893 10.1478 11.4393 9.67462 10.9393L5 6M12.6608 18L17.3354 13.0607C17.8086 12.5607 18.0452 12.3107 18.0452 12C18.0452 11.6893 17.8086 11.4393 17.3354 10.9393L12.6608 6" stroke="#333" stroke-width="1.6" stroke-linecap="round" />
            </svg>
            <li class="flex-1">
                <a class="flex items-center font-medium space-x-3 p-4 rounded-lg">
                    <span class="flex-shrink-0 w-10 h-10 border rounded-full transparent flex justify-center items-center text-sm">02</span>
                    <h4 class="text-base whitespace-nowrap">Progress Update</h4>
                </a>
            </li>
        </ol>
    </div>
   
    <div class="containerss">
            <section class="progress-form">
                <h2 class="form-title">Progress Form</h2>
                <div class="form-group">
                    <label for="project_name">Project Name</label>
                    <input type="text" id="project_name" name="project_name" value="" required>
                </div>
                <div class="form-group">
                    <label for="project_location">Project Location</label>
                    <input type="text" id="project_location" name="project_location" value="" required>
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select id="category" name="category" required>
                        <option value="" disabled selected>Select Option</option>
                        <option value="Education">Education</option>
                        <option value="Environment">Environment</option>
                        <option value="Health">Health</option>
                        <option value="Welfare">Welfare</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="scale">Scale</label>
                    <select id="scale" name="scale" required>
                        <option value="" disabled selected>Select Option</option>
                        <option value="Local">Local</option>
                        <option value="National">National</option>
                        <option value="International">International</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="report">Report</label>
                    <input type="file" id="report" name="report" accept=".pdf" required>
                </div>
                <div class="form-group">
                    <label for="video">Video</label>
                    <input type="file" id="video" name="video" accept="video/*" required>
                </div>
                <div class="form-group">
                    <label for="report_link">Report Link</label>
                    <input type="url" id="report_link" name="report_link" value="" required>
                </div>
                <div class="form-group">
                    <label for="video_link">Video Link</label>
                    <input type="url" id="video_link" name="video_link" value="" required>
                </div>
               
                <div class="button-container-solo">
                    <!-- <a href="{{ route('cb-course') }}" class="back-button">BACK</a> -->
                    <a href="{{ route('cb-course') }}" type="submit" class="status in-review">SUBMIT</a>    
                </div>
            </section>
    </div>

</body>


@endsection
