<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubscribeMail;

class SubscribeMailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.subscribeMail.show' , [
            'subscribeMails' => SubscribeMail::all(),
            'subscribeMails_total' => SubscribeMail::count(),
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
            'subeMail' => 'required|unique:subscribe_mails'
         ]);
         SubscribeMail::create($request->except('_token'));
         return back()->with('success_status_store','Email subscribeMail Done SuccessFully!!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubscribeMail  $subscribeMail
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubscribeMail $subscribeMail)
    {
        $subscribeMail->delete();
        return back()->with('delete_status','SubscribeMail Delete SuccessFully!!');
    }

    public function subscribemailmail($mail_id){
        return view('admin.SubscribeMail.mail' , [
            'subscribemail' => SubscribeMail::findORFail($mail_id)
        ]);
    }

    public function mailsent(Request $request){

        // Mail::to($request->email)->send(new SubscribeSingleMailSent($request->mail_sent));
        return back()->with('success_status','Subscribe Single Mail Sent Delete SuccessFully!!');
        
    }
    
}
