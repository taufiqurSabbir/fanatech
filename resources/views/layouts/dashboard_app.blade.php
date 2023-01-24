<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="https://www.fexdvers.com/dashboard_app/assets/images/favicon-1.png" type="image/favicon-1.png">
  <!-- Twitter -->
  <meta name="twitter:site" content="@themepixels">
  <meta name="twitter:creator" content="@themepixels">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Bracket">
  <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="twitter:image" content="http://themepixels.me/bracket/img/bracket-social.png">
  <!-- Facebook -->
  <meta property="og:url" content="http://themepixels.me/bracket">
  <meta property="og:title" content="Bracket">
  <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png">
  <meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="600">

  <!-- Meta -->
  <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="author" content="Fexdvers">

  <!-- Page Title -->
  <title>@yield('page_title' , 'Dashboard | Company')</title>

  <!-- vendor css -->
  <link href="{{ asset('backend_asset') }}/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="{{ asset('backend_asset') }}/lib/Ionicons/css/ionicons.css" rel="stylesheet">
  <link href="{{ asset('backend_asset') }}/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
  <link href="{{ asset('backend_asset') }}/lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
  <link href="{{ asset('backend_asset') }}/lib/rickshaw/rickshaw.min.css" rel="stylesheet">
  <link href="{{ asset('backend_asset') }}/lib/chartist/chartist.css" rel="stylesheet">

  <link href="{{ asset('backend_asset') }}/lib/datatables/jquery.dataTables.css" rel="stylesheet">
  <link href="{{ asset('backend_asset') }}/lib/select2/css/select2.min.css" rel="stylesheet">

  <!-- Bracket CSS -->
  <link rel="stylesheet" href="{{ asset('backend_asset') }}/css/bracket.css">
