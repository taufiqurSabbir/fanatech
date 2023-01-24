<?php

namespace App\Http\Controllers;

use Image;
use Carbon\Carbon;
use App\Models\Portfolio;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('admin.portfolio.index');
  }

  public function portfolioViewAll()
  {
    return view('admin.portfolio.show', [
      'portfolios_all' => Portfolio::Latest()->get()
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
      'title' => 'required', 'unique:portfolios,title',
      'date' => 'required',
      'short_details' => 'required',
      'long_details' => 'required',
      'image' => 'required',
    ]);

    $portfolio_id = Portfolio::insertGetId($request->except('_token', 'image', 'image_one', 'image_two', 'image_three') + [
      'status' => 1,
      'created_at' => Carbon::now(),
    ]);

    if ($request->hasFile('image')) {
      $uploaded_photo = $request->file('image');
      $new_photo_name = $portfolio_id.'-'.Str::random(3).".".$uploaded_photo->extension();

      $new_photo_location = 'public/uploads/portfolio_photos/' . $new_photo_name;
      Image::make($uploaded_photo)->resize(500, 385)->save(base_path($new_photo_location), 40);
      Portfolio::find($portfolio_id)->update([
        'image' => $new_photo_name
      ]);
    }

    if ($request->hasFile('image_one')) {
      $uploaded_photo = $request->file('image_one');
      $new_photo_name = $portfolio_id.'-'.Str::random(4).".".$uploaded_photo->extension();
      $new_photo_location = 'public/uploads/portfolio_photos/' . $new_photo_name;
      Image::make($uploaded_photo)->resize(500, 385)->save(base_path($new_photo_location), 40);
      Portfolio::find($portfolio_id)->update([
        'image_one' => $new_photo_name
      ]);
    }

    if ($request->hasFile('image_two')) {
      $uploaded_photo = $request->file('image_two');
      $new_photo_name = $portfolio_id.'-'.Str::random(5).".".$uploaded_photo->extension();
      $new_photo_location = 'public/uploads/portfolio_photos/' . $new_photo_name;
      Image::make($uploaded_photo)->resize(500, 385)->save(base_path($new_photo_location), 40);
      Portfolio::find($portfolio_id)->update([
        'image_two' => $new_photo_name
      ]);
    }

    if ($request->hasFile('image_three')) {
      $uploaded_photo = $request->file('image_three');
      $new_photo_name = $portfolio_id.'-'.Str::random(6).".".$uploaded_photo->extension();
      $new_photo_location = 'public/uploads/portfolio_photos/' . $new_photo_name;
      Image::make($uploaded_photo)->resize(500, 385)->save(base_path($new_photo_location), 40);
      Portfolio::find($portfolio_id)->update([
        'image_three' => $new_photo_name
      ]);
    }
    return redirect('/portfolio-view-all')->with('success_message', 'Portfolio Insert SuccessFully!!');
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Portfolio  $portfolio
   * @return \Illuminate\Http\Response
   */
  public function edit(Portfolio $portfolio)
  {
    return view('admin.portfolio.edit', [
      'portfolio_info' => $portfolio
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Portfolio  $portfolio
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Portfolio $portfolio)
  {

    $portfolio->update($request->except('_token', '_method', 'image' , 'image_one','image_two','image_three'));
    if ($request->hasFile('image')) {
      if ($portfolio->image != null) {
        // delete photo
        $old_location = 'public/uploads/portfolio_photos/' . $portfolio->image;
        unlink(base_path($old_location));

        $uploaded_photo = $request->file('image');
        $new_photo_name = $portfolio->id . '-' . Str::random(3) . "." . $uploaded_photo->extension();
        $new_photo_location = 'public/uploads/portfolio_photos/' . $new_photo_name;
        Image::make($uploaded_photo)->resize(500, 385)->save(base_path($new_photo_location), 70);
        Portfolio::find($portfolio->id)->update([
          'image' => $new_photo_name
        ]);
      }
    }
    
    if($request->hasFile('image_one')){
      if($portfolio->image_one != null){
        // delete photo
        $old_location = 'public/uploads/portfolio_photos/'.$portfolio->image_one;
        unlink(base_path($old_location));
      }
      $uploded_photo = $request->file('image_one');
      $new_photo_name = $portfolio->id.'-'.Str::random(4).".".$uploded_photo->extension();
      $new_photo_location = 'public/uploads/portfolio_photos/'.$new_photo_name;
      Image::make($uploded_photo)->resize(500,385)->save(base_path($new_photo_location) , 80);
      Portfolio::find($portfolio->id)->update([
        'image_one' => $new_photo_name
      ]);
    }

    if($request->hasFile('image_two')){
      if($portfolio->image_two != null){
        // delete photo
        $old_location = 'public/uploads/portfolio_photos/'.$portfolio->image_two;
        unlink(base_path($old_location));
      }
      $uploded_photo = $request->file('image_two');
      $new_photo_name = $portfolio->id.'-'.Str::random(5).".".$uploded_photo->extension();
      $new_photo_location = 'public/uploads/portfolio_photos/'.$new_photo_name;
      Image::make($uploded_photo)->resize(500,385)->save(base_path($new_photo_location) , 80);
      Portfolio::find($portfolio->id)->update([
        'image_two' => $new_photo_name
      ]);
    }

    if($request->hasFile('image_three')){
      if($portfolio->image_three != null){
        // delete photo
        $old_location = 'public/uploads/portfolio_photos/'.$portfolio->image_three;
        unlink(base_path($old_location));
      }
      $uploded_photo = $request->file('image_three');
      $new_photo_name = $portfolio->id.'-'.Str::random(6).".".$uploded_photo->extension();
      $new_photo_location = 'public/uploads/portfolio_photos/'.$new_photo_name;
      Image::make($uploded_photo)->resize(500,385)->save(base_path($new_photo_location) , 80);
      Portfolio::find($portfolio->id)->update([
        'image_three' => $new_photo_name
      ]);
    }
    return redirect('/portfolio-view-all')->with('update_status', 'Project Update Successfully!!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Portfolio  $portfolio
   * @return \Illuminate\Http\Response
   */
  public function destroy(Portfolio $portfolio)
  {
    $portfolio->delete();
    return back()->with('delete_status', 'Service Delete SuccessFully!!');
  }
}
