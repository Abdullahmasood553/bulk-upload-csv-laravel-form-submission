<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Imports\EmployeeImport;

class EmployeeController extends Controller
{
    public function importForm() {
        return view('import-form');
    }


    public function import(Request $request) {

        Excel::import(new EmployeeImport, $request->file);
        return "Records are Imported Successfully";
    }
}
