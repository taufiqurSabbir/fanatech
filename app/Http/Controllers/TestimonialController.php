<?php

namespace App\Http\Controllers;

use Image;
use Carbon\Carbon;
use App\Models\Testimonial;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.testimonial.index');
    }

    public function testimonialViewAll(){
        return view('admin.testimonial.show' , [
            'testimonials_all' => Testimonial::Latest()->get()
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
            'position' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $testimonial_id = Testimonial::insertGetId($request->except('_token' , 'image') + [
            'status' => 1,
            'created_at' => Carbon::now(),
          ]);

          if($request->hasFile('image')){
            $uploaded_photo = $request->file('image');
            $new_photo_name = $testimonial_id.'-'.Str::random(3).".".$uploaded_photo->extension();

            $new_photo_location = 'public/uploads/testimonial_photos/'.$new_photo_name;
            Image::make($uploaded_photo)->resize(533,533)->save(base_path($new_photo_location) , 95);
            Testimonial::find($testimonial_id)->update([
              'image' => $new_photo_name
            ]);
          }
          return redirect('/testimonial-view-all')->with('update_status','Testimonial Insert SuccessFully!!');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonial.edit' ,[
            'testimonial_info' => $testimonial,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $testimonial->update($request->except('_token' , '_method' , 'image'));
        if($request->hasFile('image')){
          if($testimonial->product_photo != null){
            // delete photo
            $old_location = 'public/uploads/testimonial_photos/'.$testimonial->image;
            unlink(base_path($old_location));
          }
          $uploaded_photo = $request->file('image');
          $new_photo_name = $testimonial->id.'-'.Str::random(3).".".$uploaded_photo->extension();
          $new_photo_location = 'public/uploads/testimonial_photos/'.$new_photo_name;
          Image::make($uploaded_photo)->resize(533,533)->save(base_path($new_photo_location) , 95);
          $testimonial->update([
            'image' => $new_photo_name
          ]);
        }
        return redirect('/testimonial-view-all')->with('success_status' , 'Testimonial Update Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return back()->with('delete_status','Testimonial Delete SuccessFully!!');
    }
}
