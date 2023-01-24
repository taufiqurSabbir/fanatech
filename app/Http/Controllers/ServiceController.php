<?php

namespace App\Http\Controllers;

use Image;
use Carbon\Carbon;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.services.index');
    }

    public function serviceViewAll(){
        return view('admin.services.show' , [
            'services_all' => Service::Latest()->get()
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

        $services_id = Service::insertGetId($request->except('_token' , 'icon') + [
            'status' => 1,
            'created_at' => Carbon::now(),
        ]);
        
        if($request->hasFile('icon')){
            $uploaded_photo = $request->file('icon');
            $new_photo_name = $services_id.'-'.Str::random(3).".".$uploaded_photo->extension();

            $new_photo_location = 'public/uploads/icon_photos/'.$new_photo_name;
            Image::make($uploaded_photo)->resize(150,150)->save(base_path($new_photo_location) , 90);
            Service::find($services_id)->update([
                'icon' => $new_photo_name
        ]);

        }
    
        return redirect('/service-view-all')->with('success_status','Services Insert SuccessFully!!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit',[
            'services_info' => $service
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $service->update($request->except('_token' , '_method' , 'icon'));

        if($request->hasFile('icon')){
            if($service->icon != null){
              // delete photo
              $old_location = 'public/uploads/icon_photos/'.$service->icon; 
              unlink(base_path($old_location));
  
              $uploaded_photo = $request->file('icon');
              $new_photo_name = $service->id.'-'.Str::random(3).".".$uploaded_photo->extension();
              $new_photo_location = 'public/uploads/icon_photos/'.$new_photo_name;
              Image::make($uploaded_photo)->resize(150,150)->save(base_path($new_photo_location) , 70);
              Service::find($service->id)->update([
                'icon' => $new_photo_name
              ]);
            }
          }
          
        
        return redirect('/service-view-all')->with('update_status' , 'Services Update Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return back()->with('delete_status','Service Delete SuccessFully!!');
    }
}
