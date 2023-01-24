@extends('layouts.dashboard_app')
@section('page_title')
    {{ ('Fexdvers | Team Edit') }}
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
        <span class="breadcrumb-item active">Team Edit</span>
      </nav>
    </div><!-- br-pageheader -->
    
    <div class="br-pagebody">
      <!-- start you own content here -->

       <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                   <h2>Edit Team Member</h2>
                </div>
                <div class="card-body">

                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('teamMember.index') }}">Team Member : {{ $teamMember_info->name }}</a></li>
                    </ol>
                  </nav>

                  <form method="post" action = "{{ route('teamMember.update' , $teamMember_info->id) }}" enctype="multipart/form-data">
                   @csrf
                   @method('PATCH')

                   @if(session()->has('success_status'))
                     <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('success_status') }}
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                   @endif

                   <div class="row">
                     <div class="col-md-6">
                       <div class="form-group">
                         <label>Team Member Name</label>
                         <input type="text" class="form-control" placeholder="Team Member Name" name = "name" value = "{{ $teamMember_info->name }}">
                         @error ('name')
                           <span class = "text-danger">{{ $message }}</span>
                         @enderror
                       </div>
                     </div>
                     <div class="col-md-6">
                       <div class="form-group">
                         <label>Expert</label>
                         <input type="text" class="form-control" placeholder="Expert" name = "expert" value = "{{ $teamMember_info->expert }}">
                         @error ('expert')
                           <span class = "text-danger">{{ $message }}</span>
                         @enderror
                       </div>
                     </div>
                   </div>

                   <div class="row">
                     <div class="col-md-6">
                       <div class="form-group">
                         <label> LinkedIn Link (Optional)</label>
                         <input type="text" class="form-control" placeholder="LinkedIn Link" name = "ln_three" value = "{{ $teamMember_info->ln_three }}">
                       
                       </div>
                     </div>

                     <div class="col-md-6">
                       <div class="form-group">
                         <label>Facebook Link (Optional)</label>
                         <input type="text" class="form-control" placeholder="Facebook Link" name = "fb_one" value = "{{ $teamMember_info->fb_one }}">
                        
                       </div>
                     </div>
                   </div>

                   <div class="row">
                     <div class="col-md-6">
                       <div class="form-group">
                         <label>Instragram (Optional)</label>
                         <input type="text" class="form-control" placeholder="Instragram" name = "ins_two" value = "{{ $teamMember_info->ins_two }}">
                       </div>
                     </div>

                     <div class="col-md-6">
                       <div class="form-group">
                         <label>Drible (Optional)</label>
                         <input type="text" class="form-control" placeholder="Drible" name = "de_four" value = "{{ $teamMember_info->de_four }}">
                       </div>
                     </div>
                   </div>


                   <div class="row">
                     <div class="col-md-6">
                       <div class="form-group">
                         <label>Degree</label>
                         <input type="text" class="form-control" placeholder="Degree" name = "degree" value = "{{ $teamMember_info->degree }}">
                         @error ('degree')
                           <span class = "text-danger">{{ $message }}</span>
                         @enderror
                       </div>
                     </div>
                     <div class="col-md-6">
                       <div class="form-group">
                         <label>Experience</label>
                         <input type="text" class="form-control" placeholder="Experience" name = "experience" value = "{{ $teamMember_info->experience }}">
                         @error ('experience')
                           <span class = "text-danger">{{ $message }}</span>
                         @enderror
                       </div>
                     </div>
                   </div>


                   <div class="row">
                     <div class="col-md-6">
                       <div class="form-group">
                         <label>Department</label>
                         <input type="text" class="form-control" placeholder="Department" name = "department" value = "{{ $teamMember_info->department }}">
                         @error ('department')
                           <span class = "text-danger">{{ $message }}</span>
                         @enderror
                       </div>
                     </div>

                     <div class="col-md-6">
                       <div class="form-group">
                         <label>Email</label>
                         <input type="text" class="form-control" placeholder="Email" name = "email" value = "{{ $teamMember_info->email }}">
                         @error ('email')
                           <span class = "text-danger">{{ $message }}</span>
                         @enderror
                       </div>
                     </div>
                   </div>

                   <div class="row">
                     <div class="col-md-6">
                       <div class="form-group">
                         <label>Phone</label>
                         <input type="text" class="form-control" placeholder="Phone" name = "phone" value = "{{ $teamMember_info->phone }}">
                         @error ('phone')
                           <span class = "text-danger">{{ $message }}</span>
                         @enderror
                       </div>
                     </div>

                     <div class="col-md-6">
                       <div class="form-group">
                         <label>Skype</label>
                         <input type="text" class="form-control" placeholder="Skype" name = "skype" value = "{{ $teamMember_info->skype }}">
                         @error ('skype')
                           <span class = "text-danger">{{ $message }}</span>
                         @enderror
                       </div>
                     </div>
                   </div>


                   <div class="row">
                     <div class="col-md-6">
                       <div class="form-group">
                         <label>Language Percentage</label>
                         <input type="number" class="form-control" placeholder="Language Percentage" name = "language_per" value = "{{ $teamMember_info->language_per }}" required>
                         @error ('language_per')
                           <span class = "text-danger">{{ $message }}</span>
                         @enderror
                       </div>
                     </div>

                     <div class="col-md-6">
                       <div class="form-group">
                         <label>Team Percentage</label>
                         <input type="number" class="form-control" placeholder="Team Percentage" name = "team_per" value = "{{ $teamMember_info->team_per }}" required>
                         @error ('team_per')
                           <span class = "text-danger">{{ $message }}</span>
                         @enderror
                       </div>
                     </div>
                   </div>

                   <div class="row">
                     <div class="col-md-6">
                       <div class="form-group">
                         <label>Development Percentage</label>
                         <input type="number" class="form-control" placeholder="Development Percentage" name = "development_per" value = "{{ $teamMember_info->development_per }}" required>
                         @error ('development_per')
                           <span class = "text-danger">{{ $message }}</span>
                         @enderror
                       </div>
                     </div>

                     <div class="col-md-6">
                       <div class="form-group">
                         <label>Design Percentage</label>
                         <input type="number" class="form-control" placeholder="Design Percentage" name = "design_per" value = "{{ $teamMember_info->design_per }}" required>
                         @error ('design_per')
                           <span class = "text-danger">{{ $message }}</span>
                         @enderror
                       </div>
                     </div>
                   </div>


                   <div class="row">
                     <div class="col-md-6">
                       <div class="form-group">
                         <label>Innovation Percentage</label>
                         <input type="number" class="form-control" placeholder="Innovation Percentage" name = "innovation_per" value = "{{ $teamMember_info->innovation_per }}" required>
                         @error ('innovation_per')
                           <span class = "text-danger">{{ $message }}</span>
                         @enderror
                       </div>
                     </div>

                     <div class="col-md-6">
                       <div class="form-group">
                         <label>Communication Percentage</label>
                         <input type="number" class="form-control" placeholder="Communication Percentage" name = "communication_per" value = "{{ $teamMember_info->communication_per }}" required>
                         @error ('communication_per')
                           <span class = "text-danger">{{ $message }}</span>
                         @enderror
                       </div>
                     </div>
                   </div>

                   <div class="row">
                     <div class="col-md-6">
                       <div class="form-group">
                         <label>Team Member about</label>
                         <textarea name="about" id="" rows="4" class="form-control" placeholder="Team Member About">{{ $teamMember_info->about }}</textarea>
                         @error ('about')
                           <span class = "text-danger">{{ $message }}</span>
                         @enderror
                       </div>
                     </div>

                     <div class="col-md-6">
                       <div class="form-group">
                         <label>Team Member Hobbies</label>
                         <textarea name="hobbies" id="" rows="4" class="form-control" placeholder="Team Member Hobbies">{{ $teamMember_info->hobbies }}</textarea>
                         @error ('hobbies')
                           <span class = "text-danger">{{ $message }}</span>
                         @enderror
                       </div>
                     </div>
                   </div>

                   <div class="form-group">
                     <label>Faculty </label>
                     <textarea name="faculty" id="" rows="4" class="form-control" placeholder="Faculty">{{ $teamMember_info->faculty }}</textarea>
                     @error ('faculty')
                       <span class = "text-danger">{{ $message }}</span>
                     @enderror
                   </div>

                   <div class="form-group">
                     <label>Team Member Photo</label>
                     <input type="file" class="form-control" name="image">

                      <img src="{{ asset('uploads/teamMember_photos') }}/{{ $teamMember_info->image }}" alt="" width="100" class="m-2">
                   </div>


                   <div class="form-group">
                     <label>Team Member Big Photo</label>
                     <input type="file" class="form-control" name="big_image">
                     <img src="{{ asset('uploads/teamMember_photos') }}/{{ $teamMember_info->big_image }}" alt="" width="100" class="m-2">
                   </div>


                   <button type="submit" class="btn btn-primary">Update Team Member</button>
                 </form>
                 

                </div>
           </div>
          </div>

        </div>
       </div>

     </div><!-- sl-pagebody -->
   </div><!-- sl-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->

@endsection
