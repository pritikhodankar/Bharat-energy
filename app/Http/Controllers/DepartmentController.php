<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(){
        return view('department.create');
    }

    public function store(Request $request){
        $form = $request->validate([
            'dept_name' => 'required',
        ]);

        $dept = new Department();
        $dept->dept_name = $request->dept_name;

        $dept->save();

        return redirect('dashboard')->with('success','Department added successfully!');
    }
}
