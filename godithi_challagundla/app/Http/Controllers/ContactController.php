<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Mail;
use Auth;

class ContactController extends Controller
{

    public function __construct()
    {


    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_details = array();

         if (Auth::check()) {
             $user_obj = Auth::user();
             $user_details = collect($user_obj)->toArray();

         }

        return view('pages.contact',['user_details'=>$user_details]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate(
            [
                'message'=>'required',
                'name'=>'required',
                'mail'=>'required',
                ]
        );

        $user_id=NULL;
        if (Auth::check()) $user_id = Auth::id();

        $contact_name = $request->input('name');
        $contact_mail = $request->input('mail');
        $message = $request->input('message');


        $contact_details = [
            'user_id'=>$user_id,
            'contact_name'=> $contact_name,
            'contact_mail'=> $contact_mail,
            'contact_message'=> $message,
            'send_at'=>now(),
        ];

        DB::table('contact')->insert($contact_details);


        $mail_data = array();
        $mail_data = [
            'contact_name' => $contact_name,
            'contact_mail' => $contact_mail,
            'message' => $message,
            'subject' => $contact_name.' sent a message',
            'to_email' => 'admin@sxg6288.uta.cloud',
            'to_name' => 'Admin',
            'from_email' => $contact_mail,
            'from_name' => $contact_name,
            'cc_email' => '',
            'cc_name' => '',
        ];

        Mail::send('email.contact', ['mail_data' => $mail_data], function ($m) use ($mail_data) {
            $m->to($mail_data['to_email'], $mail_data['to_name'])
                ->from($mail_data['from_email'], $mail_data['from_name'])
                //->cc($mail_data['cc_email'], $mail_data['cc_name'])
                ->subject($mail_data['subject']);

        });




        return back()->with('success','Message Successfully Sent !');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


    }
}
