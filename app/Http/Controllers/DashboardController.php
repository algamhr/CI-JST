<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\weather;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $weather = DB::table('t_weather')->orderBy('dteday', 'desc')->get();
        $users = DB::table('users')->where('id', 1)->first();
        return view('dashboard.index', ['weather'=>$weather, 'users'=>$users]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $t_weather = weather::create([
            'dteday'=> $request->dteday,
            'temp'=> $request->temp,
            'hum'=>$request->hum,
            'windspeed'=>$request->windspeed,
            'weathersit'=>$request->weathersit,
        ]) ;

        session()->flash('success', 'data cuaca berhasil di tambah');
        return redirect(route('dashboard.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $weather=DB::table('t_weather')->where('id', $id)->first();
        $users = DB::table('users')->where('id', 1)->first();
        return view('dashboard.edit', ['weather'=>$weather, 'users'=>$users]);
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
        //
        $weather=DB::table('t_weather')->where('id', $id)->update(['temp' => $request->temp, 'hum' => $request->hum, 'windspeed' => $request->windspeed, 'weathersit' => $request->weathersit]);
        session()->flash('success', 'data cuaca berhasil di ubah');
        return redirect('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $weather=DB::table('t_weather')->where('id', $id)->delete();
        session()->flash('success', 'data cuaca berhasil di hapus');
        return redirect('dashboard');
    }
}
