<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ComplainType;
class ComplainTypeController extends Controller
{
    public function index(){


        $complainType_details = ComplainType::latest()->get();


        return view('admin.complainType.index',['complainType_details'=>$complainType_details]);
    }





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'name' => 'required|max:350',

        ]);

        // Create New User
        $user = new ComplainType();
        $user->name = $request->name;
        $user->des = $request->des;

        $user->save();

        return redirect()->route('admin.complain_type')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =ComplainType::find($request->id);
        $user->name = $request->name;
        $user->des = $request->des;
        $user->save();

        return redirect()->route('admin.complain_type')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = ComplainType::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.complain_type')->with('error','Deleted successfully!');
    }
}
