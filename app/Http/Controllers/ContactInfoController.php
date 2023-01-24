<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\ContactInfo;
use Illuminate\Http\Request;

class ContactInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.customerContact.show' , [
            'contactInfo_all' => ContactInfo::all(),
            'total_contactInfos' => ContactInfo::count(),
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
            'email' => 'required|email',
            'country' => 'required',
            'whatsapp_number' => 'required',
            'services' => 'required',
            'message' => 'required',
          ]);
          ContactInfo::insert($request->except('_token')+[
            'status' => 1,
            'created_at' => Carbon::now(),
          ]);
  
          return back()->with('success_status' , 'We Received SuccessFully!!!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactInfo  $contactInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactInfo $contactInfo)
    {

        return view('admin.customerContact.edit' , [
            'customer_info' => $contactInfo,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactInfo  $contactInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactInfo $contactInfo)
    {
        $contactInfo->update();
        return back()->with('edit_success' , 'Update Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactInfo  $contactInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactInfo $contactInfo)
    {
        $contactInfo->delete();
        return back()->with('delete_status' , 'Update Successfully!!');
    }
}
