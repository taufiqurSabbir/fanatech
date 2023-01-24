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
        <span class="breadcrumb-item active">Team Add</span>
      </nav>
    </div><!-- br-pageheader -->
    
    <div class="br-pagebody">
      <!-- start you own content here -->

       <div class="container-fluid">
         <div class="row">
           <div class="col-md-12">
              <h1 class = "text-center my-3">Team Page</h1>

              <div class="btn-group mb-2" role="group" aria-label="Basic example">
                <a href = "{{ route('teamMember.teamMemberViewAll') }}" type="button" class="btn btn-primary">All Team</a>
              </div>

           </div>

         </div>
           <div class="row">

            <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                     <h2>Team Add</h2>
                  </div>
                  <div class="card-body">

                    <form method="post" action = "{{ route('teamMember.store') }}" enctype="multipart/form-data">
                      @csrf

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
                            <label>Team Name</label>
                            <input type="text" class="form-control" placeholder="Team Name" name = "name" value = "{{ old('name') }}">
                            @error ('name')
                              <span class = "text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Expert</label>
                            <input type="text" class="form-control" placeholder="Expert" name = "expert" value = "{{ old('expert') }}">
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
                            <input type="text" class="form-control" placeholder="LinkedIn Link" name = "ln_three" value = "{{ old('ln_three') }}">
                          
                          
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Facebook Link (Optional)</label>
                            <input type="text" class="form-control" placeholder="Facebook Link" name = "fb_one" value = "{{ old('fb_one') }}">
                          
                           
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Instragram (Optional)</label>
                            <input type="text" class="form-control" placeholder="Instragram Link" name = "ins_two" value = "{{ old('ins_two') }}">
                          
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Drible (Optional)</label>
                            <input type="text" class="form-control" placeholder="Drible Link" name = "de_four" value = "{{ old('de_four') }}">
                          
                          </div>
                        </div>
                      </div>

                     

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Degree</label>
                            <input type="text" class="form-control" placeholder="Degree" name = "degree" value = "{{ old('degree') }}">
                            @error ('degree')
                              <span class = "text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Experience</label>
                            <input type="text" class="form-control" placeholder="Experience" name = "experience" value = "{{ old('experience') }}">
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
                            <input type="text" class="form-control" placeholder="Department" name = "department" value = "{{ old('department') }}">
                            @error ('department')
                              <span class = "text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" placeholder="Email" name = "email" value = "{{ old('email') }}">
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
                            <input type="text" class="form-control" placeholder="Phone" name = "phone" value = "{{ old('phone') }}">
                            @error ('phone')
                              <span class = "text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Skype</label>
                            <input type="text" class="form-control" placeholder="Skype" name = "skype" value = "{{ old('skype') }}">
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
                            <input type="number" class="form-control" placeholder="Language Percentage" name = "language_per" value = "{{ old('language_per') }}" required>
                            @error ('language_per')
                              <span class = "text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Team Percentage</label>
                            <input type="number" class="form-control" placeholder="Team Percentage" name = "team_per" value = "{{ old('team_per') }}" required>
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
                            <input type="number" class="form-control" placeholder="Development Percentage" name = "development_per" value = "{{ old('development_per') }}" required>
                            @error ('development_per')
                              <span class = "text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Design Percentage</label>
                            <input type="number" class="form-control" placeholder="Design Percentage" name = "design_per" value = "{{ old('design_per') }}" required>
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
                            <input type="number" class="form-control" placeholder="Innovation Percentage" name = "innovation_per" value = "{{ old('innovation_per') }}" required>
                            @error ('innovation_per')
                              <span class = "text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Communication Percentage</label>
                            <input type="number" class="form-control" placeholder="Communication Percentage" name = "communication_per" value = "{{ old('communication_per') }}" required>
                            @error ('communication_per')
                              <span class = "text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Member About</label>
                            <textarea name="about" id="" rows="4" class="form-control" placeholder="Member About">{{ old('about') }}</textarea>
                            @error ('about')
                              <span class = "text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Member Hobbies</label>
                            <textarea name="hobbies" id="" rows="4" class="form-control" placeholder="Member Hobbies">{{ old('hobbies') }}</textarea>
                            @error ('hobbies')
                              <span class = "text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label>Faculty </label>
                        <textarea name="faculty" id="" rows="4" class="form-control" placeholder="Faculty">{{ old('faculty') }}</textarea>
                        @error ('faculty')
                          <span class = "text-danger">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label>Member Photo</label>
                        <input type="file" class="form-control" name="image">
                         @error ('image')
                          <span class = "text-danger">{{ $message }}</span>
                         @enderror
                      </div>


                      <div class="form-group">
                        <label>Member Big Photo</label>
                        <input type="file" class="form-control" name="big_image">
                      </div>
                      
                      <button type="submit" class="btn btn-primary">Add Member</button>
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
