    <!-- ********************************
    ::: 4.0 contact newsletter
    ================================= -->
    <section id="about-newsletter" class="pt-80 pb-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-9">
                    <h2 class="newsletter-title text-center">Subscribe Our Newsletter</h2>
                    <p class="py-3 text-center">
                        Join our subscribers list to get the latest news, updates and special offers delivered directly in your inbox.
                    </p>
                </div>

                
                @if(session()->has('success_status_store'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('success_status_store') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <div class="col-sm-12 col-md-10 col-lg-7">
                    
                    <form action="{{ route('subscribeMail.store') }}" method="POST">
                    <div class="newsletter-field mt-3">
                            @csrf
                            <input type="email" name="subeMail" id="email" placeholder="Enter Your E-mail">
                            <button class="newsletter-btn" type="submit" value="submit">Subscribe</button>
                            

                        </div>

                        @error ('subeMail')
                                <span class = "text-danger">{{ $message }}</span>
                        @enderror
                    </form>

                        
                       
                </div>
            </div>
        </div>
    </section>