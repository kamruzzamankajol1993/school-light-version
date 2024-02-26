<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeeGroup;
class FeeGroupController extends Controller
{
    public function index(){


        $fee_group_details = FeeGroup::latest()->get();


        return view('admin.fee_group.index',['fee_group_details'=>$fee_group_details]);
    }





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'name' => 'required|max:350',

        ]);

        // Create New User
        $user = new FeeGroup();
        $user->name = $request->name;

        $user->des = $request->des;
        $user->save();

        return redirect()->route('admin.fee_group')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =FeeGroup::find($request->id);
        $user->name = $request->name;

        $user->des = $request->des;
        $user->save();

        return redirect()->route('admin.fee_group')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = FeeGroup::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.fee_group')->with('error','Deleted successfully!');
    }
}
