@extends('layouts.dashboard_app')

@section('page_title')
{{ ('Fexdvers | Testimonial Add') }}
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
        <span class="breadcrumb-item active">Add Testimonial</span>
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
                       <h2>Testimonial Add</h2>
                    </div>
                    <div class="card-body">

                      <form method="post" action = "{{ route('testimonial.store') }}" enctype="multipart/form-data">
                        @csrf

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
                          <input type="text" class="form-control" placeholder="Client Name" name = "name" value = "{{ old('name') }}">
                          @error ('name')
                            <span class = "text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label>Title</label>
                          <input type="text" class="form-control" placeholder="Title" name = "title" value = "{{ old('title') }}">
                          @error ('title')
                            <span class = "text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label>Service Name</label>
                          <input type="text" class="form-control" placeholder="Service Name" name = "position" value = "{{ old('position') }}">
                          @error ('position')
                            <span class = "text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label>Client Review Text</label>
                          <textarea id="editor" name="description" rows="2" class="form-control" placeholder="Client Review Text">{{ old('description') }}</textarea>
                          @error ('description')
                            <span class = "text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label>Clint Photo</label>
                          <input type="file" class="form-control" name="image">

                          @error ('image')
                            <span class = "text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Add Testimonial</button>
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
