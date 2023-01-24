@extends('layouts.frontend_app')

<link rel="stylesheet" href="{{ asset('dashboard_app') }}/assets/css/contact.css">
<style>
.form-control {
    color: #dee3e9 !important;
}
</style>


@section('frontend_title')
{{ ('Fanatech | Contact Us') }}
@endsection

@section('frontend_content')

    <!-- ********************************
        main wrapper start here
    ================================= -->
    <main>

     <!-- ********************************
        ::: 2.0 contact banner
    ================================= -->
    <section id="contact-banner">
        <div class="banner-overlay">
            <div class="container">
                <h1 class="banner-title">Contact With Us</h2>
                    <div class="normal-btn py-3">
                        <a href="">GET STARTED <i class="fa-solid fa-angle-right"></i></a>
                    </div>
            </div>
        </div>
    </section>

    <!-- ********************************
    ::: 3.0 contact us
    ================================= -->
    <section id="contact-us" class="pt-80">
        <div class="container">
            <div class="row justify-content-between gy-5 gy-md-0">
                <div class="col-md-5 col-sm-12">
                    <div class="section-title">
                        <h2 class="text-start" class="">Contact Us</h2>
                    </div>
                    <div class="contact-info">
                        <div class="contact-address mt-0">
                            <i class="fa-solid fa-location-dot"></i>
                            <h5>Address</h5>
                            <address>
                             Dhanmondi 6/A,Dhanmondi,Dhaka-1209
                            </address>
                        </div>
                        <div class="contact-address">
                            <i class="fa-solid fa-phone"></i>
                            <h5>Call Now</h5>
                            <address>
                                <a href="tel:+8801792945445" style="color: #8c8c8c;">+8801792945445</a> <br>
                            </address>
                        </div>
                        <div class="contact-address">
                            <i class="fa-solid fa-envelope"></i>
                            <h5>E-mail</h5>
                            <address>
                                <a href="mailto:support@fanatech.co" class="contact-text" style="color: #8c8c8c !important;">support@fanatech.co</a>
                            </address>
                        </div>
                        <div class="contact-address">
                            <i class="fa-solid fa-earth-asia"></i>
                            <h5>Website</h5>
                            <address>
                                <a href="https://www.fexdvers.com/" target="_blank" style="color: #8c8c8c !important;">www.fanatech.co</a>
                            </address>

                            <h3></h3>


                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="contact-form">
                        <div class="section-title">
                            <h2>Order Now</h2>
                            <p class="mt-2">
                                We're always happy to discuss your project with you and put together a free proposal, just fill out the form below or give us a call to get start.
                            </p>
                        </div>
                        <form class="row gy-5" action="{{ route('contact.store') }}" method="POST">
                            @csrf

                            @if(session()->has('success_status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session()->get('success_status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif

                            <div class="col-md-6">
                                <input type="text" name="buyer_name" class="form-control" id="input-field"
                                    placeholder="Your Name">
                                    @error ('buyer_name')
                                    <span class = "text-danger">{{ $message }}</span>
                                 @enderror

                            </div>
                            <div class="col-md-6">
                                <input type="email" name="buyer_email" class="form-control" id="input-field"
                                    placeholder="Your E-mail">
                                    @error ('buyer_email')
                                    <span class = "text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="col-md-6">
                                <input type="text" name="buyer_country" class="form-control" id="input-field"
                                    placeholder="Your Country">
                                    @error ('buyer_country')
                                        <span class = "text-danger">{{ $message }}</span>
                                    @enderror

                            </div>
                            <div class="col-md-6">
                                <input type="number" name="buyer_whatsapp_number" class="form-control" id="input-field"
                                    placeholder="WhatsApp/Phone">
                                    @error ('buyer_whatsapp_number')
                                        <span class = "text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="buyer_services" class="form-control" id="input-field"
                                    placeholder="Your Service(s)">
                                    @error ('buyer_services')
                                        <span class = "text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="buyer_budget" class="form-control" id="input-field"
                                    placeholder="Your Budget">
                                    @error ('buyer_budget')
                                        <span class = "text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="col-md-12">
                                <textarea name="buyer_message" class="form-control" placeholder="Your Message"
                                    style="height: 60px"></textarea>
                                    @error ('buyer_message')
                                        <span class = "text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        I Agree To The Terms & Conditions Of Business Name
                                    </label>
                                </div>
                            </div>
                            <div class="d-grid mx-auto col-12">
                                <button type="submit" value="submit" class="submit-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.partials.subscribe')

    @include('frontend.partials.contact')

    <!-- ********************************
    ::: 5.0 contact
    ================================= -->
@endsection
