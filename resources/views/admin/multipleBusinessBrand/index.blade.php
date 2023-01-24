@extends('layouts.dashboard_app')

@section('page_title')
{{ ('Fexdvers | Business-Brand') }}
@endsection

@section('Multiple Business Brand')
active
@endsection

@section('dashboard_content')

  <!-- ########## START: MAIN PANEL ########## -->
  <div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <span class="breadcrumb-item active">Add Notice</span>
      </nav>
    </div><!-- br-pageheader -->
    
    <div class="br-pagebody">
      <!-- start you own content here -->

       <div class="container-fluid">
         <div class="row">
           <div class="col-md-12">
              <h1 class = "text-center my-3">Multiple Business Brand Add Page</h1>
           </div>
         </div>
           <div class="row">

            <div class="col-md-8">
              <div class="card">
                  <div class="card-header">
                     <h2>Multiple Business Brand View</h2>
                     <hr>
                  </div>
                  <div class="card-body">
                     @if(session()->has('success_status'))
                         <div class="alert alert-success alert-dismissible fade show" role="alert">
                             {{ session()->get('success_status') }}
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                           </button>
                         </div>
                     @endif

                     @if(session()->has('delete_status'))
                       <div class="alert alert-danger alert-dismissible fade show" role="alert">
                           {{ session()->get('delete_status') }}
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>
                      @endif

                     @if(session()->has('update_status'))
                       <div class="alert alert-success alert-dismissible fade show" role="alert">
                           {{ session()->get('update_status') }}
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>
                     @endif

                    
                        <table class="table">
                          <thead>
                            <tr>
                              <th>SL No.</th>
                              <th>Brand Link</th>
                              <th>Brand Logo</th>
                              <th>Action</th>
                            </tr>
                          </thead>

                          <tbody>


                            @forelse($multipleBusinessBrands_all as $multipleBusinessBrand)
                            <tr>
                              <td>{{ $loop->index + 1 }}</td>

                            
                              <td>{{ Str::limit($multipleBusinessBrand->brand_link , 30) }}</td>

                              <td>
                                <img src="{{ asset('uploads/multipleBusinessBrand_photos') }}/{{ $multipleBusinessBrand->brand_logo }}" alt="" width="60">
                              </td>

                             
                             
                              <td>
                                
                                <div class="btn-group" role="group" aria-label="Basic example">
                                  
                                  <a href = "{{ route('multipleBusinessBrand.edit' , $multipleBusinessBrand->id) }}" class="btn btn-primary btn-sm">Edit</a>

                                  <form action="{{ route('multipleBusinessBrand.destroy',$multipleBusinessBrand->id) }}" method="POST">
                                     @csrf
                                     @method('DELETE')
                                     <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                 </form>
                                </div>

                              </td>
                            </tr>
                            @empty
                              <tr>
                                <td class = "text-danger text-center" colspan="50">No Data Available</td>
                              </tr>
                          @endforelse

                          </tbody>
                        </table>

                  </div>
              </div>
            </div>
             
              <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                       <h2>Multiple Business Brand Add</h2>
                    </div>
                    <div class="card-body">

                      <form method="post" action = "{{ route('multipleBusinessBrand.store') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group">
                          <label>Brand Link</label>
                          <input type="text" class="form-control" placeholder="Multiple Business Brand Link" name = "brand_link" value = "{{ old('brand_link') }}">
                          @error ('brand_link')
                            <span class = "text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label>Brand Logo</label>
                          <input type="file" class="form-control" name="brand_logo">
                          @error ('brand_logo')
                            <span class = "text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">SUBMIT</button>
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