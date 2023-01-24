@extends('layouts.frontend_app')

<link rel="stylesheet" href="{{ asset('dashboard_app') }}/assets/css/teacher_details.css">
<link rel="stylesheet" href="{{ asset('dashboard_app') }}/assets/css/contact.css">
<style>
.form-control {
    color: #dee3e9 !important;
}
</style>

@section('frontend_title')
{{ ('Fanatech | Team Details') }}
@endsection


@section('frontend_content')

    <!-- ********************************
        main wrapper start here
    ================================= -->
    <main>

    <!-- ********************************
    ::: 3.0 about teacher
================================= -->

    <section id="about-teacher" class="pt-80">
        <div class="container">
            <div class="section-title">
                <h2>Our Member </h2>
            </div>
            <div class="row justify-content-between gy-5">
                <div class="col-md-5">
                    <div class="teacher-img">
                        <img src="{{ asset('uploads/teamMember_photos') }}/{{ $team_details->big_image }}" alt="teacher-img-1.png">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="teacher-header">
                        <h2 class="teacher-header-title">{{ $team_details->name }}</h2>
                        <p class="teacher-header-text">
                            ({{ $team_details->expert }})
                        </p>
                    </div>
                    <div class="teacher-body">
                        <h3 class="teacher-body-title">About Me</h3>
                        <p class="teacher-body-text">{{ $team_details->about }}</p>
                        <div class="teacher-body-info">
                            <h5 class="teacher-info-title">DEGREE: <span>{{ $team_details->degree }}</span></h5>
                            <h5 class="teacher-info-title">EXPERIENCE: <span>{{ $team_details->experience }}</span></h5>
                            <h5 class="teacher-info-title">HOBBIES: <span>{{ $team_details->hobbies }}</span></h5>
                            <h5 class="teacher-info-title">FACULTY: <span>{{ $team_details->faculty }}</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ********************************
    ::: 4.0 info teacher
================================= -->
    <section id="info-teacher" class="pt-80">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-4">
                    <div class="section-title">
                        <h3>Contact Information</h3>
                    </div>
                    <div class="info-body">
                        <h5 class="info-body-title">MAIL ME: <span>{{ $team_details->email }}</span></h5>
                        <h5 class="info-body-title">MAKE A CALL: <span>{{ $team_details->phone }}</span></h5>
                        <h5 class="info-body-title">SKYPE: <span>{{ $team_details->skype }}</span></h5>
                        <div class="normal-icon d-flex align-items-center mt-4">
                            <a href="{{ $team_details->fb_one }}"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="{{ $team_details->ins_two }}"><i class="fa-brands fa-instagram"></i></a>
                            <a href="{{ $team_details->ln_three }}"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="{{ $team_details->de_four }}"><i class="fa-brands fa-behance"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="section-title d-none">
                        <h3>Skills</h3>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="progress-bar" data-percentage="{{ $team_details->language_per }}%">
                                <h5 class="progress-title-holder">
                                    <span class="progress-title">Language</span>
                                    <span class="progress-number-wrapper">
                                        <span class="progress-number-mark">
                                            <span class="percent"></span>
                                            <span class="down-arrow"></span>
                                        </span>
                                    </span>
                                </h5>
                                <div class="progress-content-outter">
                                    <div class="progress-content"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="progress-bar" data-percentage="{{ $team_details->team_per }}%">
                                <h5 class="progress-title-holder">
                                    <span class="progress-title">Team Leader</span>
                                    <span class="progress-number-wrapper">
                                        <span class="progress-number-mark">
                                            <span class="percent"></span>
                                            <span class="down-arrow"></span>
                                        </span>
                                    </span>
                                </h5>
                                <div class="progress-content-outter">
                                    <div class="progress-content"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="progress-bar" data-percentage="{{ $team_details->development_per }}%">
                                <h5 class="progress-title-holder">
                                    <span class="progress-title">Development</span>
                                    <span class="progress-number-wrapper">
                                        <span class="progress-number-mark">
                                            <span class="percent"></span>
                                            <span class="down-arrow"></span>
                                        </span>
                                    </span>
                                </h5>
                                <div class="progress-content-outter">
                                    <div class="progress-content"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="progress-bar" data-percentage="{{ $team_details->design_per }}%">
                                <h5 class="progress-title-holder">
                                    <span class="progress-title">Design</span>
                                    <span class="progress-number-wrapper">
                                        <span class="progress-number-mark">
                                            <span class="percent"></span>
                                            <span class="down-arrow"></span>
                                        </span>
                                    </span>
                                </h5>
                                <div class="progress-content-outter">
                                    <div class="progress-content"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="progress-bar" data-percentage="{{ $team_details->innovation_per }}%">
                                <h5 class="progress-title-holder">
                                    <span class="progress-title">Innovation</span>
                                    <span class="progress-number-wrapper">
                                        <span class="progress-number-mark">
                                            <span class="percent"></span>
                                            <span class="down-arrow"></span>
                                        </span>
                                    </span>
                                </h5>
                                <div class="progress-content-outter">
                                    <div class="progress-content"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="progress-bar" data-percentage="{{ $team_details->communication_per }}%">
                                <h5 class="progress-title-holder">
                                    <span class="progress-title">Communication</span>
                                    <span class="progress-number-wrapper">
                                        <span class="progress-number-mark">
                                            <span class="percent"></span>
                                            <span class="down-arrow"></span>
                                        </span>
                                    </span>
                                </h5>
                                <div class="progress-content-outter">
                                    <div class="progress-content"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.partials.subscribe')
    @include('frontend.partials.contact')
@endsection
