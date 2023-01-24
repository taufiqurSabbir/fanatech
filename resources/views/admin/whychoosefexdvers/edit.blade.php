@extends('layouts.dashboard_app')

@section('page_title')
{{ ('Fexdvers | Why Choose Fexdvers Edit') }}
@endsection

@section('whychoosefexdvers')
active
@endsection

@section('dashboard_content')
  <!-- ########## START: MAIN PANEL ########## -->
  <div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <span class="breadcrumb-item active">Edit Why Choose Fexdvers</span>
      </nav>
    </div><!-- br-pageheader -->
    
    <div class="br-pagebody">
      <!-- start you own content here -->

       <div class="container-fluid">
         <div class="row">
           <div class="col-md-12">
              <h1 class = "text-center my-3">Why Choose Fexdvers Page</h1>

              <div class="btn-group mb-2" role="group" aria-label="Basic example">
                <a href = "{{ route('whychoosefexdver.view') }}" type="button" class="btn btn-primary">All Why Choose Fexdvers</a>
                
              </div>

           </div>
         </div>
           <div class="row">
             
              <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                       <h2>Why Choose Fexdvers Edit </h2>
                    </div>
                    <div class="card-body">

                      <form method="post" action = "{{ url('whychoosefexdvers-edit' , $whychoosefexdvers->id) }}" enctype="multipart/form-data">
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

                          <img src="{{ asset('uploads/whychoosefexdvers_photos') }}/{{ $whychoosefexdvers->icon }}" alt="" width="60">

                        </div>



                        <div class="form-group">
                          <label>Services Title</label>
                          <input type="text" class="form-control" placeholder="Client Position" name = "title" value = "{{ $whychoosefexdvers->title }}">
                          @error ('position')
                            <span class = "text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label>Description</label>
                          <textarea name="description" rows="2" class="form-control" placeholder="Description">{{ $whychoosefexdvers->description }}</textarea>
                          @error ('description')
                            <span class = "text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                       
                        <button type="submit" class="btn btn-primary">Update service</button>
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

