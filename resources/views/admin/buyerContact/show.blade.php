@extends('layouts.dashboard_app')

@section('page_title')
{{ ('Fexdvers | Buyer Contact') }}
@endsection

@section('contact')
active
@endsection

@section('dashboard_content')


  <!-- ########## START: MAIN PANEL ########## -->
  <div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <span class="breadcrumb-item active">All Buyer Contacts</span>
      </nav>
    </div><!-- br-pageheader -->
    
    <div class="br-pagebody">
      <!-- start you own content here -->

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
             <h1 class = "text-center my-3">Buyer Contact</h1>

             {{-- <div class="btn-group mb-2" role="group" aria-label="Basic example">
              <a href="{{ url('send/contactinfo') }}" class = "btn btn-info">Send Newsletter to {{ $total_customerinfo }} Users</a>
             </div> --}}


          </div>
        </div>
          <div class="row">
             <div class="col-md-12">
                  <div class="card">
                      <div class="card-header">
                         <h2>Contact View</h2>
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

                         @if(session()->has('delete_status'))
                           <div class="alert alert-danger alert-dismissible fade show" role="alert">
                               {{ session()->get('delete_status') }}
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                             </button>
                           </div>
                          @endif

                         @if(session()->has('udpate_status'))
                           <div class="alert alert-success alert-dismissible fade show" role="alert">
                               {{ session()->get('udpate_status') }}
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                             </button>
                           </div>
                         @endif

                        
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>SL No.</th>
                                  <th>Customer Name</th>
                                  <th>Email</th>
                                  <th>What's app Number</th>
                                  <th>Services</th>
                                  <th>Country</th>
                                  <th>Budget</th>
                                  <th>Message</th>
                                  <th>Action</th>
                                </tr>
                              </thead>

                    
                              <tbody>
                                  @forelse($customerinfo_all as $customerinfo)
                                  <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ Str::limit($customerinfo->buyer_name , 10) }}</td>
                                    <td>{{ $customerinfo->buyer_email }}</td>
                                    <td>{{ $customerinfo->buyer_country }}</td>
                                    <td>{{ $customerinfo->buyer_whatsapp_number }}</td>
                                    <td>{{ $customerinfo->buyer_services }}</td>
                                    <td>{{ $customerinfo->buyer_budget }} <strong>tk</strong></td>
                                    <td>{{ Str::limit($customerinfo->buyer_message , 10) }}</td>

                                    <td>
                                      <div class="btn-group" role="group" aria-label="Basic example">

                                        {{-- <a href = "{{ route('contactinfo.mail',$customerinfo->id) }}" type="button" class="btn btn-info">Mail Sent</a> || --}}
                                        <form action="{{ route('contact.destroy' , $customerinfo->id) }}" method="post">
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

@section('footer_scripts')

<script>
// $(document).ready(function() {
//     $('#data_tables').DataTable();
// } );
$(document).ready(function() {
    $('#data_tables_3').DataTable( {
        "scrollY":        "400px",
        "scrollCollapse": true,
        "paging":         false
    } );
} );
</script>

<script>
// $(document).ready(function() {
//     $('#data_tables').DataTable();
// } );
$(document).ready(function() {
    $('#data_tables_4').DataTable( {
        "scrollY":        "400px",
        "scrollCollapse": true,
        "paging":         false
    } );
} );
</script>

@endsection
