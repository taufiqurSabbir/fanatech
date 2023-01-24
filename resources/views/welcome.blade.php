@extends('layouts.frontend_app')

<link rel="stylesheet" href="{{ asset('dashboard_app') }}/assets/css/contact.css">
<style>
.form-control {
    color: #dee3e9 !important;
}
</style>


@section('frontend_content')
    <!-- ********************************
        main wrapper start here
    ================================= -->
    <main>

        <!-- ********************************
        ::: 4.0 banner
    ================================= -->

        <section id="banner-section" class="pt-80">
            <div class="container">
                <div class="row gy-4 gy-md-0">
                    <div class="col-md-6 col-sm-12 align-items-center">
                        <div class="banner-welcome">


                            <h1 class="banner-title" style="font-size: 36px !important;">
                                @isset($banner_info->title)
                                    {{ Str::limit($banner_info->title , 120) }}
                                @endisset
                            </h1>
                            <p class="banner-text py-4">
                                @isset($banner_info->description)
                                    {{ Str::limit($banner_info->description , 300) }}
                                @endisset
                            </p>
                            <div class="normal-btn py-3">
                                @isset($banner_info->button)
                                    <a href="{{ $banner_info->link }}">{{ Str::limit($banner_info->button , 10) }}<i class="fa-solid fa-angle-right"></i></a>
                                @endisset

                            </div>
                            <div class="normal-icon d-flex align-items-center pt-3">
                                <p class="me-3">Follow Us--</p>
                                <div>
                                    <a href="https://www.facebook.com/fexdvers" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/fexdvers" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="https://www.linkedin.com/fexdvers" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="https://www.behance.net/fexdvers" target="_blank"><i class="fa-brands fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 align-items-center">
                        <div class="banner-img">
                            <img class="img-fluid w-auto mx-auto" src="{{ asset('dashboard_app') }}/assets/images/Fanatech-logo-drop-shadow.png"
                                alt="banner-img.png">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ********************************
        ::: 5.0 about
    ================================= -->

    <section id="about-section" class="pt-80">
        <div class="container">
            <div class="row gy-sm-5 gy-0">
                <div class="col-md-6 col-sm-12">
                    <div class="about-text">
                        <div class="section-title">
                            <h2 class="left-title">About Fanatech</h2>
                        </div>

                        <p class="about-dtls">
                            @isset($about_info->description)
                                 {!! Str::limit($about_info->description , 330) !!}
                            @endisset
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="row gy-4 align-items-center">
                        <div class="col-sm-6">
                            <div class="counter-card">
                                <div class="d-flex align-items-center justify-content-center">
                                    <h2 class="counter-item" data-num="{{isset($about_info->happy_client) ? $about_info->happy_client : 0}}" data-speed="10"></h2>
                                    <span class="plus"> +</span>
                                </div>
                                <h4 class="my-lg-3 my-sm-2 my-md-2">Happy Clients</h4>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="counter-card">
                                <div class="d-flex align-items-center justify-content-center">
                                    <h2 class="counter-item" data-num="{{isset($about_info->experience) ? $about_info->experience : 0}}" data-speed="10"></h2>
                                    <span class="plus"> y+</span>
                                </div>
                                <h4 class="my-lg-3 my-sm-2 my-md-2">Experience</h4>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="counter-card">
                                <div class="d-flex align-items-center justify-content-center">
                                    <h2 class="counter-item" data-num="{{isset($about_info->project_complete) ? $about_info->project_complete : 0}}" data-speed="10"></h2>
                                    <span class="plus"> +</span>
                                </div>
                                <h4 class="my-lg-3 my-sm-2 my-md-2">Project Complete</h4>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="counter-card">
                                <div class="d-flex align-items-center justify-content-center">
                                    <h2 class="counter-item" data-num="{{isset($about_info->seals) ? $about_info->seals : 0}}" data-speed="10"></h2>
                                    <span class="plus"> +</span>
                                </div>
                                <h4 class="my-lg-3 my-sm-2 my-md-2">Sales</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- ********************************
        ::: 6.0 quality
    ================================= -->

        <section id="quality-section" class="pt-80">
            <div class="container">
                <div class="section-title">
                    <h2>Quality Services Showed</h2>
                </div>
                <div class="swiper quality-swiper">
                    <div class="swiper-wrapper">

                        @forelse ($service_info as $service)
                            {{-- Single One --}}
                            <div class="swiper-slide">
                                <div class="quality-item">
                                    <div class="quality-icon">
                                        <img src="{{ asset('uploads/icon_photos') }}/{{ $service->icon }}" alt="" style="width: 80px; height: 80px;">
                                    </div>
                                    <h3 class="quality-title"> {{ Str::limit($service->title , 120) }}</h3>
                                    <p class="quality-text">
                                        {{ Str::limit($service->description , 400) }}
                                    </p>
                                </div>
                            </div>
                            {{-- Single End --}}

                        @empty
                            No Service
                        @endforelse


                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!-- ********************************
        ::: 7.0 project
    ================================= -->

        <section id="project-section" class="pt-80">
            <div class="container">
                <div class="section-title">
                    <h2>Project highlights</h2>
                </div>
                <div class="swiper project-swiper">
                    <div class="swiper-wrapper">

                        @forelse ($project_info as $project)

                            {{-- Single Item --}}
                            <div class="swiper-slide">
                                <div class="project-card">
                                    <div class="project-card-img">
                                        <a href="{{ route('portfolio-details-page', $project->id) }}">
                                            <img src="{{ asset('uploads/portfolio_photos') }}/{{ $project->image }}" alt="project-img.jpeg">
                                        </a>
                                    </div>
                                    <div class="project-card-body">
                                        <a href="{{ route('portfolio-details-page', $project->id) }}">
                                            <h3 class="project-card-title">{{ Str::limit($project->title , 30) }}</h3>
                                        </a>
                                        <p class="project-card-text">
                                            {{ Str::limit($project->short_details , 80) }}
                                        </p>
                                        <span class="project-card-btn">
                                            <a href="{{ route('portfolio-details-page', $project->id) }}">
                                                Read More >>
                                            </a>
                                        </span>
                                    </div>
                                    <div class="project-card-footer">
                                        <p class="text-muted project-footer-text">Date:- <small>{{ $project->date }}</small></p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            No Project Available
                        @endforelse
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!-- ********************************
        ::: 8.0 clients
    ================================= -->

        <section id="clients-section" class="pt-80">
            <div class="container">
                <div class="section-title">
                    <h2>Our Multiple Business</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="swiper clients-swiper">

                            <div class="swiper-wrapper">

                                @forelse ($brand_info as $brand)

                                    {{-- Single Item --}}
                                    <div class="swiper-slide">
                                        <img src="{{ asset('uploads/multipleBusinessBrand_photos') }}/{{ $brand->brand_logo }}" alt="clients-img-1.png">
                                    </div>

                                @empty
                                  No Colabortion
                                @endforelse



                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ********************************
        ::: 9.0 team
    ================================= -->

