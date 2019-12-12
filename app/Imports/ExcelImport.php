<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use App\weather;

class ExcelImport implements ToModel
{
    public function model(array $row)
    {
        $t_weather = weather::create([
            'weathersit' => $row[4],
            'windspeed' => $row[3],            
            'hum' => $row[2],
            'temp'    => $row[1], 
            'dteday'     => $row[0],
        ]);
    }
}
