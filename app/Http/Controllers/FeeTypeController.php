<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeeType;
class FeeTypeController extends Controller
{
    public function index(){


        $fee_type_details = FeeType::latest()->get();


        return view('admin.fee_type.index',['fee_type_details'=>$fee_type_details]);
    }





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'name' => 'required|max:350',

        ]);

        // Create New User
        $user = new FeeType();
        $user->name = $request->name;
        $user->fee_code = $request->fee_code;
        $user->des = $request->des;
        $user->save();

        return redirect()->route('admin.fee_type')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =FeeType::find($request->id);
        $user->name = $request->name;
        $user->fee_code = $request->fee_code;
        $user->des = $request->des;
        $user->save();

        return redirect()->route('admin.fee_type')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = FeeType::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.fee_type')->with('error','Deleted successfully!');
    }
}
