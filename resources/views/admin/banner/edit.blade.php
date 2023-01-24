@extends('layouts.dashboard_app')
@section('page_title')
    {{ ('Fexdvers | Banner Edit') }}
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
        <span class="breadcrumb-item active">Edit Banner</span>
      </nav>
    </div><!-- br-pageheader -->
    
    <div class="br-pagebody">
      <!-- start you own content here -->

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                   <h2>Edit Banner</h2>
                </div>
                <div class="card-body">

                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('banner.index') }}" class="btn btn-info">Banner Add</a></li>
                    </ol>
                  </nav>

                 <form method="post" action = "{{ route('banner.update' , $banner_info->id) }}" enctype="multipart/form-data">
                   @csrf
                   @method('PATCH')

                   
                   <div class="form-group">
                     <label>Banner Title</label>
                     <input type="text" class="form-control" placeholder="Banner Title" name = "title" value = "{{ $banner_info->title }}">
                     @error ('title')
                       <span class = "text-danger">{{ $message }}</span>
                     @enderror
                   </div>

                   <div class="form-group">
                     <label>Banner Button</label>
                     <input type="text" class="form-control" placeholder="Banner Button" name = "button" value = "{{ $banner_info->button }}">
                     @error ('button')
                       <span class = "text-danger">{{ $message }}</span>
                     @enderror
                   </div>


                   <div class="form-group">
                     <label>Button Link</label>
                     <input type="text" class="form-control" placeholder="Banner Link" name = "link" value = "{{ $banner_info->link }}">
                     @error ('link')
                       <span class = "text-danger">{{ $message }}</span>
                     @enderror
                   </div>


                   <div class="form-group">
                     <label>Banner Description</label>
                     <input type="text" class="form-control" placeholder="Banner Description" name = "description" value = "{{ $banner_info->description }}">
                     @error ('description')
                       <span class = "text-danger">{{ $message }}</span>
                     @enderror
                   </div>

                 
                   <div class="form-group">
                     <label>Banner Photo</label>
                     <input type="file" class="form-control" name="image">

                  
                      <img src="{{ asset('uploads/banner_photos') }}/{{ $banner_info->image }}" alt="" width="100" height="80" class = "mt-3"/>
                    

                   </div>

                  


                   <button type="submit" class="btn btn-primary">Update Banner</button>
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
