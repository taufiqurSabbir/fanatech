@extends('layouts.dashboard_app')

@section('page_title')
{{ ('Fexdvers | About Page Add') }}
@endsection

@section('aboutPage')
active
@endsection

@section('dashboard_content')


  <!-- ########## START: MAIN PANEL ########## -->
  <div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <span class="breadcrumb-item active">Add About Page</span>
      </nav>
    </div><!-- br-pageheader -->
    
    <div class="br-pagebody">
      <!-- start you own content here -->

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
              <h1 class = "text-center my-3">About Page</h1>

              <div class="btn-group mb-2" role="group" aria-label="Basic example">
                <a href = "{{ route('aboutPage.aboutPageViewAll') }}" type="button" class="btn btn-primary">All About Page</a>
              </div>
          </div>
        </div>

        
       <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                   <h2>About Page Add</h2>
                </div>
                <div class="card-body">

                  <form method="post" action = "{{ route('aboutPage.store') }}" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group">
                      <label>About Page Title</label>
                      <input type="text" class="form-control" placeholder="About Page Title" name = "title" value = "{{ old('title') }}">
                      @error ('title')
                        <span class = "text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                  
                    <div class="form-group">
                      <label>About Page Photo</label>
                      <input type="file" class="form-control" name="image">
                      @error ('image')
                        <span class = "text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Add About Page</button>
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
