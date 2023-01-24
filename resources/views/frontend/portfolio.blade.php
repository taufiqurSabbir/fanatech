@extends('layouts.frontend_app')
    <!-- veno box image pop up css link here -->
    <link rel="stylesheet" href="{{ asset('dashboard_app') }}/assets/css/venobox.min.css">
    <link rel="stylesheet" href="{{ asset('dashboard_app') }}/assets/css/portfolio.css">
    <!-- portfolio filter css style link here -->
    <link rel="stylesheet" href="{{ asset('dashboard_app') }}/assets/css/protfolio-filter.css">
    <link rel="stylesheet" href="{{ asset('dashboard_app') }}/assets/css/contact.css">
<style>
.form-control {
    color: #dee3e9 !important;
}
</style>

@section('frontend_content')

@section('frontend_title')
{{ ('Fanatech | Portfolio') }}
@endsection

@endsection

    <!-- ********************************
        main wrapper start here
    ================================= -->
    <main>
    <!-- ********************************
        ::: 2.0 about banner
    ================================= -->
        <section id="portfolio-banner">
            <div class="banner-overlay">
                <div class="container">
                    <h1 class="banner-title">Our Portfolio</h2>
                        <div class="normal-btn py-3">
                            <a href="">GET STARTED <i class="fa-solid fa-angle-right"></i></a>
                        </div>
                </div>
            </div>
        </section>

        <!-- ********************************
        ::: 3.0 portfolio css
    ================================= -->
    <section id="portfolio" class="work pt-80">
        <div class="container">
            <div class="section-title">
                <h2>Portfolio</h2>
                <p class="mt-2 text-center">
                    Our Service Graphics & Web Design & Development , Ui/UX , Motion Graphics , Data Entry , Youtube & Digital Marketing , Video Editing , Apps Development , Animation , Others & Stationery Design Etc.
                </p>
            </div>
            <div class="row portfolio-controllers-container">
                <div class="portfolio-controllers wow fadeLeft" data-wow-duration="1s" data-wow-delay=".1s">
                    <button type="button" class="filter-btn active-work" data-filter="all">All</button>
                    <button type="button" class="filter-btn" data-filter=".graphics">Graphics</button>
                    <button type="button" class="filter-btn" data-filter=".web-design">Web Design & Dev</button>
                    <button type="button" class="filter-btn" data-filter=".ui-ux">Ui/UX</button>
                    <button type="button" class="filter-btn" data-filter=".motion-graphics">Motion</button>
                    <button type="button" class="filter-btn" data-filter=".data-entry">Data Entry</button>
                    <button type="button" class="filter-btn" data-filter=".youtube-marketing">Youtube</button>
                    <button type="button" class="filter-btn" data-filter=".digital-marketing">Digital</button>
                    <button type="button" class="filter-btn" data-filter=".video-editing">Video Editing</button>
                    <button type="button" class="filter-btn" data-filter=".apps-development">Apps</button>
                    <button type="button" class="filter-btn" data-filter=".animation">Animation</button>
                    <button type="button" class="filter-btn" data-filter=".others">Others</button>
                </div>
            </div>
        </div>
        <div class="portfolios">

            @foreach ($ourPortfolios_all as $ourPortfolio)
            <div class="col-md-4 col-sm-6 portfolio {{ $ourPortfolio->category_name }}">
                <figure class="portfolio-image">
                    <img src="{{ asset('uploads/ourPortfolio_photos') }}/{{ $ourPortfolio->image }}" alt="" class="img-responsive">
                    <figcaption class="caption text-center">
                        <div class="caption-content">
                            <div class="my-custom-links w-100 h-100" data-vbtype="inline" data-maxwidth="800px"
                                href="#show-one">
                                <h4 class="portfolio-item-title text-center sub-title">{{ $ourPortfolio->title }}</h4>
                                <ul class="portfolio-link">
                                    <div id="show-one" style="display:none;">
                                        <img src="{{ asset('uploads/ourPortfolio_big_photos') }}/{{ $ourPortfolio->big_image }}" alt="">
                                        <a target="_blank" href="{{ $ourPortfolio->link }}">{{ $ourPortfolio->button }}</a>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            @endforeach
        </div>
    </section>

    <!-- ********************************
        ::: 4.0 contact
    ================================= -->
    </section>

    @include('frontend.partials.subscribe')

    @include('frontend.partials.contact')

@section('footer_scripts')
    <script src="{{ asset('dashboard_app') }}/assets/js/portfolio-filter.min.js"></script>
    <script src="{{ asset('dashboard_app') }}/assets/js/venobox.min.js"></script>
@endsection
