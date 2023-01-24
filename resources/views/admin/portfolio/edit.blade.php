@extends('layouts.dashboard_app')
@section('page_title')
    {{ ('Fexdvers | Project Edit') }}
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

       <div class="container">
         <div class="row">
           <div class="col-md-12">
             <div class="card">
                 <div class="card-header">
                    <h2>Edit Project</h2>
                 </div>
                 <div class="card-body">

                   <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                       <li class="breadcrumb-item"><a href="{{ route('portfolio.index') }}">Project</a></li>
                     </ol>
                   </nav>

                   <form method="post" action = "{{ route('portfolio.update' , $portfolio_info->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    
                    <div class="form-group">
                      <label>Title</label>
                      <input type="text" class="form-control" placeholder="Title" name = "title" value = "{{ $portfolio_info->title }}">
                      @error ('title')
                        <span class = "text-danger">{{ $message }}</span>
                      @enderror
                    </div>


                    <div class="form-group">
                      <label>Date</label>
                      <input type="date" class="form-control" name = "date" value = "{{ $portfolio_info->date }}">
                      @error ('date')
                        <span class = "text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                 
                    <div class="form-group">
                      <label>Short Description</label>
                      <textarea name="short_details" rows="4" class="form-control" placeholder="Short Description">{{ $portfolio_info->short_details }}</textarea>
                      @error ('short_details')
                        <span class = "text-danger">{{ $message }}</span>
                      @enderror
                    </div>


                    <div class="form-group">
                      <label>Long Details</label>
                      <textarea name="long_details" rows="8" class="form-control" placeholder="Long Details" id="editor">{{ $portfolio_info->long_details }}</textarea>
                      @error ('long_details')
                        <span class = "text-danger">{{ $message }}</span>
                      @enderror
                    </div>


                    <div class="form-group">
                      <label>Project Image (Single)</label>
                      <input type="file" class="form-control" name="image">
                      <img src="{{ asset('uploads/portfolio_photos') }}/{{ $portfolio_info->image }}" alt="" width="80" height="60" class="mt-3">
                      @error ('image')
                        <span class = "text-danger">{{ $message }}</span>
                      @enderror
                    </div>


                    <div class="form-group">
                      <label>Project Image (One)</label>
                      <input type="file" class="form-control" name="image_one">
                      
                      <img src="{{ asset('uploads/portfolio_photos') }}/{{ $portfolio_info->image_one }}" alt="" width="80" height="60" class="mt-3">
                    </div>

                    <div class="form-group">
                      <label>Project Image (Two)</label>
                      <input type="file" class="form-control" name="image_two">
                      <img src="{{ asset('uploads/portfolio_photos') }}/{{ $portfolio_info->image_two }}" alt="" width="80" height="60" class="mt-3">
                    </div>

                    <div class="form-group">
                      <label>Project Image (Three)</label>
                      <input type="file" class="form-control" name="image_three">
                      <img src="{{ asset('uploads/portfolio_photos') }}/{{ $portfolio_info->image_three }}" alt="" width="80" height="60" class="mt-3">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Project</button>
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
