@extends('layouts.dashboard_app')

@section('page_title')
{{ 'Fexdvers | Home' }}
@endsection

@section('dashboard_content')

  <!-- ########## START: MAIN PANEL ########## -->
  <div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <span class="breadcrumb-item active">All Users</span>
      </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
      <h4 class="tx-gray-800 mg-b-5">Dashboard Page ( All Users : )</h4>
      @if (Auth::user()->role == 1)
      <p class="mg-b-0">You Are a Admin.</p>
      @else
      <p class="mg-b-0">You Are a Modaretor.</p>
      @endif
    </div>

    <div class="br-pagebody">
      <!-- start you own content here -->

      <div class="col-lg-12 mb-3">
        @if(session()->has('success_status'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
           {{ session()->get('success_status') }}
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
       @endif

     


      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <div class="table-wrapper">
              <table id="datatable1" class="table display responsive nowrap">
                <thead>
                  <tr>
                    <th class="wd-15p">User Name</th>
                    <th class="wd-15p">ID No.</th>
                    <th class="wd-20p">User Email</th>
                    <th class="wd-15p">Created Date</th>
                    <th class="wd-10p">Updated Date</th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
            </div><!-- table-wrapper -->

          </div>
        </div>
      </div>
    </div><!-- br-pagebody -->
  </div><!-- br-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## --> 
@endsection