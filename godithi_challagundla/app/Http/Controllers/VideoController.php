<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;


class VideoController extends Controller
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
        $event_check = DB::table('video')->exists();

        if($event_check){

            $event_obj= DB::table('video')->get();
            $event_list_array = collect($event_obj)->toArray();

        }

        return view('video.list', ['video_list' => $event_list_array ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('video.add');

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
                'video_name'=>'required',
                'video_description'=>'required',
                'video_url'=>'required',
            ]
        );

        // dd($request->all());
        $video_detail = [
            'video_name'=>$request->input('video_name'),
            'video_description'=>$request->input('video_description'),
            'video_url'=>$request->input('video_url'),
        ]; 
        $result = DB::table('video')->insert($video_detail);
        
        if($result){
            return redirect()->route('video.index')->with('success','Video Added Successfully !');
        }else{
            return redirect()->route('video.add')->with('error','Error !');

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

        $video_details_array=array();
        $video_check = DB::table('video')->where('video_id',$id)->exists();

        if($video_check){

            $video_obj= DB::table('video')->where('video_id',$id)->first();
            $video_details_array = collect($video_obj)->toArray();

        }
        // dd($event_details_array);
        return view('video.edit', ['video_details' => $video_details_array ]);



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
                'video_name'=>'required',
                'video_description'=>'required',
                'video_url'=>'required',
            ]
        );
      
        $video_detail = [
            'video_name'=>$request->input('video_name'),
            'video_description'=>$request->input('video_description'),
            'video_url'=>$request->input('video_url'),
        ]; 
        $result = DB::table('video')->where('video_id',$id)->update($video_detail);
        
        if($result){
            return redirect()->route('video.index')->with('success','Video Updated Successfully !');
        }else{
            return redirect()->route('video.edit')->with('error','Error !');

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
        DB::table('video')->where('video_id', $id)->delete();
        return back()->with('success','Successfully Deleted ! ');

    }
}
