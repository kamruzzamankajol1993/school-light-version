<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Srani;
use App\Department;

class DepartmentController extends Controller
{
     public function index(){


        $class_details = Srani::latest()->get();
        $dp_details = Department::latest()->get();

        return view('admin.department.index',['class_details'=>$class_details,'dp_details'=>$dp_details]);
    }





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'name' => 'required|max:50',
            
        ]);

        // Create New User
        $user = new Department();
        $user->name = $request->name;
        $user->class_id = $request->class_id;
        $user->status = $request->status;
        $user->save();

        return redirect()->route('admin.department')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =Department::find($request->id);
        $user->class_id= $request->class_id;
        $user->name = $request->name;
        $user->status = $request->status;
        $user->save();

        return redirect()->route('admin.department')->with('success','Updated successfully!');

        
    }


    public function destroy($id){

         $user = Department::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.department')->with('error','Deleted successfully!');
    }
}
