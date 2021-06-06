<?php

namespace App\Imports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EmployeeImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Employee([
            'name'      =>  $row['name'],
            'email'     =>  $row['email'],
            'salary'    =>  $row['salary'],
        ]);
    }
}
