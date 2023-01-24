<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use DB;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.about.index');
    }

    public function aboutViewAll(){
        return view('admin.about.show' , [
            'aboutUs_all' => AboutUs::Latest()->get()
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
            'happy_client' => 'required',
            'experience' => 'required',
            'project_complete' => 'required',
            'seals' => 'required',
            'description' => 'required',
        ]);
    
        AboutUs::insertGetId($request->except('_token' , 'image') + [
          'status' => 1,
          'created_at' => Carbon::now(),
          
        ]);
        
        return redirect('/about-view-all')->with('success_status','About Insert SuccessFully!!');
    }


    public function aboutEdit($id) {
        $aboutUs = AboutUs::find($id);
        return view('admin.about.edit', compact('aboutUs'));
    }

    public function aboutUpdate(Request $request , $id) {
        AboutUs::find($id)->update($request->except('_method'));
        return redirect('/about-view-all')->with('update_status' , 'About Update Successfully!!');
    }

    public function aboutDelete($id) {
        AboutUs::find($id)->delete();
        return back()->with('delete_status','About Us Delete SuccessFully!!');
    }
}
