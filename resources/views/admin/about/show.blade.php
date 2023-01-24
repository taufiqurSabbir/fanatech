@extends('layouts.dashboard_app')

@section('page_title')
{{ ('Fexdvers | About View') }}
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
              <h1 class = "text-center my-3">About View Page</h1>

              <div class="btn-group mb-2" role="group" aria-label="Basic example">
                <a href = "{{ route('about.index') }}" type="button" class="btn btn-success">Add About</a>
              </div>


           </div>
         </div>
           <div class="row">
              <div class="col-md-12">
                   <div class="card">
                       <div class="card-header">
                          <h2>About View</h2>
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
                                   <th>ID No.</th>
                                   <th>Happy Client</th>
                                   <th>Exprience</th>
                                   <th>Project Complete</th>
                                   <th>Seals</th>
                                   <th>Description</th>
                                   <th>Action</th>
                                   
                                 </tr>
                               </thead>

                               <tbody>
                                 @forelse($aboutUs_all as $about)
                                 <tr>
                                   <td>{{ $about->id }}</td>
                                   <td>{{ Str::limit($about->happy_client , 10) }}</td>
                                   <td>{{ Str::limit($about->experience , 10) }}</td>
                                   <td>{{ Str::limit($about->project_complete , 10) }}</td>
                                   <td>{{ Str::limit($about->seals , 10) }}</td>
                                   <td>{{ Str::limit($about->description , 10) }}</td>
                         
                                   <td>
                                     
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                      <a href = "{{ route('about.aboutEdit' , $about->id) }}" type="button" class="btn btn-primary">Edit</a>
                                      <a href = "{{ route('about.aboutDelete' , $about->id) }}" type="button" class="btn btn-danger">Delete</a>
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
           </div>
       </div>

     </div><!-- sl-pagebody -->
   </div><!-- sl-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->
@endsection