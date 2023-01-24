<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.buyerContact.show' , [
            'customerinfo_all' => Contact::all(),
            'total_customerinfo' => Contact::count(),
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
            'buyer_name' => 'required',
            'buyer_email' => 'required|email',
            'buyer_country' => 'required',
            'buyer_whatsapp_number' => 'required',
            'buyer_services' => 'required',
            'buyer_budget' => 'required',
            'buyer_message' => 'required',
          ]);
          Contact::insert($request->except('_token')+[
            'status' => 1,
            'created_at' => Carbon::now(),
          ]);
  
          return back()->with('success_status' , 'We Received SuccessFully!!!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('admin.buyerContact.edit' , [
            'customer_info' => $contact,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $contact->update();
        return back()->with('edit_success' , 'Update Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return back()->with('edit_success' , 'Update Successfully!!');
    }
}
