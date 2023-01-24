@extends('layouts.dashboard_app')

@section('page_title')
{{ ('Fexdvers | Testimonial Edit') }}
@endsection

@section('testimonial')
active
@endsection

@section('dashboard_content')
  <!-- ########## START: MAIN PANEL ########## -->
  <div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <span class="breadcrumb-item active">Edit Testimonial</span>
      </nav>
    </div><!-- br-pageheader -->
    
    <div class="br-pagebody">
      <!-- start you own content here -->

       <div class="container-fluid">
         <div class="row">
           <div class="col-md-12">
              <h1 class = "text-center my-3">Testimonial Page</h1>

              <div class="btn-group mb-2" role="group" aria-label="Basic example">
                <a href = "{{ route('testimonial.testimonialViewAll') }}" type="button" class="btn btn-primary">All Testimonial</a>
                
              </div>

           </div>
         </div>
           <div class="row">
             
              <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                       <h2>Testimonial Edit </h2>
                    </div>
                    <div class="card-body">

                      <form method="post" action = "{{ route('testimonial.update' , $testimonial_info->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        @if(session()->has('success_status'))
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                             {{ session()->get('success_status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        @endif

                        <div class="form-group">
                          <label>Client Name</label>
                          <input type="text" class="form-control" placeholder="Client Name" name = "name" value = "{{ $testimonial_info->name }}">
                          @error ('name')
                            <span class = "text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label>Client Title</label>
                          <input type="text" class="form-control" placeholder="Client Title" name = "title" value = "{{ $testimonial_info->title }}">
                          @error ('title')
                            <span class = "text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label>Service Name</label>
                          <input type="text" class="form-control" placeholder="Service Name" name = "position" value = "{{ $testimonial_info->position }}">
                          @error ('position')
                            <span class = "text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label>Client Review Text</label>
                          <textarea id="editor" name="description" rows="2" class="form-control" placeholder="Client Review Text">{{ $testimonial_info->description }}</textarea>
                          @error ('description')
                            <span class = "text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label>Clint Photo</label>
                          <input type="file" class="form-control" name="image">

                          <img src="{{ asset('uploads/testimonial_photos') }}/{{ $testimonial_info->image }}" alt="" width="100">

                          @error ('image')
                            <span class = "text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Update Testimonial</button>
                      </form>
                    </div>
               </div>
              </div>

             

           </div>
       </div>
     </div><!-- sl-pagebody -->
   </div><!-- sl-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->
@endsection

