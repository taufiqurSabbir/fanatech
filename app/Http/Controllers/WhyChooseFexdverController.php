<?php

namespace App\Http\Controllers;

use Image;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\WhyChooseFexdver;

class WhyChooseFexdverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.whychoosefexdvers.index');
    }

    public function whyview(){
        return view('admin.whychoosefexdvers.show' , [
            'whychoosefexdversViewAll_all' => WhyChooseFexdver::Latest()->get()
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
            'icon' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        $services_id = WhyChooseFexdver::insertGetId($request->except('_token' , 'icon') + [
            'created_at' => Carbon::now(),
        ]);
        
        if($request->hasFile('icon')){
            $uploaded_photo = $request->file('icon');
            $new_photo_name = $services_id.'-'.Str::random(3).".".$uploaded_photo->extension();

            $new_photo_location = 'public/uploads/whychoosefexdvers_photos/'.$new_photo_name;
            Image::make($uploaded_photo)->resize(250,250)->save(base_path($new_photo_location) , 90);
            WhyChooseFexdver::find($services_id)->update([
                'icon' => $new_photo_name
        ]);

        }
        return redirect('/whychoosefexdvers-view-all')->with('success_status','WhyChooseFexdver Insert SuccessFully!!');
    }

    public function whyEdit($id)  {
        $whychoosefexdvers = WhyChooseFexdver::find($id);
        return view('admin.whychoosefexdvers.edit', compact('whychoosefexdvers'));
    }


    public function whyUpdate(Request $request , $id) {
        $whychoosefexdvers = WhyChooseFexdver::find($id);
        WhyChooseFexdver::find($id)->update($request->except('_method'));

        if($request->hasFile('icon')){
            if($whychoosefexdvers->icon != null){
              // delete photo
              $old_location = 'public/uploads/whychoosefexdvers_photos/'.$whychoosefexdvers->icon; 
              unlink(base_path($old_location));
  
              $uploaded_photo = $request->file('icon');
              $new_photo_name = $whychoosefexdvers->id.'-'.Str::random(3).".".$uploaded_photo->extension();
              $new_photo_location = 'public/uploads/whychoosefexdvers_photos/'.$new_photo_name;
              Image::make($uploaded_photo)->resize(250,250)->save(base_path($new_photo_location) , 70);
              WhyChooseFexdver::find($whychoosefexdvers->id)->update([
                'icon' => $new_photo_name
              ]);
            }
        }
        return redirect('/whychoosefexdvers-view-all')->with('update_status' , 'Whychoosefexdvers Update Successfully!!');
    }

    public function whyDelete($id) {
        WhyChooseFexdver::find($id)->delete();
        return back()->with('delete_status','About Us Delete SuccessFully!!');
    }
   



   
}
