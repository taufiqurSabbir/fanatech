@extends('layouts.dashboard_app')
@section('page_title')
  {{ (' Fexdvers | Profile ') }}
  {{-- {{ env('DB_DATABASE') }} | Profile --}}
@endsection
@section('profile')
 active
@endsection


@section('dashboard_content')
  <!-- ########## START: MAIN PANEL ########## -->
  <div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="{{ url('/') }}">Dashboard</a>
        <span class="breadcrumb-item active">Profile Edit Page</span>
      </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
      <h4 class="tx-gray-800 mg-b-5">Profile Edit : {{ Auth::user()->name }}</h4>
      <p class="mg-b-0">This is a Dynamic Place</p>
    </div>

    <div class="br-pagebody">
    <!-- start you own content here -->

    <div class="container-fluid">
         <div class="row">
           <div class="col-md-4">
             <div class="card">
                 <div class="card-header">
                    <h2>Name Change</h2>
                 </div>
                 <div class="card-body">

                   <form method="post" action = "{{ route('profile.nameupdate') }}">
                     @csrf
                     @if(session()->has('name_change'))
                       <div class="alert alert-success alert-dismissible fade show" role="alert">
                          {{ session()->get('name_change') }}
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>
                     @endif
                     @if(session()->has('days_status'))
                       <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          {{ session()->get('days_status') }}
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>
                     @endif

                     <div class="form-group">
                       <label>Name Change</label>
                       <input type="text" class="form-control" placeholder="Name Change" name = "name" value="{{ Auth::user()->name }}">
                       @error ('name')
                         <span class = "text-danger">{{ $message }}</span>
                       @enderror
                     </div>
                     <button type="submit" class="btn btn-primary">Name Change</button>
                   </form>

                 </div>
            </div>
           </div>

           <div class="col-md-4">
             <div class="card">
                 <div class="card-header">
                    <h2>Password Change</h2>
                 </div>
                 <div class="card-body">

                   <form method="post" action = "{{ route('password.edit') }}">
                     @csrf
                     @if(session()->has('password_status'))
                       <div class="alert alert-success alert-dismissible fade show" role="alert">
                          {{ session()->get('password_status') }}
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>
                     @endif
                     @if(session()->has('pass_milenai_status'))
                       <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          {{ session()->get('pass_milenai_status') }}
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>
                     @endif
                     @if(session()->has('old_pass_status'))
                       <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          {{ session()->get('old_pass_status') }}
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>
                     @endif

                     <div class="form-group">
                       <label>Current Password</label>
                       <input type="password" class="form-control" placeholder="Old Password" name = "old_password" id="button_one">
                       <div class="form-group my-2">
                          <div class="form-check">
                            <input class="form-check-input ml-1" type="checkbox" value="" id="invalidCheck1" onclick="one_button()">
                            <label class="form-check-label text-primary ml-2" for="invalidCheck1">
                              Show Current Password
                            </label>
                          </div>
                        </div>

                       @error ('old_password')
                         <span class = "text-danger">{{ $message }}</span>
                       @enderror
                     </div>

                     <div class="form-group">
                       <label>New Password</label>
                       <input type="password" class="form-control" placeholder="New Password" name = "password" id="button_two">
                       <div class="form-group my-2">
                          <div class="form-check">
                            <input class="form-check-input ml-1" type="checkbox" value="" id="invalidCheck2" onclick="two_button()">
                            <label class="form-check-label text-primary ml-2" for="invalidCheck2">
                              Show New Password
                            </label>
                          </div>
                        </div>
                       @error ('password')
                         <span class = "text-danger">{{ $message }}</span>
                       @enderror
                     </div>

                     <div class="form-group">
                       <label>Confirm Password</label>
                       <input type="password" class="form-control" placeholder="Confirm Password" name = "password_confirmation" id="button_three">
                       <div class="form-group my-2">
                          <div class="form-check">
                            <input class="form-check-input ml-1" type="checkbox" value="" id="invalidCheck3" onclick="three_button()">
                            <label class="form-check-label text-primary ml-2" for="invalidCheck3">
                              Show Confirm Password
                            </label>
                          </div>
                        </div>
                       @error ('password_confirmation')
                         <span class = "text-danger">{{ $message }}</span>
                       @enderror
                     </div>
                     <button type="submit" class="btn btn-primary">Password Change</button>
                   </form>

                 </div>
            </div>
           </div>

           <div class="col-md-4">
             <div class="card">
                 <div class="card-header">
                    <h2>Profile Image Change</h2>
                 </div>
                 <div class="card-body">

                   <form method="post" action = "{{ route('profile.image') }}" enctype="multipart/form-data">
                     @csrf

                     @if(session()->has('photo_status'))
                       <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          {{ session()->get('photo_status') }}
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>
                     @endif

                     @if(session()->has('photo_success'))
                       <div class="alert alert-success alert-dismissible fade show" role="alert">
                          {{ session()->get('photo_success') }}
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>
                     @endif

                     <div class="form-group">
                       <label>Profile Image</label>
                       <input type="file" class="form-control" name = "profile_image">
                     </div>

                     <button type="submit" class="btn btn-primary">Profile Upload</button>
                   </form>

                 </div>
            </div>
           </div>
         </div>
       </div>

    </div><!-- br-pagebody -->

  </div><!-- br-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->


@endsection
<script>
function one_button() {
  var x = document.getElementById("button_one");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<script>
function two_button() {
  var x = document.getElementById("button_two");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<script>
function three_button() {
  var x = document.getElementById("button_three");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
