<!DOCTYPE html>
<html lang="en">

<head>
    <!-- website title here -->
    <title>@yield('frontend_title' , 'Fanatech')</title>
    <!-- website favicon link here -->
    <link rel="shortcut icon" href="{{ asset('dashboard_app') }}/assets/images/favicon-1.png" type="image/favicon-1.png">
    <!-- all meta tags Contact Us here -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome kit link here -->
    <script src="https://kit.fontawesome.com/6e43450b46.js" crossorigin="anonymous"></script>
    <!-- swiper min css link here -->
    <link rel="stylesheet" href="{{ asset('dashboard_app') }}/assets/css/swiper-bundle.min.css">
    <!-- bootstrap min.css link here -->
    <link rel="stylesheet" href="{{ asset('dashboard_app') }}/assets/css/bootstrap.min.css">
    <!-- custom css style link here -->
    <link rel="stylesheet" href="{{ asset('dashboard_app') }}/assets/css/style.css">
    <!-- responsive css link here -->
    <link rel="stylesheet" href="{{ asset('dashboard_app') }}/assets/css/responsive.css">

</head>

<body>
    <!-- ********************************
        ::: 3.0 header
    ================================= -->
    <header>
        <nav id="navbar" class="navbar navbar-expand-lg py-2 fixed-top">
            <div class="container">
                <a class="navbar-brand m-0 p-0" href="{{ url('/') }}">
                    <img src="{{ asset('dashboard_app') }}/assets/images/logo.png" alt="logo.png">
                </a>
                <button class="navbar-toggler m-0 p-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon d-flex align-items-center">
                        <i class="fa-solid fa-bars-staggered"></i>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('services.view-page') }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about.view-page') }}">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact.view-page') }}">Contact Us</a>
                        </li>
                        <li class="nav-item d-sm-none d-lg-flex align-items-center">
                            <div class="normal-btn">
                                <a href="{{ route('contact.view-page') }}">Free Quote <i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('frontend_content')

</main>

    <!-- ********************************
        ::: 12.0 footer
    ================================= -->

    <footer id="footer">
        <div class="container">
            <p class="copy-right">
                Copyright © 2023 Fanatech. All Rights Reserved. Design By <span class="right-name">Fanatech</span>
            </p>
        </div>
    </footer>

    <!-- jquery link here -->
    <script src="{{ asset('dashboard_app') }}/assets/js/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('dashboard_app') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('dashboard_app') }}/assets/js/swiper-bundle.min.js"></script>
    <script src="{{ asset('dashboard_app') }}/assets/js/script.js"></script>

    @yield('footer_scripts')

    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "110283061528952");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v14.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

</body>

</html>
