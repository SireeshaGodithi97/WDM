<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DefaultController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {

        return view('pages.index');
    }


    public function page1()
    {

        return view('pages.semblanza');
    }

    public function page2()
    {

        return view('pages.centroaugustomijares');
    }

    public function page3()
    {

        $project_list_array=array();
        $project_check = DB::table('project')->exists();

        if($project_check){

            $project_obj= DB::table('project')->get();
            $project_list_array = collect($project_obj)->toArray();

            //echo '<pre>'; print_r($project_obj); die;
        }


        return view('pages.proyectos', ['project_list' => $project_list_array ]);
    }

    public function page4()
    {

        $event_list_array=array();
        $event_check = DB::table('event')->exists();

        if($event_check){

            $event_obj= DB::table('event')->get();
            $event_list_array = collect($event_obj)->toArray();

        }

        return view('pages.eventos', ['event_list' => $event_list_array ]);
    }

    public function page5()
    {

        $video_list_array=array();
        $video_check = DB::table('video')->exists();

        if($video_check){

            $video_obj= DB::table('video')->get();
            $video_list_array = collect($video_obj)->toArray();

        }

        return view('pages.videos', ['video_list' => $video_list_array ]);
    }

    public function page6()
    {

        return view('pages.equipo');
    }





}