@extends('layouts.dashboard_app')
@section('page_title')
    {{ ('Fexdvers | About Page Edit') }}
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
        <span class="breadcrumb-item active">Edit About Page</span>
      </nav>
    </div><!-- br-pageheader -->
    
    <div class="br-pagebody">
      <!-- start you own content here -->

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                   <h2>Edit About Page</h2>
                </div>
                <div class="card-body">

                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('aboutPage.index') }}" class="btn btn-info">About Page Add</a></li>
                    </ol>
                  </nav>

                 <form method="post" action = "{{ route('aboutPage.update' , $aboutPage_info->id) }}" enctype="multipart/form-data">
                   @csrf
                   @method('PATCH')

                   
                   <div class="form-group">
                     <label>About Page Title</label>
                     <input type="text" class="form-control" placeholder="About Page Title" name = "title" value = "{{ $aboutPage_info->title }}">
                     @error ('title')
                       <span class = "text-danger">{{ $message }}</span>
                     @enderror
                   </div>

                   <div class="form-group">
                     <label>About Page Photo</label>
                     <input type="file" class="form-control" name="image">
                      <img src="{{ asset('uploads/aboutPage_photos') }}/{{ $aboutPage_info->image }}" alt="" width="100" height="80" class = "mt-3"/>
                   </div>

                  


                   <button type="submit" class="btn btn-primary">Update About Page</button>
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
