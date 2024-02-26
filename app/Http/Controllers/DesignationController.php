<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Designation;
class DesignationController extends Controller
{
    public function index(){


        $staff_designation_details = Designation::latest()->get();

        return view('admin.staff_designation.index',['staff_designation_details'=>$staff_designation_details]);
    }



    public function store(Request $request){


        // Validation Data
        $request->validate([
            'name' => 'required|max:50',

        ]);

        // Create New User
        $user = new Designation();
        $user->name = $request->name;
        $user->status = $request->status;
        $user->save();

        return redirect()->route('admin.staff_designation')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =Designation::find($request->id);
        $user->name = $request->name;
        $user->status = $request->status;
        $user->save();

        return redirect()->route('admin.staff_designation')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = Designation::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.staff_designation')->with('error','Deleted successfully!');
    }
}
