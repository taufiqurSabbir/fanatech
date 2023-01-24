@extends('layouts.dashboard_app')
@section('page_title')
    {{ ('Fexdvers | Mail Sent Edit') }}
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
        <span class="breadcrumb-item active">Edit Notice</span>
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



                  <form method="post" action = "{{ route('mail.sent') }}">
                    @csrf

                    <div class="form-group">
                      <label>Email Address</label>
                      <input type="email" class="form-control" placeholder="Mail Sent Title" name = "email" value = "{{ $subscribemail->email }}">
                      @error ('email')
                        <span class = "text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label>Mail</label>
                    
                      <textarea name="mail_sent" rows="6" class="form-control" placeholder="Write Mail"></textarea>
                      @error ('mail')
                        <span class = "text-danger">{{ $message }}</span>
                      @enderror
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
