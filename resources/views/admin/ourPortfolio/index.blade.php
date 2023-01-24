@extends('layouts.dashboard_app')

@section('page_title')
{{ ('Fexdvers | Our Portfolio Add') }}
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
              <h1 class = "text-center my-3">Our Portfolio Add Page</h1>
              <div class="btn-group mb-2" role="group" aria-label="Basic example">
                <a href = "{{ route('ourPortfolio.ourPortfolioViewAll') }}" type="button" class="btn btn-primary">All Our Portfolio</a>
              </div>
           </div>
         </div>
           <div class="row">
             
              <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                       <h2>Our Portfolio Add</h2>
                    </div>
                    <div class="card-body">

                      <form method="post" action = "{{ route('ourPortfolio.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row">

                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Title</label>
                              <input type="text" class="form-control" placeholder="Title" name = "title" value = "{{ old('title') }}">
                              @error ('title')
                                <span class = "text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                          </div>

                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Category Name</label>
                              <select class="form-control" name="category_name">
                                <option value="">--Select One--</option>
                                <option value="graphics">Ui / Ux Design</option>
                                <option value="ui-ux">Ui/Ux</option>
                                <option value="motion-graphics">Motion Graphics </option>
                                <option value="web-design">Web Design & Development </option>
                                <option value="data-entry">Data Entry </option>
                                <option value="youtube-marketing">YouTube Marketing </option>
                                <option value="digital-marketing">Digital Marketing </option>
                                <option value="video-editing">Video Editing </option>
                                <option value="apps-development">Apps Development </option>
                                <option value="animation">Animation </option>
                                <option value="others">Others </option>
                              </select>
                              @error ('category_name')
                                <span class = "text-danger">{{ $message }}</span>
                              @enderror
                            </div>

                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Button</label>
                              <input type="text" class="form-control" placeholder="Button" name = "button" value = "{{ old('button') }}">
                              @error ('button')
                                <span class = "text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Link</label>
                              <input type="text" class="form-control" placeholder="Link" name = "link" value = "{{ old('link') }}">
                              @error ('link')
                                <span class = "text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label>Our Portfolio Image (Single)</label>
                          <input type="file" class="form-control" name="image">
                          @error ('image')
                            <span class = "text-danger">{{ $message }}</span>
                          @enderror
                        </div>


                        <div class="form-group">
                          <label>Our Portfolio Image (Big Image)</label>
                          <input type="file" class="form-control" name="big_image">

                          @error ('big_image')
                            <span class = "text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Add Our Portfolio</button>
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