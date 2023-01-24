@extends('layouts.dashboard_app')
@section('page_title')
    {{ ('Fexdvers | Business-Brand') }}
@endsection
@section('multipleBusinessBrand')
  active
@endsection

@section('dashboard_content')

  <!-- ########## START: MAIN PANEL ########## -->
  <div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <span class="breadcrumb-item active">Edit multipleBusinessBrand </span>
      </nav>
    </div><!-- br-pageheader -->
    
    <div class="br-pagebody">
      <!-- start you own content here -->

       <div class="container">
         <div class="row">
           <div class="col-md-12">
             <div class="card">
                 <div class="card-header">
                    <h2>Edit multipleBusinessBrand</h2>
                 </div>
                 <div class="card-body">

                   <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                       <li class="breadcrumb-item"><a href="{{ route('multipleBusinessBrand.index') }}">multipleBusinessBrand : {{ $multipleBusinessBrand_info->date }}</a></li>
                     </ol>
                   </nav>

                  <form method="post" action = "{{ route('multipleBusinessBrand.update', $multipleBusinessBrand_info->id) }}" enctype="multipart/form-data">
                    @csrf

                    @method('PATCH')
                    
                    <div class="form-group">
                      <label>Brand Link</label>
                      <input type="text" class="form-control" placeholder="Multiple Business Brand Link" name = "brand_link" value = "{{ $multipleBusinessBrand_info->brand_link }}">
                      @error ('brand_link')
                        <span class = "text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label>Brand Logo</label>
                      <input type="file" class="form-control" name="brand_logo">

                      <img src="{{ asset('uploads/multipleBusinessBrand_photos') }}/{{ $multipleBusinessBrand_info->brand_logo }}" alt="" width="80" height="60" class="mt-3">


                      @error ('brand_logo')
                        <span class = "text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Update multipleBusinessBrand</button>
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
