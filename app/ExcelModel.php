<?php
  
namespace App\Imports;
  
use App\weather;
use Maatwebsite\Excel\Concerns\ToModel;
  
class ExcelModel implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        $t_weather = weather::create([
            'dteday'     => $row[0],
            'temp'    => $row[1], 
            'hum' => $row[2],
            'windspeed' => $row[3],
            'weathersit' => $row[4],
        ]);
    }
}