<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\weather;
use App\user;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $weather = DB::table('t_weather')->orderBy('dteday', 'desc')->first();
        $users = DB::table('users')->where('id', 1)->first();
        return view('home', ['weather'=>$weather, 'users'=>$users]);
    }

}