</head>
<body>

  <!-- ########## START: LEFT PANEL ########## -->
  <div class="br-logo"><a href="{{url('/home')}}"><span>[</span>Fanatech<span>]</span></a></div>
  <div class="br-sideleft overflow-y-auto">
    <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
    <div class="br-sideleft-menu">

      <a href="{{ url('/') }}" class="br-menu-link @yield('frontend')" target="_blank">
        <div class="br-menu-item">
          <i class="fa fa-firefox tx-18"></i>


          <span class="menu-item-label">Company</span>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->

      <a href="{{ route('home') }}" class="br-menu-link @yield('dashboard')">
        <div class="br-menu-item">
          <i class="fa fa-home tx-18"></i>
          <span class="menu-item-label">Dashboard</span>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->


      <a href="#" class="br-menu-link @yield('banner')">
        <div class="br-menu-item">
          <i class="fa fa-server tx-18"></i>
          <span class="menu-item-label">Banner</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->
      <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ route('banner.index') }}" class="nav-link">Banner Add</a></li>
        <li class="nav-item"><a href="{{ route('banner.bannerViewAll') }}" class="nav-link">Banner View</a></li>
      </ul>


      <a href="#" class="br-menu-link @yield('about')">
        <div class="br-menu-item">
          <i class="fa fa-user tx-18"></i>
          <span class="menu-item-label">About</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->
      <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ route('about.index') }}" class="nav-link">About Add</a></li>
        <li class="nav-item"><a href="{{ route('about.aboutViewAll') }}" class="nav-link">About View</a></li>
      </ul>

      <a href="#" class="br-menu-link @yield('aboutPage')">
        <div class="br-menu-item">
          <i class="fa fa-sliders tx-18"></i>
          <span class="menu-item-label">About Page Banner</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->
      <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ route('aboutPage.index') }}" class="nav-link">About Page Add</a></li>
        <li class="nav-item"><a href="{{ route('aboutPage.aboutPageViewAll') }}" class="nav-link">About Page View</a></li>
      </ul>

      <a href="#" class="br-menu-link @yield('service')">
        <div class="br-menu-item">
          <i class="fa fa-scribd tx-18"></i>
          <span class="menu-item-label">Services</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->
      <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ route('service.index') }}" class="nav-link">Services Add</a></li>
        <li class="nav-item"><a href="{{ route('service.serviceViewAll') }}" class="nav-link">Services View</a></li>

      </ul>

      <a href="#" class="br-menu-link @yield('whychoosefexdvers')">
        <div class="br-menu-item">
          <i class="fa fa-scribd tx-18"></i>
          <span class="menu-item-label">Why Choose</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->
      <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ route('whychoosefexdver.index') }}" class="nav-link">Why choose fex</a></li>
        <li class="nav-item"><a href="{{ route('whychoosefexdver.view') }}" class="nav-link">Choose View</a></li>
      </ul>


      <a href="#" class="br-menu-link @yield('project')">
        <div class="br-menu-item">
          <i class="fa fa-product-hunt tx-18"></i>
          <span class="menu-item-label">Project</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->
      <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ route('portfolio.index') }}" class="nav-link">Project Add</a></li>
        <li class="nav-item"><a href="{{ route('portfolio.portfolioViewAll') }}" class="nav-link">Project View</a></li>
      </ul>

      <a href="#" class="br-menu-link @yield('portfolio')">
        <div class="br-menu-item">
          <i class="fa fa-picture-o tx-18"></i>
          <span class="menu-item-label">Our Portfolio</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->
      <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ route('ourPortfolio.index') }}" class="nav-link">Our Portfolio Add</a></li>
        <li class="nav-item"><a href="{{ route('ourPortfolio.ourPortfolioViewAll') }}" class="nav-link">Our Portfolio View</a></li>
      </ul>

      <a href="{{ route('multipleBusinessBrand.index') }}" class="br-menu-link @yield('mbbrand')">
        <div class="br-menu-item">
          <i class="fa fa-first-order tx-18"></i>
          <span class="menu-item-label">M. Bnss. Brand</span>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->

      <a href="#" class="br-menu-link @yield('team')">
        <div class="br-menu-item">
          <i class="fa fa-users tx-18"></i>
          <span class="menu-item-label">Team Member</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->
      <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ route('teamMember.index') }}" class="nav-link">Team Member Add</a></li>
        <li class="nav-item"><a href="{{ route('teamMember.teamMemberViewAll') }}" class="nav-link">Team Member All</a></li>
      </ul>

      <a href="#" class="br-menu-link @yield('testimonial')">
        <div class="br-menu-item">
          <i class="fa fa-star tx-18"></i>
          <span class="menu-item-label">Testimonial</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->
      <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ route('testimonial.index') }}" class="nav-link">Testimonial Add</a></li>
        <li class="nav-item"><a href="{{ route('testimonial.testimonialViewAll') }}" class="nav-link">Testimonial All</a></li>
      </ul>

      <a href="{{ route('contactInfo.index') }}" class="br-menu-link @yield('contactcustomer')">
        <div class="br-menu-item">
          <i class="fa fa-user-plus tx-18"></i>
          <span class="menu-item-label">Contact (Customer)</span>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->

      <a href="{{ route('contact.index') }}" class="br-menu-link @yield('contactbuyer')">
        <div class="br-menu-item">
          <i class="fa fa-creative-commons tx-18"></i>
          <span class="menu-item-label">Contact (Buyer)</span>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->

      <a href="{{ route('subscribeMail.index') }}" class="br-menu-link @yield('subscribe')">
        <div class="br-menu-item">
          <i class="fa fa-creative-commons tx-18"></i>
          <span class="menu-item-label">Subscribe Mail</span>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->


      <a href="{{ route('profile.index') }}" class="br-menu-link @yield('profile')">
        <div class="br-menu-item">
          <i class="icon ion-ios-person-outline"></i>
          <span class="menu-item-label">Profile Edit</span>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->

      <a href="{{ route('register') }}" class="br-menu-link @yield('create-admin')" target="_blank">
        <div class="br-menu-item">
          <i class="fa fa-plus-square tx-18"></i>
          <span class="menu-item-label">Create Admin</span>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->



      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" class="br-menu-link">
        <div class="br-menu-item">
          <i class="icon ion-power tx-18"></i>
          <span class="menu-item-label">Sign Out</span>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->
      <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
      </form>

  </div><!-- br-sideleft-menu -->
  </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="br-header">
      <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="input-group hidden-xs-down wd-170 transition">
          <input id="searchbox" type="text" class="form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
          </span>
        </div><!-- input-group -->
      </div><!-- br-header-left -->
      <div class="br-header-right">
        <nav class="nav">


          <div class="dropdown">
            <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
              <i class="icon ion-ios-bell-outline tx-24"></i>
              <!-- start: if statement -->

               <span class="square-8 bg-danger pos-absolute t-15 r-5 rounded-circle"></span>

              <!-- end: if statement -->
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
              <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
                <label class="tx-12 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">
                  @php
                     use App\Models\Contact;
                     $data = Contact::where('status' , 1)->first();
                  @endphp

                  @isset($data)
                    @if ($data->status == 1)
                      <a href="{{ route('contact.index') }}">New Notifications </a>
                  @endisset
                    @else
                      <a href="{{ route('contact.index') }}">Old Notifications </a>
                    @endif

                </label>
              </div>

            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->


          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              {{-- <span class="logged-name hidden-md-down">{{ Auth::user()->name }}</span>
              <img src="{{ asset('uploads/profile_photos') }}/{{ Auth::user()->profile_image }}" class="wd-32 rounded-circle" alt=""> --}}
              <span class="square-10 bg-success"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                {{-- <li><a href="{{ route('profile.index') }}"><i class="icon ion-ios-person"></i> Edit Profile</a></li> --}}
                <li><a href=""><i class="icon ion-ios-gear"></i> Settings</a></li>
                <li>
                  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i class="icon ion-power"></i> Sign Out</a></li>
                  <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
      </div><!-- br-header-right -->
    </div><!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->


  @yield('dashboard_content')



