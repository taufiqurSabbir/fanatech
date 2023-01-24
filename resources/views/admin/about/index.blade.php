@extends('layouts.dashboard_app')

@section('page_title')
{{ ('Fexdvers | About Add') }}
@endsection

@section('about')
active
@endsection

@section('dashboard_content')


    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
          <span class="breadcrumb-item active">All Abouts</span>
        </nav>
      </div><!-- br-pageheader -->
      
      <div class="br-pagebody">
        <!-- start you own content here -->

       <div class="container-fluid">
         <div class="row">
           <div class="col-md-12">
              <h1 class = "text-center my-3">About Add Page</h1>

              <div class="btn-group mb-2" role="group" aria-label="Basic example">
                <a href = "{{ route('about.aboutViewAll') }}" type="button" class="btn btn-primary">All About</a>
              </div>

           </div>
         </div>
           <div class="row">
             
              <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                       <h2>About Add</h2>
                    </div>
                    <div class="card-body">

                      <form method="post" action = "{{ route('about.store') }}">
                        @csrf
                        
                        <div class="form-group">
                          <label>Happy Client</label>
                          <input type="number" class="form-control" placeholder="Happy Client" name = "happy_client" value = "{{ old('happy_client') }}">
                          @error ('happy_client')
                            <span class = "text-danger">{{ $message }}</span>
                          @enderror
                        </div>


                        <div class="form-group">
                          <label>Experience</label>
                          <input type="number" class="form-control" placeholder="Experience" name = "experience" value = "{{ old('experience') }}">
                          @error ('experience')
                            <span class = "text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                        
                        <div class="form-group">
                          <label>Project Complete</label>
                          <input type="number" class="form-control" placeholder="Project Complete" name = "project_complete" value = "{{ old('project_complete') }}">
                          @error ('project_complete')
                            <span class = "text-danger">{{ $message }}</span>
                          @enderror
                        </div>


                        <div class="form-group">
                          <label>Seals</label>
                          <input type="number" class="form-control" placeholder="Seals" name = "seals" value = "{{ old('seals') }}">
                          @error ('seals')
                            <span class = "text-danger">{{ $message }}</span>
                          @enderror
                        </div>


                     
                        <div class="form-group">
                          <label>Description</label>
                          <textarea name="description" rows="8" class="form-control" placeholder="Description"
                          id="editor">{{ old('description') }}</textarea>
                          @error ('description')
                            <span class = "text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Add About</button>
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