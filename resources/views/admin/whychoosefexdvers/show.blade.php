@extends('layouts.dashboard_app')

@section('page_title')
{{ ('Fexdvers | Why Choose Fanatech View') }}
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
        <span class="breadcrumb-item active">All Why Choose Fanatech</span>
      </nav>
    </div><!-- br-pageheader -->

    <div class="br-pagebody">
      <!-- start you own content here -->

       <div class="container-fluid">
         <div class="row">
           <div class="col-md-12">
              <h1 class = "text-center my-3">Why Choose Fanatech View Page</h1>

              <div class="btn-group mb-2" role="group" aria-label="Basic example">
                <a href = "{{ route('whychoosefexdver.index') }}" type="button" class="btn btn-success">Add Why Choose Fexdvers</a>
              </div>

           </div>
         </div>
           <div class="row">

              <div class="col-md-12">
                   <div class="card">
                       <div class="card-header">
                          <h2>Why Choose Fanatech View</h2>
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

                         @if(session()->has('update_status'))
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                              {{ session()->get('update_status') }}
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





                             <table class="table">
                               <thead>
                                 <tr>
                                   <th>SL No.</th>
                                   <th>Fexdvers Icon</th>
                                   <th>Fexdvers Title</th>
                                   <th>Fexdvers Description</th>
                                   <th>Action</th>
                                 </tr>
                               </thead>

                               <tbody>
                                 @forelse($whychoosefexdversViewAll_all as $services)
                                 <tr>
                                   <td>{{ $loop->index + 1 }}</td>
                                   <td>
                                    <img src="{{ asset('uploads/whychoosefexdvers_photos') }}/{{ $services->icon }}" alt="" width="60">
                                  </td>
                                   <td>{{ Str::limit($services->title , 20) }}</td>
                                   <td>{{ Str::limit($services->description , 20) }}</td>

                                   <td>
                                     <div class="btn-group" role="group" aria-label="Basic example">
                                       <a href = "{{ route('why.whyEdit' , $services->id) }}" type="button" class="btn btn-primary">Edit</a>
                                       <a href = "{{ route('why.whyDelete' , $services->id) }}" type="button" class="btn btn-danger">Delete</a>
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
