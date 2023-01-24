@extends('layouts.dashboard_app')

@section('page_title')
{{ ('Fexdvers | Banner Add') }}
@endsection

@section('banner')
active
@endsection

@section('dashboard_content')


  <!-- ########## START: MAIN PANEL ########## -->
  <div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <span class="breadcrumb-item active">Add Banner</span>
      </nav>
    </div><!-- br-pageheader -->
    
    <div class="br-pagebody">
      <!-- start you own content here -->

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
              <h1 class = "text-center my-3">Banner Add Page</h1>

              <div class="btn-group mb-2" role="group" aria-label="Basic example">
                <a href = "{{ route('banner.bannerViewAll') }}" type="button" class="btn btn-primary">All Banner</a>
              </div>
          </div>
        </div>

        
       <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                   <h2>Banner Add</h2>
                </div>
                <div class="card-body">

                  <form method="post" action = "{{ route('banner.store') }}" enctype="multipart/form-data">
                    @csrf

                    
                    <div class="form-group">
                      <label>Banner Title</label>
                      <input type="text" class="form-control" placeholder="Banner Title" name = "title" value = "{{ old('title') }}">
                      @error ('title')
                        <span class = "text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label>Banner Button</label>
                      <input type="text" class="form-control" placeholder="Banner Button" name = "button" value = "{{ old('button') }}">
                      @error ('button')
                        <span class = "text-danger">{{ $message }}</span>
                      @enderror
                    </div>


                    <div class="form-group">
                      <label>Button Link</label>
                      <input type="text" class="form-control" placeholder="Banner Link" name = "link" value = "{{ old('link') }}">
                      @error ('link')
                        <span class = "text-danger">{{ $message }}</span>
                      @enderror
                    </div>


                    <div class="form-group">
                      <label>Banner Description</label>

                      <textarea name="description" id="" rows="4" class="form-control" placeholder="Banner Description">{{ old('description') }}</textarea>
                      @error ('description')
                        <span class = "text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                  
                    <div class="form-group">
                      <label>Banner Photo</label>
                      <input type="file" class="form-control" name="image">
                      @error ('image')
                        <span class = "text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Add Banner</button>
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
