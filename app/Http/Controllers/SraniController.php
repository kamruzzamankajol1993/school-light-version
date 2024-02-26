<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Srani;

class SraniController extends Controller
{
    public function index(){


        $class_details = Srani::latest()->get();

        return view('admin.class.index',['class_details'=>$class_details]);
    }



    public function store(Request $request){


        // Validation Data
        $request->validate([
            'name' => 'required|max:50',
            
        ]);

        // Create New User
        $user = new Srani();
        $user->name = $request->name;
        $user->status = $request->status;
        $user->save();

        return redirect()->route('admin.institute_class')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =Srani::find($request->id);
        $user->name = $request->name;
        $user->status = $request->status;
        $user->save();

        return redirect()->route('admin.institute_class')->with('success','Updated successfully!');

        
    }


    public function destroy($id){

         $user = Srani::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.institute_class')->with('error','Deleted successfully!');
    }
}
