@extends('layouts.dashboard_app')
@section('page_title')
    {{ ('Fexdvers | About Edit') }}
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

       <div class="container">
         <div class="row">
           <div class="col-md-12">
             <div class="card">
                 <div class="card-header">
                    <h2>Edit About</h2>
                 </div>
                 <div class="card-body">

                   <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                       <li class="breadcrumb-item"><a href="{{ route('about.index') }}">About</a></li>
                     </ol>
                   </nav>

                   <form method="post" action = "{{ route('aboutUs.update' , $aboutUs->id) }}">
                    @csrf

                    <div class="form-group">
                      <label>Happy Client</label>
                      <input type="number" class="form-control" placeholder="Happy Client" name = "happy_client" value = "{{ $aboutUs->happy_client }}">
                      @error ('happy_client')
                        <span class = "text-danger">{{ $message }}</span>
                      @enderror
                    </div>


                    <div class="form-group">
                      <label>Experience</label>
                      <input type="number" class="form-control" placeholder="Experience" name = "experience" value = "{{ $aboutUs->experience }}">
                      @error ('experience')
                        <span class = "text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                    
                    <div class="form-group">
                      <label>Project Complete</label>
                      <input type="number" class="form-control" placeholder="Project Complete" name = "project_complete" value = "{{ $aboutUs->project_complete }}">
                      @error ('project_complete')
                        <span class = "text-danger">{{ $message }}</span>
                      @enderror
                    </div>


                    <div class="form-group">
                      <label>Seals</label>
                      <input type="number" class="form-control" placeholder="Seals" name = "seals" value = "{{ $aboutUs->seals }}">
                      @error ('seals')
                        <span class = "text-danger">{{ $message }}</span>
                      @enderror
                    </div>


                 
                    <div class="form-group">
                      <label>Description</label>
                      <textarea name="description" rows="8" class="form-control" placeholder="Description"
                      id="editor">{{ $aboutUs->description }}</textarea>
                      @error ('description')
                        <span class = "text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                    

                    <button type="submit" class="btn btn-primary">Update About</button>
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
