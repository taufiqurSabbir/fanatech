@extends('layouts.frontend_app')

<link rel="stylesheet" href="{{ asset('dashboard_app') }}/assets/css/services.css">
<link rel="stylesheet" href="{{ asset('dashboard_app') }}/assets/css/contact.css">
<style>
.form-control {
    color: #dee3e9 !important;
}
</style>

@section('frontend_title')
{{ ('Fanatech | Services') }}
@endsection


@section('frontend_content')

    <!-- ********************************
        main wrapper start here
    ================================= -->
    <main>

        <!-- ********************************
        ::: 2.0 service banner
    ================================= -->

    <section id="service-banner">
        <div class="banner-overlay">
            <div class="container">
                <h1 class="banner-title">Our Services</h2>
                    <div class="normal-btn py-3">
                        <a href="">GET STARTED <i class="fa-solid fa-angle-right"></i></a>
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
                <div class="col-12">
                    <div class="row gy-4 align-items-center">
                        <div class="col-sm-6 col-md-3">
                            <div class="counter-card">
                                <div class="counter-card-img">
                                    <a href="#">
                                        <img src="{{ asset('dashboard_app') }}/assets/images/rating.png" alt="monitor-1.svg">
                                    </a>
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <h2 class="counter-item" data-num="{{isset($about_info->seals) ? $about_info->seals : 0}}" data-speed="10"></h2>
                                    <span class="plus"> +</span>
                                </div>
                                <h4 class="my-lg-3 my-sm-2 my-md-2">Happy Clients</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="counter-card">
                                <div class="counter-card-img">
                                    <a href="#">
                                        <img src="{{ asset('dashboard_app') }}/assets/images/experience.png" alt="link.svg">
                                    </a>
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <h2 class="counter-item" data-num="{{isset($about_info->seals) ? $about_info->seals : 0}}" data-speed="10"></h2>
                                    <span class="plus"> y+</span>
                                </div>
                                <h4 class="my-lg-3 my-sm-2 my-md-2">Experience</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="counter-card">
                                <div class="counter-card-img">
                                    <a href="#">
                                        <img src="{{ asset('dashboard_app') }}/assets/images/completed-task.png" alt="tech.svg">
                                    </a>
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <h2 class="counter-item" data-num="{{isset($about_info->seals) ? $about_info->seals : 0}}" data-speed="10"></h2>
                                    <span class="plus"> +</span>
                                </div>
                                <h4 class="my-lg-3 my-sm-2 my-md-2">Project Complete</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="counter-card">
                                <div class="counter-card-img">
                                    <a href="#">
                                        <img src="{{ asset('dashboard_app') }}/assets/images/sales.png" alt="link.svg">
                                    </a>
                                </div>
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
                <h2>Our Services</h2>
                <p class="mt-2">
                    We provide you world-class service for you and your business with your satisfaction.
                </p>
            </div>
            <div class="swiper quality-swiper">
                <div class="swiper-wrapper">

                    @forelse ($service_info as $service)
                            {{-- Single One --}}
                            <div class="swiper-slide">
                                <div class="quality-item">
                                    <div class="quality-icon">
                                        <img src="{{ asset('uploads/icon_photos') }}/{{ $service->icon }}" alt="" style="width: 100px; height: 100px;">
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

    <section id="service-deliver" class="pt-80">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose Fanatech</h2>
                <p class="mt-2">
                    Fanatech is a strong team for digital service provide. We are a world-wide digital IT service provider agency for develop your business.
                </p>
            </div>
            <div class="swiper deliver-swiper">
                <div class="swiper-wrapper">
                    @forelse ($whychoosefanatech as $whychoosefana)
                    <div class="swiper-slide">
                        <div class="deliver-card">
                            <div class="deliver-card-img">
                                <a href="#">
                                    <img src="{{ asset('uploads/whychoosefexdvers_photos') }}/{{ $whychoosefana->icon }}" alt="monitor-1.svg">
                                </a>
                            </div>
                            <div class="deliver-card-body">
                                <h4 class="deliver-card-title">{{ Str::limit($whychoosefana->title , 120) }}</h4>
                                <p class="deliver-card-text">
                                    {{ Str::limit($whychoosefana->description , 400) }}
                                </p>
                            </div>
                        </div>
                    </div>

                    @empty
                    @endforelse



                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- ********************************
    ::: 9.0 testimonial
================================= -->
@include('frontend.partials.subscribe')


@include('frontend.partials.contact')

@endsection
