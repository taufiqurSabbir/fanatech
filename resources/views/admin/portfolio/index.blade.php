@extends('layouts.dashboard_app')

@section('page_title')
{{ ('Fexdvers | Project Add') }}
@endsection

@section('project')
active
@endsection

@section('dashboard_content')


    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
          <span class="breadcrumb-item active">All Projects</span>
        </nav>
      </div><!-- br-pageheader -->
      
      <div class="br-pagebody">
        <!-- start you own content here -->

       <div class="container-fluid">
         <div class="row">
           <div class="col-md-12">
              <h1 class = "text-center my-3">Project Add Page</h1>

              <div class="btn-group mb-2" role="group" aria-label="Basic example">
                <a href = "{{ route('portfolio.portfolioViewAll') }}" type="button" class="btn btn-primary">All Project</a>
              </div>

           </div>
         </div>
           <div class="row">
             
              <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                       <h2>Project Add</h2>
                    </div>
                    <div class="card-body">

                      <form method="post" action = "{{ route('portfolio.store') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group">
                          <label>Title</label>
                          <input type="text" class="form-control" placeholder="Title" name = "title" value = "{{ old('title') }}">
                          @error ('title')
                            <span class = "text-danger">{{ $message }}</span>
                          @enderror
                        </div>


                        <div class="form-group">
                          <label>Date</label>
                          <input type="date" class="form-control" name = "date" value = "{{ old('date') }}">
                          @error ('date')
                            <span class = "text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                     
                        <div class="form-group">
                          <label>Short Description</label>
                          <textarea name="short_details" rows="4" class="form-control" placeholder="Short Description">{{ old('short_details') }}</textarea>
                          @error ('short_details')
                            <span class = "text-danger">{{ $message }}</span>
                          @enderror
                        </div>


                        <div class="form-group">
                          <label>Long Details</label>
                          <textarea name="long_details" rows="8" class="form-control" placeholder="Long Details" id="editor">{{ old('long_details') }}</textarea>
                          @error ('long_details')
                            <span class = "text-danger">{{ $message }}</span>
                          @enderror
                        </div>


                        <div class="form-group">
                          <label>Project Image (Single)</label>
                          <input type="file" class="form-control" name="image">
                          @error ('image')
                            <span class = "text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label>Project Image (One)</label>
                          <input type="file" class="form-control" name="image_one">
                        </div>

                        <div class="form-group">
                          <label>Project Image (Twp)</label>
                          <input type="file" class="form-control" name="image_two">
                        </div>

                        <div class="form-group">
                          <label>Project Image (Three)</label>
                          <input type="file" class="form-control" name="image_three">
                        </div>
                      
                        <button type="submit" class="btn btn-primary">Add Project</button>
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