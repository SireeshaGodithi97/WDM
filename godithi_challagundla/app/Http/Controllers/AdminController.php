<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function __construct()
    {

    }

    public function admin_db()
    {

        //Restrict admin direct access
        if(Auth::user()->user_type!='admin')
            return redirect()->route('home');

        return view('admin.dashboard');
    }

    public function user_list()
    {

        //Restrict admin direct access
        if(Auth::user()->user_type!='admin')
            return redirect()->route('home');

        $user_list_array=array();
        $user_check = DB::table('users')->exists();

        if($user_check){

            $user_obj= DB::table('users')->orderBy('user_type', 'ASC')->get();
            $user_list_array = collect($user_obj)->toArray();

        }

        return view('admin.user_list', ['user_list' => $user_list_array ]);

    }

    public function admin_reg(){

        //Restrict admin direct access
        if(Auth::user()->user_type!='admin')
            return redirect()->route('home');

        return view('admin.register');

    }

    public function admin_user_save(Request $request){

       $password=Hash::make($request->input('password'));


        $users_detail = [
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>$password,
            'user_type'=>'admin',
            'created_at'=>now(),
        ];
        $result=DB::table('users')->insert($users_detail);
        $users_id = DB::getPdo()->lastInsertId();




        if($result){
            return redirect()->route('user_list')->with('success','Admin created successfully !');
        }else{
            return redirect()->route('admin_reg')->with('error','Error !');

        }

    }




}