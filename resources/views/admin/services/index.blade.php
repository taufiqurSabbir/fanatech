@extends('layouts.dashboard_app')

@section('page_title')
{{ ('Fexdvers | Services Add') }}
@endsection

@section('service')
active
@endsection

@section('dashboard_content')
  <!-- ########## START: MAIN PANEL ########## -->
  <div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <span class="breadcrumb-item active">Add Services</span>
      </nav>
    </div><!-- br-pageheader -->
    
    <div class="br-pagebody">
      <!-- start you own content here -->

       <div class="container-fluid">
         <div class="row">
           <div class="col-md-12">
              <h1 class = "text-center my-3">Services Page</h1>

              <div class="btn-group mb-2" role="group" aria-label="Basic example">
                <a href = "{{ route('service.serviceViewAll') }}" type="button" class="btn btn-primary">All Services</a>
                
              </div>

           </div>
         </div>
           <div class="row">
             
              <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                       <h2>Services Add</h2>
                    </div>
                    <div class="card-body">

                      <form method="post" action = "{{ route('service.store') }}" enctype="multipart/form-data">
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
                          <label>Services Photo</label>
                          <input type="file" class="form-control" name="icon">
                          @error ('icon')
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
                          <label>Description</label>
                          <textarea name="description" rows="2" class="form-control" placeholder="Description">{{ old('description') }}</textarea>
                          @error ('description')
                            <span class = "text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Add Services</button>
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
