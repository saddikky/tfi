@extends('user-layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/soc-event.css') }}">
@endpush

@section('content')

<body>
    
    <div>
        <h3 class="page-title">Social Event</h3>
    </div>

    <hr class="my-3">

        <div class="tabs">
            <ul class="C--tabs type-3 nav nav-tabs">
                <li class="tabssrcomp tab-item nav-item">
                    <a class="pb-4 label-tab tab-item-link tab-active nav-link" data-tab="ongoing">ONGOING</a>
                </li>
                <li class="tabssrcomp tab-item nav-item">
                    <a class="pb-4 label-tab tab-item-link tab-inactive nav-link" data-tab="past">PAST</a>
                </li>
            </u1>
        </div>

        <div class="cards-container">
            <div class="tab-content" data-tab="ongoing">
                <div class="card ongoing">
                    <h4>Volunteer Kegiatan Penanaman Bibit Pohon</h4>
                    <p>Event Type: Environment</p>
                    <p>Opening Registration: 1 Sep 2024</p>
                    <p>Close Registration: 30 Sep 2024</p>
                    <p>Event Date: 30 Nov 2024</p>
                    <p>Community Service Hours: 5 Hours</p>
                    <div class="class-footer">
                        <div class="progress-bar">
                            <div class="progress" style="width: 22%;"></div>
                        </div>
                        <p>Quota filled: 11 out of 50 people</p>
                        <div class="view-moree">
                            <a href="{{ route('SEdetails') }}" class="view-more" style="text-align: right">View more >></a>
                        </div>
                    </div>
                </div>

                <div class="card ongoing">
                    <h4>Clean Beach Campaign</h4>
                    <p>Event Type: Environment</p>
                    <p>Opening Registration: 5 Sep 2024</p>
                    <p>Close Registration: 15 Oct 2024</p>
                    <p>Event Date: 15 Nov 2024</p>
                    <p>Community Service Hours: 6 Hours</p>
                    <div class="card-footer">
                        <div class="progress-bar">
                            <div class="progress" style="width: 50%;"></div>
                        </div>
                        <p>Quota filled: 25 out of 50 people</p>
                        <div class="view-moree">
                            <a href="{{ route('SEdetails') }}" class="view-more" style="text-align: right">View more >></a>
                        </div>
                    </div>
                </div>

                <div class="card ongoing">
                    <h4>Urban Gardening Workshop</h4>
                    <p>Event Type: Education</p>
                    <p>Opening Registration: 10 Aug 2024</p>
                    <p>Close Registration: 25 Aug 2024</p>
                    <p>Event Date: 5 Sep 2024</p>
                    <p>Community Service Hours: 4 Hours</p>
                    <div class="card-footer">
                        <div class="progress-bar">
                            <div class="progress" style="width: 35%;"></div>
                        </div>
                        <p>Quota filled: 14 out of 40 people</p>
                        <div class="view-moree">
                            <a href="{{ route('SEdetails') }}" class="view-more" style="text-align: right">View more >></a>
                        </div>
                    </div>
                </div>

                <div class="card ongoing">
                    <h4>Wildlife Conservation Training</h4>
                    <p>Event Type: Environment</p>
                    <p>Opening Registration: 20 Jul 2024</p>
                    <p>Close Registration: 10 Aug 2024</p>
                    <p>Event Date: 25 Aug 2024</p>
                    <p>Community Service Hours: 8 Hours</p>
                    <div class="card-footer">
                        <div class="progress-bar">
                            <div class="progress" style="width: 75%;"></div>
                        </div>
                        <p>Quota filled: 30 out of 40 people</p>
                        <div class="view-moree">
                            <a href="{{ route('SEdetails') }}" class="view-more" style="text-align: right">View more >></a>
                        </div>
                    </div>
                </div>

                <div class="card ongoing">
                    <h4>Recycling Drive</h4>
                    <p>Event Type: Environment</p>
                    <p>Opening Registration: 1 Jun 2024</p>
                    <p>Close Registration: 30 Jun 2024</p>
                    <p>Event Date: 10 Jul 2024</p>
                    <p>Community Service Hours: 3 Hours</p>
                    <div class="card-footer">
                        <div class="progress-bar">
                            <div class="progress" style="width: 90%;"></div>
                        </div>
                        <p>Quota filled: 45 out of 50 people</p>
                        <div class="view-moree">
                            <a href="{{ route('SEdetails') }}" class="view-more" style="text-align: right">View more >></a>
                        </div>
                    </div>
                </div>

                <div class="card ongoing">
                    <h4>Community Clean-Up</h4>
                    <p>Event Type: Volunteer</p>
                    <p>Opening Registration: 15 Jul 2024</p>
                    <p>Close Registration: 30 Jul 2024</p>
                    <p>Event Date: 10 Aug 2024</p>
                    <p>Community Service Hours: 2 Hours</p>
                    <div class="card-footer">
                        <div class="progress-bar">
                            <div class="progress" style="width: 40%;"></div>
                        </div>
                        <p>Quota filled: 12 out of 30 people</p>
                        <div class="view-moree">
                            <a href="{{ route('SEdetails') }}" class="view-more" style="text-align: right">View more >></a>
                        </div>
                    </div>
                </div>

                <div class="card ongoing">
                    <h4>Tree Planting Marathon</h4>
                    <p>Event Type: Environment</p>
                    <p>Opening Registration: 1 May 2024</p>
                    <p>Close Registration: 20 May 2024</p>
                    <p>Event Date: 1 Jun 2024</p>
                    <p>Community Service Hours: 7 Hours</p>
                    <div class="card-footer">
                        <div class="progress-bar">
                            <div class="progress" style="width: 65%;"></div>
                        </div>
                        <p>Quota filled: 26 out of 40 people</p>
                        <div class="view-moree">
                            <a href="{{ route('SEdetails') }}" class="view-more" style="text-align: right">View more >></a>
                        </div>
                    </div>
                </div>

            </div>


            <div class="tab-content" data-tab="past">
                <div class="card past">
                    <h4>Blood Donation Drive</h4>
                    <p>Event Type: Health</p>
                    <p>Opening Registration: 1 Aug 2024</p>
                    <p>Close Registration: 30 Sep 2024</p>
                    <p>Event Date: 20 Oct 2024</p>
                    <p>Community Service Hours: 4 Hours</p>
                </div>
                <div class="card past">
                    <h4>Teaching Underprivileged Children</h4>
                    <p>Event Type: Education</p>
                    <p>Opening Registration: 15 Aug 2024</p>
                    <p>Close Registration: 20 Sep 2024</p>
                    <p>Event Date: 10 Oct 2024</p>
                    <p>Community Service Hours: 8 Hours</p>
                </div>
                <div class="card past">
                    <h4>Clean Water Supply Initiative</h4>
                    <p>Event Type: Health</p>
                    <p>Opening Registration: 15 Oct 2024</p>
                    <p>Close Registration: 15 Nov 2024</p>
                    <p>Event Date: 1 Dec 2024</p>
                    <p>Community Service Hours: 9 Hours</p>
                </div>
                <div class="card past">
                    <h4>Building a Community Library</h4>
                    <p>Event Type: Education</p>
                    <p>Opening Registration: 1 Sep 2024</p>
                    <p>Close Registration: 15 Oct 2024</p>
                    <p>Event Date: 1 Nov 2024</p>
                    <p>Community Service Hours: 12 Hours</p>
                </div>
                <div class="card past">
                    <h4>Food Drive for Homeless</h4>
                    <p>Event Type: Social</p>
                    <p>Opening Registration: 10 Sep 2024</p>
                    <p>Close Registration: 10 Oct 2024</p>
                    <p>Event Date: 25 Oct 2024</p>
                    <p>Community Service Hours: 7 Hours</p>
                </div>
            </div>

        </div>
    <!-- </div> -->
    <script src="script.js"></script>
</body>

@endsection

@push('scripts')
    <script src="{{ asset('js/social-event.js') }}"></script>
@endpush