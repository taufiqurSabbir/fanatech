@extends('layouts.dashboard_app')

@section('page_title')
{{ ('Fexdvers | Subcribemail Add') }}
@endsection

@section('subscribe')
active
@endsection

@section('dashboard_content')


  <!-- ########## START: MAIN PANEL ########## -->
  <div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <span class="breadcrumb-item active">All Subcribemails</span>
      </nav>
    </div><!-- br-pageheader -->
    
    <div class="br-pagebody">
      <!-- start you own content here -->

      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <h1 class = "text-center my-3">Subcribemail Add Page</h1>
              </div>
          </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                 <div class="card">
                     <div class="card-header">
                        <h2>Subscribemail View </h2>
                     </div>
                     <div class="card-body">
                    
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
                                 <th>Subscribemail </th>
                                 <th>Action</th>
                               </tr>
                             </thead>

                             <tbody>
                              @forelse($subscribeMails as $subscribemail)
                               <tr>
                                 <td>{{ $loop->index + 1 }}</td>
                                 
                                 <td>{{ Str::limit($subscribemail->subeMail , 25) }}</td>
                                
                                 <td>

                                   <a href = "{{ route('subscribeMail.mail',$subscribemail->id) }}" type="button" class="btn btn-primary">Mail Sent</a>
                                   
                                   <div class="btn-group" role="group" aria-label="Basic example">
                                     <form action="{{ route('subscribeMail.destroy',$subscribemail->id) }}" method="POST">
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
    </div><!-- br-pagebody -->
  </div><!-- br-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->

@endsection
