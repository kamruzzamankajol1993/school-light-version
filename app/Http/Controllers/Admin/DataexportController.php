<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\CivilinfosImport;
use Maatwebsite\Excel\Facades\Excel;
class DataexportController extends Controller
{
    public function export_importdata(){


        return view('admin.dataimport.index');
    }



    public function import_civildata () 
    {
        Excel::import(new CivilinfosImport,request()->file('file'));
           
        return back();
    }
}
