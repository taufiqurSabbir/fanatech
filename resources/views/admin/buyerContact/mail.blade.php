@extends('layouts.dashboard_app')
@section('page_title')
    {{ ('Fexdvers | Mail Sent') }}
@endsection
@section('Mail Sent')
  active
@endsection

@section('dashboard_content')

  <!-- ########## START: MAIN PANEL ########## -->
  <div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <span class="breadcrumb-item active">Contact Mail Sent</span>
      </nav>
    </div><!-- br-pageheader -->
    


       <div class="container">
         <div class="row">
           <div class="col-md-12">
             <div class="card">
                 <div class="card-header">
                    <h2>Mail Sent</h2>
                 </div>
                 <div class="card-body">

                   <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                       {{-- <li class="breadcrumb-item"><a href="{{ route('Mail Sent.index') }}">Mail Sent : {{ $Mail Sent_info->date }}</a></li> --}}
                     </ol>
                   </nav>

                   @if(session()->has('success_status'))
                   <div class="alert alert-success alert-dismissible fade show" role="alert">
                       {{ session()->get('success_status') }}
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                     </button>
                   </div>
                  @endif



                  <form method="post" action = "{{ route('contactinfo.sent') }}">
                    @csrf

                    <div class="form-group">
                      <label>Email Address</label>
                      <input type="email" class="form-control" placeholder="Mail Sent Title" name = "email" value = "{{ $contactinfo->buyer_email }}">
                    </div>

                    <div class="form-group">
                      <label> Subject </label>
                      <input type="text" class="form-control" value = "{{ $contactinfo->buyer_subject }}">
                    </div>

                    <div class="form-group">
                      <label>Message </label>
                      <input type="text" class="form-control" value = "{{ $contactinfo->buyer_message }}">
                    </div>

                    <div class="form-group">
                      <label>Contact Reply (Mail) </label>
                      <textarea name="mail_sent" rows="6" class="form-control" placeholder="Write Mail"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Mail Sent</button>
                  </form>

                 </div>
            </div>
           </div>

         </div>
       </div>

   </div><!-- sl-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->

@endsection
