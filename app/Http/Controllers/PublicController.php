<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $weather = DB::table('t_weather')->orderBy('dteday', 'desc')->get();
        return view('public.index', ['weather'=>$weather]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    }

    public function normalisasi(Request $request)
    {
        $max_temp = DB::table('t_weather')->max('temp');
        $min_temp = DB::table('t_weather')->min('temp');
        $max_hum = DB::table('t_weather')->max('hum');
        $min_hum = DB::table('t_weather')->min('hum');
        $max_windspeed = DB::table('t_weather')->max('windspeed');
        $min_windspeed = DB::table('t_weather')->min('windspeed');
        $min_weathersit = DB::table('t_weather')->min('weathersit');
        $max_weathersit = DB::table('t_weather')->max('weathersit');

        $data = DB::table('t_weather')->get();
        $count = DB::table('t_normalisasi')->count('id');
        if($count != 0) {

            DB::table('t_normalisasi')->truncate();
            foreach($data as $data){
                DB::table('t_normalisasi')->insert(
                    ['dteday' => $data->dteday,
                    'temp' => (($data->temp-$min_temp)/($max_temp-$min_temp)),
                    'hum' =>  (($data->hum-$min_hum)/($max_hum-$min_hum)),
                    'windspeed' =>  (($data->windspeed-$min_windspeed)/($max_windspeed-$min_windspeed)),
                    'weathersit'=> (($data->weathersit-$min_weathersit)/($max_weathersit-$min_weathersit))]
                );
            }

        } else{
            foreach($data as $data){
                DB::table('t_normalisasi')->insert(
                    ['dteday' => $data->dteday,
                    'temp' => (($data->temp-$min_temp)/($max_temp-$min_temp)),
                    'hum' =>  (($data->hum-$min_hum)/($max_hum-$min_hum)),
                    'windspeed' =>  (($data->windspeed-$min_windspeed)/($max_windspeed-$min_windspeed)),
                    'weathersit'=> (($data->weathersit-$min_weathersit)/($max_weathersit-$min_weathersit))]
                );
            }
        }


        return redirect('index_normalisasi');
    }

    public function index_normalisasi()
    {
        $normalisasi = DB::table('t_normalisasi')->orderBy('dteday', 'desc')->get();
        return view('public.normalisasi', ['weather'=>$normalisasi, 'normalisasi' => $normalisasi]);
    }

    public function pengujian()
    {
        $normalisasi = DB::table('t_normalisasi')->orderBy('dteday', 'desc')->get();
        return view('public.pengujian', ['weather'=>$normalisasi, 'normalisasi' => $normalisasi]);
    }

}
