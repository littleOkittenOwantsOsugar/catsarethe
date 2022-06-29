<?php

namespace App\Http\Controllers;

use App\Imports\TestingImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class TestingImportController extends Controller
{
    public function show(){
        return view('users.import');
    }
    public function store(Request $request)
    {
        //$file=$request->file('file');
        //dd($request);

        Excel::import(new TestingImport, 'C:\Users\helen\Downloads\Практика ВНИГНИ 2022\ias_uvs_summary.xlsx');
        
        //return back()->withStatus('Excel file imported succesfully');
    }
}
