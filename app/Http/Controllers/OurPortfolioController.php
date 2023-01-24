<?php

namespace App\Http\Controllers;

use Image;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\OurPortfolio;
use Illuminate\Http\Request;

class OurPortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.ourPortfolio.index');
    }

    public function ourPortfolioViewAll(){
        return view('admin.ourPortfolio.show' , [
            'ourPortfolios_all' => OurPortfolio::Latest()->get()
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
            'title' => 'required' , 'unique:ourPortfolios,title',
            'category_name' => 'required',
            'button' => 'required',
            'link' => 'required',
            'image' => 'required',
            'big_image' => 'required',
          ]);
          
           $ourPortfolio_id = OurPortfolio::insertGetId($request->except('_token' , 'image' , 'big_image') + [
             'status' => 1,
             'created_at' => Carbon::now(),
           ]);
           
            if($request->hasFile('image')){
              $uploaded_photo = $request->file('image');
              $new_photo_name = $ourPortfolio_id.'-'.Str::random(3).".".$uploaded_photo->extension();
              $new_photo_location = 'public/uploads/ourPortfolio_photos/'.$new_photo_name;
              Image::make($uploaded_photo)->resize(500,385)->save(base_path($new_photo_location) , 40);
              OurPortfolio::find($ourPortfolio_id)->update([
                'image' => $new_photo_name
              ]);

            }

            if($request->hasFile('big_image')){
              $uploaded_photo = $request->file('big_image');
              $new_photo_name = $ourPortfolio_id.'-'.Str::random(4).".".$uploaded_photo->extension();
              $new_photo_location = 'public/uploads/ourPortfolio_big_photos/'.$new_photo_name;
              Image::make($uploaded_photo)->resize(500,385)->save(base_path($new_photo_location) , 40);
              OurPortfolio::find($ourPortfolio_id)->update([
                'big_image' => $new_photo_name
              ]);

            } 
         return redirect('/ourPortfolio-view-all')->with('success_message' , 'OurPortfolio Insert SuccessFully!!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OurPortfolio  $ourPortfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(OurPortfolio $ourPortfolio)
    {
        return view('admin.ourPortfolio.edit',[
            'ourPortfolio_info' => $ourPortfolio
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OurPortfolio  $ourPortfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OurPortfolio $ourPortfolio)
    {
        $ourPortfolio->update($request->except('_token' , '_method' , 'image' ,  'big_image'));
        
        if($request->hasFile('image')){
          if($ourPortfolio->image != null){
            // delete photo
            $old_location = 'public/uploads/ourPortfolio_photos/'.$ourPortfolio->image;
            unlink(base_path($old_location));

            $uploaded_photo = $request->file('image');
            $new_photo_name = $ourPortfolio->id.'-'.Str::random(3).".".$uploaded_photo->extension();
            $new_photo_location = 'public/uploads/ourPortfolio_photos/'.$new_photo_name;
            Image::make($uploaded_photo)->resize(500,385)->save(base_path($new_photo_location) , 70);
            OurPortfolio::find($ourPortfolio->id)->update([
              'image' => $new_photo_name
            ]);
          }
        }

        if($request->hasFile('big_image')){
          if($ourPortfolio->big_image != null){
            // delete photo
            $old_location = 'public/uploads/ourPortfolio_big_photos/'.$ourPortfolio->big_image;
            unlink(base_path($old_location));
          }
          $uploded_photo = $request->file('big_image');
          $new_photo_name = $ourPortfolio->id.'-'.Str::random(4).".".$uploded_photo->extension();
          $new_photo_location = 'public/uploads/ourPortfolio_big_photos/'.$new_photo_name;
          Image::make($uploded_photo)->resize(850,600)->save(base_path($new_photo_location) , 80);
          OurPortfolio::find($ourPortfolio->id)->update([
            'big_image' => $new_photo_name
          ]);
        }
        return redirect('/ourPortfolio-view-all')->with('update_status' , 'Our Portfolio Update Successfully!!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OurPortfolio  $ourPortfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(OurPortfolio $ourPortfolio)
    {
        $ourPortfolio->delete();
        return back()->with('delete_status','Service Delete SuccessFully!!');
    }
}
