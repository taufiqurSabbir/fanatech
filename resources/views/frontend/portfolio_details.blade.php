@extends('layouts.frontend_app')

<link rel="stylesheet" href="{{ asset('dashboard_app') }}/assets/css/project_details.css">
<link rel="stylesheet" href="{{ asset('dashboard_app') }}/assets/css/contact.css">
<style>
.form-control {
    color: #dee3e9 !important;
}
</style>

@section('frontend_title')
{{ ('Fanatech | Portfolio Details') }}
@endsection



@section('frontend_content')

    <!-- ********************************
        main wrapper start here
    ================================= -->
    <main>

          <!-- ********************************
        ::: 2.0 about banner
    ================================= -->
    <section id="details-banner">
        <div class="banner-overlay">
            <div class="container">
                <h1 class="banner-title">Project Details</h2>
                    <div class="normal-btn py-3">
                        <a href="">GET STARTED <i class="fa-solid fa-angle-right"></i></a>
                    </div>
            </div>
        </div>
    </section>


    <!-- ********************************
    ::: 3.0 details images css
    ================================= -->
    <section id="details-images" class="pt-80">
        <div class="container">
            <div class="section-title">
                <h2>{{ $portfolio_details->title }}</h2>
            </div>
            <div class="row gy-5">

                <div class="col-12">
                    @if($portfolio_details->image)
                        <div class="img-box mb-5 img-responsive"><img src="{{ asset('uploads/portfolio_photos') }}/{{ $portfolio_details->image }}" alt="big-img"></div>
                    @endif
                    @if($portfolio_details->image_one)
                        <div class="img-box mb-5 img-responsive"><img src="{{ asset('uploads/portfolio_photos') }}/{{ $portfolio_details->image_one }}" alt="big-img"></div>
                    @endif
                    @if($portfolio_details->image_two)
                        <div class="img-box mb-5 img-responsive"><img src="{{ asset('uploads/portfolio_photos') }}/{{ $portfolio_details->image_two }}" alt="big-img"></div>
                    @endif
                    @if($portfolio_details->image_three)
                        <div class="img-box mb-5 img-responsive"><img src="{{ asset('uploads/portfolio_photos') }}/{{ $portfolio_details->image_three }}" alt="big-img"></div>
                    @endif
                </div>

                <div class="col-12">
                    <div class="project-info">
                        <p class="project-text mt-0">
                            {{ $portfolio_details->short_details }}
                        </p>
                        <p class="project-text">
                            {!! Str::limit($portfolio_details->long_details) !!}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.partials.subscribe')

    @include('frontend.partials.contact')

@endsection
