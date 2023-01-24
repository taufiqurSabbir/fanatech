@extends('layouts.dashboard_app')

@section('page_title')
 {{ ('Fexdvers | Team Add ') }}
@endsection

@section('team')
 active
@endsection

@section('dashboard_content')
  <!-- ########## START: MAIN PANEL ########## -->
  <div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <span class="breadcrumb-item active">Team Show</span>
      </nav>
    </div><!-- br-pageheader -->
    
    <div class="br-pagebody">
      <!-- start you own content here -->

       <div class="container-fluid">
         <div class="row">
           <div class="col-md-12">
              <h1 class = "text-center my-3">Team Page</h1>

              <div class="btn-group mb-2" role="group" aria-label="Basic example">
                <a href = "{{ route('teamMember.index') }}" type="button" class="btn btn-success">Add Team</a>
              </div>


           </div>
         </div>
         <div class="row">
            
          <div class="col-md-12">
               <div class="card">
                   <div class="card-header">
                      <h2>Team View</h2>
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
                       <div class="alert alert-warning alert-dismissible fade show" role="alert">
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
                               <th>Teacher Name</th>
                               <th>Expart</th>
                               <th>About</th>
                               <th>Department</th>
                               <th>Degree</th>
                               <th>Phone No.</th>
                               <th>Photo</th>
                               <th>Big Photo</th>
                               <th>Action</th>
                             </tr>
                           </thead>

                           <tbody>
                             @forelse($TeamMember_all as $TeamMember)
                             <tr>
                               <td>{{ $loop->index + 1 }}</td>
                               <td>{{ Str::limit($TeamMember->name , 15) }}</td>
                               <td>{{ $TeamMember->expert }}</td>
                               <td>{{ Str::limit($TeamMember->about , 30) }}</td>
                               <td>{{ $TeamMember->department }}</td>
                               <td>{{ $TeamMember->degree }}</td>
                               <td>{{ $TeamMember->phone }}</td>
                               <td>
                                 <img src="{{ asset('uploads/teamMember_photos') }}/{{ $TeamMember->image }}" alt="" width="100">
                               </td>

                               <td>
                                <img src="{{ asset('uploads/teamMember_photos') }}/{{ $TeamMember->big_image }}" alt="" width="100">
                              </td>

                               <td>

                                <div class="btn-group" role="group" aria-label="Basic example">
                                  <a href = "{{ route('teamMember.edit' , $TeamMember->id) }}" type="button" class="btn btn-primary">Edit</a>
                                  <form action="{{ route('teamMember.destroy',$TeamMember->id) }}" method="POST">
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

@section('footer_scripts')

<script>
// $(document).ready(function() {
//     $('#data_tables').DataTable();
// } );
$(document).ready(function() {
    $('#data_tables').DataTable( {
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
    $('#data_tables_2').DataTable( {
        "scrollY":        "400px",
        "scrollCollapse": true,
        "paging":         false
    } );
} );
</script>


<script>
  $("#checkAll").click(function () {
    $('input:checkbox').not(this).prop('checked', this.checked);
  });
  </script>
  
  <script>
  $("#checkall").click(function () {
    $('input:checkbox').not(this).prop('checked', this.checked);
  });
  </script>


@endsection
