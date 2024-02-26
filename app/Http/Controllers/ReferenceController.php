<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reference;
class ReferenceController extends Controller
{
    public function index(){


        $reference_details = Reference::latest()->get();


        return view('admin.reference.index',['reference_details'=>$reference_details]);
    }





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'name' => 'required|max:350',

        ]);

        // Create New User
        $user = new Reference();
        $user->name = $request->name;
        $user->des = $request->des;

        $user->save();

        return redirect()->route('admin.reference')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =Reference::find($request->id);
        $user->name = $request->name;
        $user->des = $request->des;
        $user->save();

        return redirect()->route('admin.reference')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = Reference::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.reference')->with('error','Deleted successfully!');
    }
}
