<?php

namespace App\Http\Controllers;

use Image;
use Carbon\Carbon;
use App\Models\TeamMember;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.team.index');
    }

    public function teamMemberViewAll(){
        return view('admin.team.show' , [
            'TeamMember_all' => TeamMember::Latest()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $request->validate([
            'name' => 'required',
            'expert' => 'required',
            'image' => 'required',
            'about' => 'required',
            'degree' => 'required',
            'experience' => 'required',
            'hobbies' => 'required',
            'faculty' => 'required',
            'department' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'skype' => 'required',
            'language_per' => 'required',
            'team_per' => 'required',
            'development_per' => 'required',
            'design_per' => 'required',
            'innovation_per' => 'required',
            'communication_per' => 'required',
        ]);
    
        $TeamMember_id = TeamMember::insertGetId($request->except('_token' , 'image') + [
          'created_at' => Carbon::now(),
          'status' => 1,
        ]);

        if($request->hasFile('image')){
            $uploaded_photo = $request->file('image');
            $new_photo_name = $TeamMember_id.'-'.Str::random(3).".".$uploaded_photo->extension();
            $new_photo_location = 'public/uploads/teamMember_photos/'.$new_photo_name;
            Image::make($uploaded_photo)->resize(270,270)->save(base_path($new_photo_location) , 60);
            TeamMember::find($TeamMember_id)->update([
                'image' => $new_photo_name
        ]);

        if($request->hasFile('big_image')){
              $uploaded_photo = $request->file('big_image');
              $new_photo_name = $TeamMember_id.'-'.Str::random(4).".".$uploaded_photo->extension();

              $new_photo_location = 'public/uploads/teamMember_photos/'.$new_photo_name;
              Image::make($uploaded_photo)->resize(489,499)->save(base_path($new_photo_location) , 90);
              TeamMember::find($TeamMember_id)->update([
                  'big_image' => $new_photo_name
              ]);
        }
      }
        return redirect('/teamMember-view-all')->with('success_status','Team Member Insert SuccessFully!!');
        
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeamMember  $teamMember
     * @return \Illuminate\Http\Response
     */
    public function edit(TeamMember $teamMember)
    {
        return view('admin.team.edit',[
            'teamMember_info' => $teamMember
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TeamMember  $teamMember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeamMember $teamMember)
    {
        $teamMember->update($request->except('_token' , '_method' , 'image' , 'big_image'));

        if($request->hasFile('image')){
          if($teamMember->image != null){
            // delete photo
            $old_location = 'public/uploads/teamMember_photos/'.$teamMember->image;
            unlink(base_path($old_location));

            $uploaded_photo = $request->file('image');
            $new_photo_name = $teamMember->id.'-'.Str::random(3).".".$uploaded_photo->extension();
            $new_photo_location = 'public/uploads/teamMember_photos/'.$new_photo_name;
            Image::make($uploaded_photo)->resize(270,270)->save(base_path($new_photo_location) , 80);
            TeamMember::find($teamMember->id)->update([
              'image' => $new_photo_name
            ]);
          }
        }


        if($request->hasFile('big_image')){
            if($teamMember->image != null){
              // delete photo
              $old_location = 'public/uploads/teamMember_photos/'.$teamMember->big_image;
              unlink(base_path($old_location));
  
              $uploaded_photo = $request->file('big_image');
              $new_photo_name = $teamMember->id.'-'.Str::random(4).".".$uploaded_photo->extension();
              $new_photo_location = 'public/uploads/teamMember_photos/'.$new_photo_name;
              Image::make($uploaded_photo)->resize(489,499)->save(base_path($new_photo_location) , 80);
              teamMember::find($teamMember->id)->update([
                'big_image' => $new_photo_name
              ]);
            }
          }


        return redirect('/teamMember-view-all')->with('udpate_status' , 'Teacher Update Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeamMember  $teamMember
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamMember $teamMember)
    {
        $teamMember->delete();
        return back()->with('delete_status','Course Delete SuccessFully!!');
    }
}
