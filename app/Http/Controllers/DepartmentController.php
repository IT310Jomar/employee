<?php

namespace App\Http\Controllers;

use App\Models\Departments;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function getDepartment(){
        return view('department.department');// web.php para view sa front end
    }

    public function displayDepartment(){// for api
        $dept = Departments::latest()->get();

        return response()->json(['success' => true, 'department' => $dept],200);
    }

    // public function addDepartment(Request $request){
        
    //     $request->validate([
    //        "department_name" => "required|string|max:100"
    //     ]);
      
    
    //     Departments::create([
    //         "name" => $request->department_name
    //     ]);

    //     return response()->json(["message" => "Department added successfully"],200);
 
    // }

    public function addDepartment(){
        
        request()->validate([
           "department_name" => "required|string|max:100"
        ]);

        $department = Departments::create([
            "name" => request('department_name')
        ]);

        return response()->json(["success" => true, 'dept' => $department],200);
 
    }
}
