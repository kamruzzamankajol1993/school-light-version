<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LeaveType;
class LeaveTypeController extends Controller
{
    public function index(){


        $leave_type_details = LeaveType::latest()->get();

        return view('admin.leave_type.index',['leave_type_details'=>$leave_type_details]);
    }



    public function store(Request $request){


        // Validation Data
        $request->validate([
            'name' => 'required|max:50',

        ]);

        // Create New User
        $user = new LeaveType();
        $user->name = $request->name;
        $user->status = $request->status;
        $user->save();

        return redirect()->route('admin.leave_type')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =LeaveType::find($request->id);
        $user->name = $request->name;
        $user->status = $request->status;
        $user->save();

        return redirect()->route('admin.leave_type')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = LeaveType::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.leave_type')->with('error','Deleted successfully!');
    }
}
