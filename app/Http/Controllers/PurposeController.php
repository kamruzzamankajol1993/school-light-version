<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Purpose;
class PurposeController extends Controller
{
    public function index(){


        $purpose_details = Purpose::latest()->get();


        return view('admin.purpose.index',['purpose_details'=>$purpose_details]);
    }





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'name' => 'required|max:350',

        ]);

        // Create New User
        $user = new Purpose();
        $user->name = $request->name;
        $user->des = $request->des;

        $user->save();

        return redirect()->route('admin.purpose')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =Purpose::find($request->id);
        $user->name = $request->name;
        $user->des = $request->des;
        $user->save();

        return redirect()->route('admin.purpose')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = Purpose::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.purpose')->with('error','Deleted successfully!');
    }
}
