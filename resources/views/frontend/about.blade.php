@extends('layouts.frontend_app')

<link rel="stylesheet" href="{{ asset('dashboard_app') }}/assets/css/about.css">
<link rel="stylesheet" href="{{ asset('dashboard_app') }}/assets/css/contact.css">
<style>
.form-control {
    color: #dee3e9 !important;
}
</style>



@section('frontend_title')
{{ ('Fanatech | About Us') }}
@endsection


@section('frontend_content')
    <!-- ********************************
        main wrapper start here
    ================================= -->
    <main>

         <!-- ********************************
        ::: 2.0 about banner
    ================================= -->
    <section id="about-banner">
        <div class="banner-overlay">
            <div class="container">
                <h1 class="banner-title">About Us</h2>
                    <div class="normal-btn py-3">
                        <a href="">GET STARTED <i class="fa-solid fa-angle-right"></i></a>
                    </div>
            </div>
        </div>
    </section>

    <!-- ********************************
    ::: 3.0 about slider
    ================================= -->
    <section id="about-slider" class="pt-80">
        <div class="container">
            <div class="swiper about-swiper">
                <div class="swiper-wrapper">

                    @forelse ($about_info as $about)
                        <div class="swiper-slide">
                            <img src="{{ asset('uploads/aboutPage_photos') }}/{{ $about->image }}" alt="about-slider-img-1.png">
                        </div>
                    @empty

                    No Data Available

                    @endforelse



                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- ********************************
    ::: 4.0 about us
    ================================= -->
    <section id="about-us" class="pt-80">
        <div class="container">
            <div class="row justify-content-center gy-sm-5 gy-0">
                <div class="col-md-12 col-sm-12">
                    <div class="about-text">
                        <div class="section-title">
                            <h2>About Fanatech</h2>
                        </div>
                        <p class="about-dtls text-center">
                         @isset($about_description->description)
                            {!! $about_description->description  !!}
                         @endisset
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.partials.subscribe')

    <!-- ********************************
    ::: 6.0 contact
    ================================= -->
    @include('frontend.partials.contact')

@endsection
