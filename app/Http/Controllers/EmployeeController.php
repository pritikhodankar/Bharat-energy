<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function show(){
        $department = Department::all();
        return view('employee.create', compact('department'));
    }

    public function store(Request $request){
        $form = $request->validate([
            'emp_name' => 'required',
            'age' => 'required|numeric',
            'salary' => 'required|numeric',
            'department' => 'required',
        ]);

        $employee = new Employee();
        $employee->emp_name = $request->emp_name;
        $employee->department = $request->department;
        $employee->age = $request->age;
        $employee->salary = $request->salary;

        $employee->save();

        return redirect('dashboard')->with('success','Employee added succesfully!');
    }
}
