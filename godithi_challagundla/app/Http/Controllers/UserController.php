<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use function print_r;

class UserController extends Controller
{

    public function __construct()
    {

        $this->middleware(['auth','verified']);


    }

    public function user_db()
    {

        return view('user.dashboard');
    }

    public function user_event()
    {


        $user_id = Auth::id();

        $event_list_array=array();

        $event_query= DB::table('event as e')
            ->join('event_reg as er', 'er.event_id', '=', 'e.event_id')
            ->where('er.user_id', $user_id)
            ->where('er.status', '1');

        if($event_query->exists()){

            $event_obj = $event_query->get();

            $event_list_array = collect($event_obj)->toArray();

        }

        return view('user.event', ['event_list' => $event_list_array ]);

    }

    public function event_reg($id)
    {
        $event_id = $id;
        $user_id = Auth::id();

        $event_check_query = DB::table('event_reg')
            ->where('event_id',  $event_id)
            ->where('user_id',  $user_id);

        if(!$event_check_query->exists()) {

            $event_detail_reg = [
                'user_id' => $user_id,
                'event_id' => $event_id,
                'created_at' => now()
            ];
            $result = DB::table('event_reg')->insert($event_detail_reg);

            if ($result) {
                return redirect()->route('user_event')->with('success', 'You have registered for event!');
            } else {
                return redirect()->route('user_event')->with('error', 'Failed to register !');

            }

        } else {

            $reg_details=$event_check_query->first();

            if($reg_details->status==0){

                $result = $event_check_query->update(['status'=>'1']);

                return redirect()->route('user_event')->with('success', 'You have re-registered for event!');

            } else {

                return redirect()->route('user_event')->with('error', 'You already registered for event!');
            }


        }

    }

    public function event_dereg($id)
    {

        $event_id = $id;
        $user_id = Auth::id();

        $event_check = DB::table('event_reg')
            ->where('event_id',  $event_id)
            ->where('user_id',  $user_id)
            ->exists();

        if($event_check) {

            $result = DB::table('event_reg')
                ->where('event_id',$event_id)
                ->where('user_id',  $user_id)
                ->update(['status'=>'0']);



            if ($result) {
                return redirect()->route('user_event')->with('success', 'You have de-registered for event!');
            } else {
                return redirect()->route('user_event')->with('error', 'Failed to de-register !');

            }

        } else {
            return redirect()->route('user_event')->with('error', 'Event not regsitered!');
        }

    }

    public function user_project()
    {

        $user_id = Auth::id();
        $project_list_array=array();

        $project_query= DB::table('project as e')
            ->join('project_reg as er', 'er.project_id', '=', 'e.project_id')
            ->where('er.user_id', $user_id)
            ->where('er.status', '1');

        if($project_query->exists()){

            $project_obj = $project_query->get();

            $project_list_array = collect($project_obj)->toArray();

        }

        return view('user.project', ['project_list' => $project_list_array ]);

    }



    public function project_reg($id)
    {

        $project_id = $id;
        $user_id = Auth::id();

        $project_check_query = DB::table('project_reg')
            ->where('project_id',  $project_id)
            ->where('user_id',  $user_id);

        if(!$project_check_query->exists()) {

            $project_detail_reg = [
                'user_id'=>$user_id,
                'project_id'=>$project_id,
                'created_at' => now()
            ];
            $result = DB::table('project_reg')->insert($project_detail_reg);

            if($result){
                return redirect()->route('user_project')->with('success','You have registered for project!');
            }else{
                return redirect()->route('user_project')->with('error','Failed to register !');

            }

        } else {

            $reg_details=$project_check_query->first();

            if($reg_details->status==0){

                $result = $project_check_query->update(['status'=>'1']);

                return redirect()->route('user_project')->with('success', 'You have re-registered for project!');

            } else {

                return redirect()->route('user_project')->with('error', 'You already registered for project!');
            }


        }


    }


    public function project_dereg($id)
    {

        $project_id = $id;
        $user_id = Auth::id();

        $project_check = DB::table('project_reg')
            ->where('project_id',  $project_id)
            ->where('user_id',  $user_id)
            ->exists();

        if($project_check) {

            $result = DB::table('project_reg')
                ->where('project_id',$project_id)
                ->where('user_id',  $user_id)
                ->update(['status'=>'0']);



            if ($result) {
                return redirect()->route('user_project')->with('success', 'You have de-registered for project!');
            } else {
                return redirect()->route('user_project')->with('error', 'Failed to de-register !');

            }

        } else {
            return redirect()->route('user_project')->with('error', 'Project not regsitered!');
        }

    }


}