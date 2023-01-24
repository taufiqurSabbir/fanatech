@extends('layouts.dashboard_app')

@section('page_title')
{{ ('Fexdvers | Why Choose Fex') }}
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
        <span class="breadcrumb-item active">Add Why Choose Fexdvers</span>
      </nav>
    </div><!-- br-pageheader -->
    
    <div class="br-pagebody">
      <!-- start you own content here -->

       <div class="container-fluid">
         <div class="row">
           <div class="col-md-12">
              <h1 class = "text-center my-3">Why Choose Fexdvers Page</h1>

              <div class="btn-group mb-2" role="group" aria-label="Basic example">
                <a href = "{{ route('whychoosefexdver.view') }}" type="button" class="btn btn-info">All Why Choose Fexdvers</a>
                
              </div>

           </div>
         </div>
           <div class="row">
             
              <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                       <h2>Why Choose Fexdvers Add</h2>
                    </div>
                    <div class="card-body">

                      <form method="post" action = "{{ route('whychoosefexdver.store') }}" enctype="multipart/form-data">
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
                          <label>Why Choose Fexdvers Icon (svg image)</label>
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
                       
                        <button type="submit" class="btn btn-primary">Add Why Choose Fexdvers</button>
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
