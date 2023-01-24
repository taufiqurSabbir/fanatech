@extends('layouts.dashboard_app')

@section('page_title')
{{ ('Fexdvers | Customer Contact') }}
@endsection

@section('contactInfo')
active
@endsection

@section('dashboard_content')


  <!-- ########## START: MAIN PANEL ########## -->
  <div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <span class="breadcrumb-item active">All Customers Contacts</span>
      </nav>
    </div><!-- br-pageheader -->
    
    <div class="br-pagebody">
      <!-- start you own content here -->

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
             <h1 class = "text-center my-3">Customer Contacts</h1>
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
                                 
                                  <th>Message</th>
                                  <th>Action</th>
                                </tr>
                              </thead>

                    
                              <tbody>
                                  @forelse($contactInfo_all as $contactInfo)
                                  <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ Str::limit($contactInfo->name , 10) }}</td>
                                    <td>{{ $contactInfo->email }}</td>
                                    <td>{{ $contactInfo->whatsapp_number }}</td>
                                    <td>{{ $contactInfo->services }}</td>
                                    <td>{{ $contactInfo->country }}</td>
                                   
                                    <td>{{ Str::limit($contactInfo->message , 10) }}</td>

                                    <td>
                                      <div class="btn-group" role="group" aria-label="Basic example">

                                        {{-- <a href = "{{ route('contactinfo.mail',$contactInfo->id) }}" type="button" class="btn btn-info">Mail Sent</a> || --}}
                                        <form action="{{ route('contactInfo.destroy' , $contactInfo->id) }}" method="post">
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
