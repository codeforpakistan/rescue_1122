<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }
    public function manageIT(){
        $user = User::all();
        return view('manageUsers',['user'=>$user]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
    public function viewCallerForm(){
        return view('callerForm');
    }

    public function viewActivity()
    {
        $h = DB::table('hospital')->get();
        return view('activity',['data'=>$h]);
    }
}