<script src="{{ asset('backend_asset') }}/lib/jquery/jquery.js"></script>
<script src="{{ asset('backend_asset') }}/lib/popper.js/popper.js"></script>
<script src="{{ asset('backend_asset') }}/lib/bootstrap/bootstrap.js"></script>
<script src="{{ asset('backend_asset') }}/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<script src="{{ asset('backend_asset') }}/lib/moment/moment.js"></script>
<script src="{{ asset('backend_asset') }}/lib/jquery-ui/jquery-ui.js"></script>
<script src="{{ asset('backend_asset') }}/lib/jquery-switchbutton/jquery.switchButton.js"></script>
<script src="{{ asset('backend_asset') }}/lib/peity/jquery.peity.js"></script>
<script src="{{ asset('backend_asset') }}/lib/chartist/chartist.js"></script>
<script src="{{ asset('backend_asset') }}/lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
<script src="{{ asset('backend_asset') }}/lib/d3/d3.js"></script>
<script src="{{ asset('backend_asset') }}/lib/rickshaw/rickshaw.min.js"></script>

<script src="{{ asset('backend_asset') }}/js/bracket.js"></script>
<script src="{{ asset('backend_asset') }}/js/ResizeSensor.js"></script>
<script src="{{ asset('backend_asset') }}/js/dashboard.js"></script>

<script src="{{ asset('backend_asset') }}/lib/datatables/jquery.dataTables.js"></script>
<script src="{{ asset('backend_asset') }}/lib/datatables-responsive/dataTables.responsive.js"></script>
<script src="{{ asset('backend_asset') }}/lib/select2/js/select2.min.js"></script>

@yield('footer_scripts')

<script>
$(function(){
  'use strict'
  // FOR DEMO ONLY
  // menu collapsed by default during first page load or refresh with screen
  // having a size between 992px and 1299px. This is intended on this page only
  // for better viewing of widgets demo.
  $(window).resize(function(){
    minimizeMenu();
  });
  minimizeMenu();
  function minimizeMenu() {
    if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
      // show only the icons and hide left menu label by default
      $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
      $('body').addClass('collapsed-menu');
      $('.show-sub + .br-menu-sub').slideUp();
    } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
      $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
      $('body').removeClass('collapsed-menu');
      $('.show-sub + .br-menu-sub').slideDown();
    }
  }
});
</script>


<script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>

<script>
  ClassicEditor
      .create( document.querySelector( '#editor' ) )
      .catch( error => {
          console.error( error );
      } );
</script>


</body>
</html>
