<?php

namespace App\Http\Controllers;

use Image;
use Carbon\Carbon;
use App\Models\AboutPage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.aboutPage.index');
    }

    public function aboutPageViewAll(){
        return view('admin.aboutPage.show' , [
            'aboutPage_all' => AboutPage::Latest()->get()
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
            'image' => 'required',
        ]);
    
        $banner_id = AboutPage::insertGetId($request->except('_token' , 'image') + [
          'status' => 1,
          'created_at' => Carbon::now(),
        ]);

        if($request->hasFile('image')){
            $uploaded_photo = $request->file('image');
            $new_photo_name = $banner_id.'-'.Str::random(3).".".$uploaded_photo->extension();

            $new_photo_location = 'public/uploads/aboutPage_photos/'.$new_photo_name;
            Image::make($uploaded_photo)->resize(1920,917)->save(base_path($new_photo_location) , 90);
            AboutPage::find($banner_id)->update([
                'image' => $new_photo_name
        ]);

        }
        return redirect('/aboutPage-view-all')->with('success_status','aboutPage Insert SuccessFully!!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutPage  $aboutPage
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutPage $aboutPage)
    {
        return view('admin.aboutPage.edit',[
            'aboutPage_info' => $aboutPage
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutPage  $aboutPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutPage $aboutPage)
    {
        $aboutPage->update($request->except('_token' , '_method' , 'image'));
        if($request->hasFile('image')){
          if($aboutPage->image != null){
            // delete photo
            $old_location = 'public/uploads/aboutPage_photos/'.$aboutPage->image;
            unlink(base_path($old_location));

            $uploaded_photo = $request->file('image');
            $new_photo_name = $aboutPage->id.'-'.Str::random(3).".".$uploaded_photo->extension();
            $new_photo_location = 'public/uploads/aboutPage_photos/'.$new_photo_name;
            Image::make($uploaded_photo)->resize(1920,917)->save(base_path($new_photo_location) , 70);
            AboutPage::find($aboutPage->id)->update([
              'image' => $new_photo_name
            ]);
          }
        }
        return redirect('/aboutPage-view-all')->with('update_status' , 'aboutPage Update Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutPage  $aboutPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutPage $aboutPage)
    {
        $aboutPage->delete();
        return back()->with('delete_status','Banner Delete SuccessFully!!');
    }
}
