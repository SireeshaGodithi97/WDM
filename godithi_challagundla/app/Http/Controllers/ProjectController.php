<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;


class ProjectController extends Controller
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

        $project_list_array=array();
        $event_check = DB::table('project')->exists();

        if($event_check){

            $event_obj= DB::table('project')->orderBy('project_id', 'DESC')->get();
            $project_list_array = collect($event_obj)->toArray();

        }

        return view('project.list', ['project_list' => $project_list_array ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('project.add');

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
                'project_name'=>'required',
                'project_mail'=>'required',
                'project_venue'=>'required',
                'project_description'=>'required',
                'project_date'=>'required',
            ]
        );


        $user_id = Auth::id();

        $project_detail = [
            'project_name'=>$request->input('project_name'),
            'project_mail'=>$request->input('project_mail'),
            'project_venue'=>$request->input('project_venue'),
            'project_description'=>$request->input('project_description'),
            'project_date'=>$request->input('project_date'),
            'created_by'=>$user_id,
            'created_at'=>now(),
        ];
        $result = DB::table('project')->insert($project_detail);


        if($result){
            return redirect()->route('project.index')->with('success','Project Added Successfully !');
        }else{
            return redirect()->route('project.add')->with('error','Failed to create !');

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
        $event_check = DB::table('project')->where('project_id',$id)->exists();

        if($event_check){

            $event_obj= DB::table('project')->where('project_id',$id)->first();
            $event_details_array = collect($event_obj)->toArray();

        }
        // dd($event_details_array);
        return view('project.edit', ['event_details' => $event_details_array ]);



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
        // dd($request->all());

        $validate = $request->validate(
            [
                'project_name'=>'required',
                'project_mail'=>'required',
                'project_venue'=>'required',
                'project_description'=>'required',
                'project_date'=>'required',
            ]
        );

        $project_detail = [
            'project_name'=>$request->input('project_name'),
            'project_mail'=>$request->input('project_mail'),
            'project_venue'=>$request->input('project_venue'),
            'project_description'=>$request->input('project_description'),
            'project_date'=>$request->input('project_date'),
        ];
        $result = DB::table('project')->where('project_id',$id)->update($project_detail);
       
        if($result){
            return redirect()->route('project.index')->with('success','Project Update Successfully !');
        }else{
            return redirect()->route('project.edit')->with('error','Failed to update !');

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
    public function projectDelete(){

        DB::table('project')->where('project_id', $_GET['id'])->delete();
        DB::table('project_reg')->where('project_id', $_GET['id'])->delete();
        echo "success";
        die;
    }


    public function project_reg_user($id)
    {

        $user_project_array =array();

        $user_project_query= DB::table('project_reg as er')
            ->select('er.created_at', 'u.name','u.email', 'u.address')
            ->join('users as u', 'u.id', '=', 'er.user_id')
            ->where('er.project_id',$id)
            ->orderBy('er.project_reg_id','desc');

        if($user_project_query->exists()){

            $user_project_obj = $user_project_query->get();
            $user_project_array = collect($user_project_obj)->toArray();

        }

        return view('project.list_user', ['user_list' => $user_project_array ]);
    }

}
