<section id="contact-section" class="pt-80">
    <div class="container">
        <div class="row justify-content-between gy-4 gy-md-0">
            <div class="col-md-5 col-sm-12">
                <div class="contact-info">
                    <div class="section-title">
                        <h2 class="left-title">Get In Touch</h2>
                    </div>
                    <div class="contact-content">
                        <p class="contact-text">
                            We are a World-Wide Digital IT Service Provider Agency. We provide you world-class service for you and your business.
                            Let's start an amazing project.
                        </p>
                        <div class="contact-address d-flex align-items-center">
                            <i class="fa-solid fa-envelope"></i>
                            <a href="mailto:support@fanatech.co" style="color: #8c8c8c !important;">support@fanatech.co</p>
                        </div>
                        <div class="contact-address d-flex align-items-center">
                            <i class="phone fa-solid fa-phone"></i>
                            <a href="tel:+8801792945445" style="color: #8c8c8c !important;">+8801792945445</a>
                        </div>

                        <div class="normal-icon d-flex align-items-center">
                            <a href="https://www.facebook.com/fexdvers" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/fexdvers" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/fexdvers" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="https://www.behance.net/fexdvers" target="_blank"><i class="fa-brands fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="contact-form">
                    <div class="section-title">
                        <h2 class="left-title">Have Any Question? Drop A Lile.</h2>
                    </div>

                    <form class="row g-3" action="{{ route('contactInfo.store') }}" method="POST">
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
                            <input type="text" name="name" class="form-control" id="input-field"
                                placeholder="Your Name">

                                @error ('name')
                                   <span class = "text-danger">{{ $message }}</span>
                                @enderror
                        </div>

                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control" id="input-field"
                                placeholder="Your E-mail">
                                @error ('email')
                                    <span class = "text-danger">{{ $message }}</span>
                                @enderror
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="country" class="form-control" id="input-field"
                                placeholder="Your Country">
                                @error ('country')
                                    <span class = "text-danger">{{ $message }}</span>
                                @enderror
                        </div>
                        <div class="col-md-6">
                            <input type="number" name="whatsapp_number" class="form-control" id="input-field"
                                placeholder="WhatsApp/Phone">
                                @error ('whatsapp_number')
                                <span class = "text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <input type="text" name="services" class="form-control" id="input-field"
                                placeholder="Your Service(s)">
                                @error ('services')
                                <span class = "text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <textarea name="message" class="form-control" placeholder="Your Message"
                                style="height: 60px"></textarea>
                                @error ('message')
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
