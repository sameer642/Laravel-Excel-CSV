<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Exports\EmployeeExport;
use Excel;


class EmployeeController extends Controller
{
    //
    public function addEmployee(){
        $employees = [
            ['name' => 'Alice', 'email' => 'alice@test.com', 'phone' => '2354675234', 'salary' => '20000', 'department' => 'Accounting'],
            ['name' => 'Andrew', 'email' => 'andrew@test.com', 'phone' => '2354675456', 'salary' => '30000', 'department' => 'Marketing'],
            ['name' => 'john', 'email' => 'john@test.com', 'phone' => '2354675678', 'salary' => '40000', 'department' => 'Quality'],
            ['name' => 'ross', 'email' => 'ross@test.com', 'phone' => '2354675432', 'salary' => '50000', 'department' => 'Auditing']

             

        ];
        Employee::insert($employees);
        return "Record are Inserted";

    }
    public function exportIntoExcel(){
        return Excel::download(new EmployeeExport, 'employeelist.xlsx');
    }
    public function exportIntoCSV(){
        return Excel::download(new EmployeeExport, 'employeelist.csv');

    }
}
