<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\ExcelImport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
  
class MyController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importview()
    {
       return view('import');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new ExcelImport,request()->file('file'));
           
        return back();
    }
}