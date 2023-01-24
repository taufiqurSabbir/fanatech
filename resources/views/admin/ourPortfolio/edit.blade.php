@extends('layouts.dashboard_app')
@section('page_title')
    {{ ('Fexdvers | Our Portfolio Edit') }}
@endsection
@section('portfolio')
  active
@endsection

@section('dashboard_content')

  <!-- ########## START: MAIN PANEL ########## -->
  <div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <span class="breadcrumb-item active">All Our Portfolios</span>
      </nav>
    </div><!-- br-pageheader -->
    
    <div class="br-pagebody">
      <!-- start you own content here -->

       <div class="container-fluid">
         <div class="row">
           <div class="col-md-12">
             <div class="card">
                 <div class="card-header">
                    <h2>Edit Our Portfolio</h2>
                 </div>
                 <div class="card-body">

                   <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                       <li class="breadcrumb-item"><a href="{{ route('ourPortfolio.index') }}">Our Portfolio</a></li>
                     </ol>
                   </nav>

                   <form method="post" action = "{{ route('ourPortfolio.update' , $ourPortfolio_info->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label>Title</label>
                          <input type="text" class="form-control" placeholder="Title" name = "title" value = "{{ $ourPortfolio_info->title }}">
                          @error ('title')
                            <span class = "text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                      </div>

                      <div class="col-lg-6">
                        <div class="form-group">
                          <label>Category Name</label>
                          <select class="form-control" name="category_name">
                            <option value="{{ $ourPortfolio_info->category_name }}">{{ $ourPortfolio_info->category_name }}</option>
                            <option value="graphics">Graphics</option>
                            <option value="ui-ux">Ui/Ux</option>
                            <option value="web-design">Web Design </option>
                          </select>
                          @error ('category_id')
                            <span class = "text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label>Button</label>
                          <input type="text" class="form-control" placeholder="Button" name = "button" value = "{{ $ourPortfolio_info->button }}">
                          @error ('button')
                            <span class = "text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label>Link</label>
                          <input type="text" class="form-control" placeholder="Link" name = "link" value = "{{ $ourPortfolio_info->link }}">
                          @error ('link')
                            <span class = "text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                    </div>


                    <div class="form-group">
                      <label>Our Portfolio Image (Single)</label>
                      <input type="file" class="form-control" name="image">
                      <img src="{{ asset('uploads/ourPortfolio_photos') }}/{{ $ourPortfolio_info->image }}" alt="" width="80" height="60" class="mt-3">
                    </div>

                    <div class="form-group">
                      <label>Our Portfolio Big Image (Single)</label>
                      <input type="file" class="form-control" name="big_image">
                      <img src="{{ asset('uploads/ourPortfolio_big_photos') }}/{{ $ourPortfolio_info->big_image }}" alt="" width="80" height="60" class="mt-3">
                    </div>



                    <button type="submit" class="btn btn-primary">Update Our Portfolio</button>
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
