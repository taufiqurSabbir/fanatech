@extends('layouts.dashboard_app')

@section('page_title')
{{ ('Fexdvers | Contact View') }}
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
        <span class="breadcrumb-item active">All Contacts</span>
      </nav>
    </div><!-- br-pageheader -->
    
    <div class="br-pagebody">
      <!-- start you own content here -->

      <div class="container">
        <div class="row">
          <div class="col-md-12">
             <h1 class = "text-center my-3">Contact View Page</h1>

                <div class="btn-group mb-2" role="group" aria-label="Basic example">
                    <a href="{{ route('contact.index') }}" class = "btn btn-info"> < Back to Contacts</a>
                </div>


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

                        <div class="form-group">
                          <label>Customer Name</label>
                          <input type="text" class="form-control" placeholder="Customer Name" value = "{{ $customer_info->buyer_name }}">
                        </div>

                        <div class="form-group">
                            <label>Customer Email</label>
                            <input type="text" class="form-control" placeholder="Customer Email" value = "{{ $customer_info->buyer_email }}">
                        </div>

                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" class="form-control" placeholder="Subject" value = "{{ $customer_info->buyer_subject }}">
                        </div>

                        <div class="form-group">
                            <label>Message</label>
                            <textarea rows="4" class="form-control">{{ $customer_info->buyer_message }}</textarea>
                        </div>
                      </div>
                  </div>
             </div>
          </div>
      </div>
    </div><!-- br-pagebody -->
  </div><!-- br-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->

@endsection