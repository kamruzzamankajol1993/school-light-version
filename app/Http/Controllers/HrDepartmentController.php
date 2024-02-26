<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HrDepartment;
class HrDepartmentController extends Controller
{
    public function index(){


        $staff_department_details = HrDepartment::latest()->get();

        return view('admin.staff_department.index',['staff_department_details'=>$staff_department_details]);
    }



    public function store(Request $request){


        // Validation Data
        $request->validate([
            'name' => 'required|max:50',

        ]);

        // Create New User
        $user = new HrDepartment();
        $user->name = $request->name;
        $user->status = $request->status;
        $user->save();

        return redirect()->route('admin.staff_department')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =HrDepartment::find($request->id);
        $user->name = $request->name;
        $user->status = $request->status;
        $user->save();

        return redirect()->route('admin.staff_department')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = HrDepartment::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.staff_department')->with('error','Deleted successfully!');
    }
}
