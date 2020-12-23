<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;


class EventController extends Controller
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

        $event_list_array=array();
        $event_check = DB::table('event')->exists();

        if($event_check){

            $event_obj= DB::table('event')->orderBy('event_id', 'DESC')->get();
            $event_list_array = collect($event_obj)->toArray();

        }

        return view('event.list', ['event_list' => $event_list_array ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('event.add');

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
                'event_name'=>'required',
                'event_venue'=>'required',
                'event_description'=>'required',
                'event_mail'=>'required',
                'event_date'=>'required',
            ]
        );

        $user_id = Auth::id();

        $event_detail = [
            'event_name'=>$request->input('event_name'),
            'event_venue'=>$request->input('event_venue'),
            'event_description'=>$request->input('event_description'),
            'event_mail'=>$request->input('event_mail'),
            'event_date'=>$request->input('event_date'),
            'created_by'=>$user_id,
            'created_at'=>now(),
        ];
        $result = DB::table('event')->insert($event_detail);
        $event_id = DB::getPdo()->lastInsertId();


        if($result){
            return redirect()->route('event.index')->with('success','Event Added Successfully !');
        }else{
            return redirect()->route('event.add')->with('error','Failed to create !');

        }

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

        $event_details_array=array();
        $event_check = DB::table('event')->where('event_id',$id)->exists();

        if($event_check){

            $event_obj= DB::table('event')->where('event_id',$id)->first();
            $event_details_array = collect($event_obj)->toArray();

        }
        // dd($event_details_array);
        return view('event.edit', ['event_details' => $event_details_array ]);



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

        $validate = $request->validate(
            [
                'event_name'=>'required',
                'event_venue'=>'required',
                'event_description'=>'required',
                'event_mail'=>'required',
                'event_date'=>'required',
            ]
        );

        $event_detail = [
            'event_name'=>$request->input('event_name'),
            'event_venue'=>$request->input('event_venue'),
            'event_description'=>$request->input('event_description'),
            'event_mail'=>$request->input('event_mail'),
            'event_date'=>$request->input('event_date'),
        ]; 
        $result = DB::table('event')->where('event_id',$id)->update($event_detail);
       
        if($result){
            return redirect()->route('event.index')->with('success','Event Update Successfully !');
        }else{
            return redirect()->route('event.edit')->with('error','Failed to update !');

        }

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
    public function eventDelete(){

        DB::table('event')->where('event_id', $_GET['id'])->delete();
        DB::table('event_reg')->where('event_id', $_GET['id'])->delete();
        echo "success";
        die;
    }


    public function event_reg_user($id)
    {

        $user_event_array =array();

        $user_event_query= DB::table('event_reg as er')
            ->select('er.created_at', 'u.name','u.email', 'u.address')
            ->join('users as u', 'u.id', '=', 'er.user_id')
            ->where('er.event_id',$id)
            ->orderBy('er.event_reg_id','desc');

        if($user_event_query->exists()){

            $user_event_obj = $user_event_query->get();

            $user_event_array = collect($user_event_obj)->toArray();

        }


        return view('event.list_user', ['user_list' => $user_event_array ]);
    }
}
