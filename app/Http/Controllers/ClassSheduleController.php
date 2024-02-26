<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Class_shedule;
class ClassSheduleController extends Controller
{
    public function index(){


        $class_details = Class_shedule::latest()->get();

        return view('admin.class_shedule.index',['class_details'=>$class_details]);
    }



    public function store(Request $request){


        // Validation Data
        $request->validate([
            'name' => 'required|max:50',

        ]);

        // Create New User
        $user = new Class_shedule();
        $user->name = $request->name;
        $user->status = $request->status;
        $user->save();

        return redirect()->route('admin.class_shedule')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =Class_shedule::find($request->id);
        $user->name = $request->name;
        $user->status = $request->status;
        $user->save();

        return redirect()->route('admin.class_shedule')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = Class_shedule::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.class_shedule')->with('error','Deleted successfully!');
    }
}
