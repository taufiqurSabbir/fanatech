@extends('layouts.dashboard_app')

@section('page_title')
{{ ('Fexdvers | Project View') }}
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
              <h1 class = "text-center my-3">Project View Page</h1>

              <div class="btn-group mb-2" role="group" aria-label="Basic example">
                <a href = "{{ route('portfolio.index') }}" type="button" class="btn btn-success">Add Project</a>
              </div>


           </div>
         </div>
           <div class="row">
              <div class="col-md-12">
                   <div class="card">
                       <div class="card-header">
                          <h2>Project View</h2>
                          <hr>
                       </div>
                       <div class="card-body">
                          @if(session()->has('success_status'))
                              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                  {{ session()->get('success_status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                          @endif


                          @if(session()->has('error_status'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session()->get('error_status') }}
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
                                   <th>Portfolio Title</th>
                                   <th>Date </th>
                                   <th>Short Description</th>
                                   <th>Long Description</th>
                                   <th>Image</th>
                                   <th>Action</th>
                                 </tr>
                               </thead>

                               <tbody>
                                 @forelse($portfolios_all as $portfolio)
                                 <tr>
                                   <td>{{ $portfolio->id }}</td>
                                   <td>{{ Str::limit($portfolio->title , 10) }}</td>
                                   <td>{{ Str::limit($portfolio->date , 10) }}</td>
                                   <td>{!! Str::limit($portfolio->short_details , 20) !!}</td>
                                   <td>{!! Str::limit($portfolio->long_details , 20) !!}</td>
                                   <td>
                                     <img src="{{ asset('uploads/portfolio_photos') }}/{{ $portfolio->image }}" alt="" width="40">
                                   </td>
                                   <td>
                                     
                                     <div class="btn-group" role="group" aria-label="Basic example">
                                       <a href = "{{ route('portfolio.edit' , $portfolio->id) }}" type="button" class="btn btn-primary">Edit</a>
                                       <form action="{{ route('portfolio.destroy',$portfolio->id) }}" method="POST">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="btn btn-danger">Delete</button>
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
           </div>
       </div>

     </div><!-- sl-pagebody -->
   </div><!-- sl-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->
@endsection