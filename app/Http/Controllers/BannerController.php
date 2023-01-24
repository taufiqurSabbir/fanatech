<?php

namespace App\Http\Controllers;

use Image;
use Carbon\Carbon;
use App\Models\Banner;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.banner.index');
    }

    public function bannerViewAll(){
        return view('admin.banner.show' , [
            'banners_all' => Banner::Latest()->get()
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
            'title' => 'required',
            'description' => 'required',
            'button' => 'required',
            'link' => 'required',
            'image' => 'required',
        ]);
    
        $banner_id = Banner::insertGetId($request->except('_token' , 'image') + [
          'created_at' => Carbon::now(),
          'status' => 1,
        ]);

        if($request->hasFile('image')){
            $uploaded_photo = $request->file('image');
            $new_photo_name = $banner_id.'-'.Str::random(3).".".$uploaded_photo->extension();

            $new_photo_location = 'public/uploads/banner_photos/'.$new_photo_name;
            Image::make($uploaded_photo)->resize(1920,917)->save(base_path($new_photo_location) , 90);
            Banner::find($banner_id)->update([
                'image' => $new_photo_name
        ]);

        }
        return redirect('/banner-view-all')->with('success_status','Banner Insert SuccessFully!!');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('admin.banner.edit',[
            'banner_info' => $banner
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        $banner->update($request->except('_token' , '_method' , 'image'));
        if($request->hasFile('image')){
          if($banner->image != null){
            // delete photo
            $old_location = 'public/uploads/banner_photos/'.$banner->image;
            unlink(base_path($old_location));

            $uploaded_photo = $request->file('image');
            $new_photo_name = $banner->id.'-'.Str::random(3).".".$uploaded_photo->extension();
            $new_photo_location = 'public/uploads/banner_photos/'.$new_photo_name;
            Image::make($uploaded_photo)->resize(1920,917)->save(base_path($new_photo_location) , 70);
            Banner::find($banner->id)->update([
              'image' => $new_photo_name
            ]);
          }
        }
        return redirect('/banner-view-all')->with('update_status' , 'Banner Update Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();
        return back()->with('delete_status','Banner Delete SuccessFully!!');
    }
}
