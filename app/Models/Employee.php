<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Employee extends Model
{
    use HasFactory;


    protected $table = "employees";

    protected $fillable = ['name', 'email', 'salary'];


    public static function getEmployees() {
        $records = DB::table('employees')->select('id', 'name', 'email', 'salary');
    }
}
