@extends('user-layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/se-register.css') }}">
@endpush

@section('content')

<body>
    <div class="backburner">
        <a href="{{ route('SEdetails') }}">
            <img src="{{ asset('images\back-button.png') }}" alt="" width="60px">
        </a>
    </div>

    <div class="containerss">
        <section class="registration-form">
            <h2 class="form-title">Register Event</h2>
            <form id="form">
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <span id="nim">: {{ Auth::user()->nim }}</span>
                </div>
    
                <div class="form-group">
                    <label for="name">Name</label>
                    <span id="name">: {{ Auth::user()->name }}</span>
                </div>
    
                <div class="form-group">
                    <label for="email">Email</label>
                    <span id="email">: {{ Auth::user()->email }}</span>
                </div>
    
                <div class="form-group">
                    <label for="phone">Phone Number <span class="required">*</span></label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
    
                <div class="form-group">
                    <label for="campus">Campus</label>
                    <span id="campus">: BINUS CAMPUS</span>
                </div>
    
                <div class="form-group">
                    <label for="faculty">Faculty</label>
                    <span id="faculty">: Science</span>
                </div>
    
                <div class="form-group">
                    <label for="program">Study Program</label>
                    <span id="program">: Computer Science</span>
                </div>
    
                <div class="form-group">
                    <label for="requirements">Requirements</label>
                    <span id="requirements">: Bagi yang berminat dan berhasil mendaftar, silakan bergabung di grup WhatsApp melalui tautan berikut: https://chat.whatsapp.com/</span>
                </div>

                <div class="form-group">
                    <label class="checkbox-wrapper">
                        <span class="checkbox-container">
                            <input type="checkbox" id="terms" name="terms">
                            <label class="terms">I have read all information and willing to accept all terms mentioned</label>
                        </span>
                    </label>
                </div>
                
                <div class="button-container-solo">
                    <!-- <button type="button" class="status in-review">CANCEL</button> -->
                     <a href= "{{ route('social-event') }}">
                         <button type="submit" class="status reviewed" disabled>REGISTER</button>
                     </a>
                </div>
            </form>
        </section>
    </div>
</body>

@endsection

@push('scripts')
    <script src="{{ asset('js/se-register.js') }}"></script>
@endpush
