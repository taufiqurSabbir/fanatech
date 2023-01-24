<?php

namespace App\Http\Controllers;

use Image;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\MultipleBusinessBrand;

class MultipleBusinessBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.multipleBusinessBrand.index' , [
            'multipleBusinessBrands_all' => MultipleBusinessBrand::Latest()->get()
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
            'brand_link' => 'required',
            'brand_logo' => 'required',
           
        ]);
    
        $banner_id = MultipleBusinessBrand::insertGetId($request->except('_token' , 'brand_logo') + [
            'status' => 1,
          'created_at' => Carbon::now(),
        ]);

        if($request->hasFile('brand_logo')){
            $uploaded_photo = $request->file('brand_logo');
            $new_photo_name = $banner_id.'-'.Str::random(3).".".$uploaded_photo->extension();

            $new_photo_location = 'public/uploads/multipleBusinessBrand_photos/'.$new_photo_name;
            Image::make($uploaded_photo)->resize(250,200)->save(base_path($new_photo_location) , 90);
            MultipleBusinessBrand::find($banner_id)->update([
                'brand_logo' => $new_photo_name
        ]);

        }
        return back()->with('success_status','MultipleBusinessBrand Insert SuccessFully!!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MultipleBusinessBrand  $multipleBusinessBrand
     * @return \Illuminate\Http\Response
     */
    public function edit(MultipleBusinessBrand $multipleBusinessBrand)
    {
        return view('admin.multipleBusinessBrand.edit',[
            'multipleBusinessBrand_info' => $multipleBusinessBrand
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MultipleBusinessBrand  $multipleBusinessBrand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MultipleBusinessBrand $multipleBusinessBrand)
    {
        $multipleBusinessBrand->update($request->except('_token' , '_method' , 'brand_logo'));
        if($request->hasFile('brand_logo')){
          if($multipleBusinessBrand->brand_logo != null){
            // delete photo
            $old_location = 'public/uploads/multipleBusinessBrand_photos/'.$multipleBusinessBrand->brand_logo;
            unlink(base_path($old_location));

            $uploaded_photo = $request->file('brand_logo');
            $new_photo_name = $multipleBusinessBrand->id.'-'.Str::random(3).".".$uploaded_photo->extension();
            $new_photo_location = 'public/uploads/multipleBusinessBrand_photos/'.$new_photo_name;
            Image::make($uploaded_photo)->resize(250,200)->save(base_path($new_photo_location) , 70);
            multipleBusinessBrand::find($multipleBusinessBrand->id)->update([
              'brand_logo' => $new_photo_name
            ]);
          }
        }
        return redirect('/multipleBusinessBrand')->with('update_status' , 'Multiple Business Brand Update Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MultipleBusinessBrand  $multipleBusinessBrand
     * @return \Illuminate\Http\Response
     */
    public function destroy(MultipleBusinessBrand $multipleBusinessBrand)
    {
        $multipleBusinessBrand->delete();
        return back()->with('delete_status','Service Delete SuccessFully!!');
    }
}