{{--        <section id="team-section" class="pt-80">--}}
{{--            <div class="container">--}}
{{--                <div class="section-title">--}}
{{--                    <h2>Our Members</h2>--}}
{{--                </div>--}}
{{--                <div class="swiper team-swiper">--}}
{{--                    <div class="swiper-wrapper">--}}
{{--                        --}}{{-- Single Item --}}

{{--                        @forelse ($teamMembers_info as $teamMember)--}}

{{--                            <div class="swiper-slide">--}}

{{--                                <div class="team-member">--}}
{{--                                    <div class="team-member-img">--}}
{{--                                        <a href="{{ route('team-details-page', $teamMember->id) }}">--}}
{{--                                            <img src="{{ asset('uploads/teamMember_photos') }}/{{ $teamMember->image }}" alt="team-member-img-1.png">--}}
{{--                                        </a>--}}
{{--                                        <div class="team-member-overlay normal-icon">--}}
{{--                                            <a href="{{ $teamMember->fb_one }}"><i class="fa-brands fa-facebook-f one"></i></a>--}}
{{--                                            <a href="{{ $teamMember->ins_two }}"><i class="fa-brands fa-instagram three"></i></a>--}}
{{--                                            <a href="{{ $teamMember->ln_three }}"><i class="fa-brands fa-linkedin-in four"></i></a>--}}
{{--                                            <a href="{{ $teamMember->de_four }}"><i class="fa-brands fa-behance five"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="team-member-info">--}}
{{--                                        <a href="{{ route('team-details-page', $teamMember->id) }}">--}}
{{--                                            <h5 class="team-member-title my-1">{{ Str::limit($teamMember->name , 40) }}</h5>--}}
{{--                                        </a>--}}
{{--                                        <p>--}}
{{--                                            {{ Str::limit($teamMember->expert , 30) }}--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @empty--}}

{{--                          No Team Mate--}}

{{--                        @endforelse--}}



{{--                    </div>--}}
{{--                    <div class="swiper-button-next"></div>--}}
{{--                    <div class="swiper-button-prev"></div>--}}
{{--                    <div class="swiper-pagination"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

        <!-- ********************************
        ::: 10.0 testimonial
    ================================= -->

        <section id="testi-section" class="pt-80">
            <div class="container">
                <div class="section-title">
                    <h2>What Our Clients Say</h2>
                </div>
                <div class="swiper testi-swiper">
                    <div class="swiper-wrapper">

                        @forelse ($testimonials_info as $testimonials)

                        <div class="swiper-slide">
                            <div class="testi-client">
                                <div class="row align-items-center gy-5">
                                    <div class="col-md-5 col-sm-12">
                                        <div class="client-img">
                                            <img src="{{ asset('uploads/testimonial_photos') }}/{{ $testimonials->image }}" alt="testi-img-1.png">
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12">
                                        <div class="client-text">
                                            <h4 class="client-name">{{ Str::limit($testimonials->name , 100) }} - <span>{{ Str::limit($testimonials->title , 100) }}</span></h4>
                                            <h2 class="service-type">{{ Str::limit($testimonials->position , 60) }}</h2>
                                            <p class="serviec-text">
                                                {!! Str::limit($testimonials->description , 300) !!}
                                            </p>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        @empty

                          No Comments

                        @endforelse

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!-- ********************************
        ::: 11.0 contact
    ================================= -->

    @include('frontend.partials.subscribe')
    @include('frontend.partials.contact')

@endsection
