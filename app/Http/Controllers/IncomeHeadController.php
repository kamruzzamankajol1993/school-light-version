<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IncomeHead;
class IncomeHeadController extends Controller
{
    public function index(){


        $income_head_details = IncomeHead::latest()->get();


        return view('admin.income.income_head.index',['income_head_details'=>$income_head_details]);
    }





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'income_head' => 'required|max:350',

        ]);

        // Create New User
        $user = new IncomeHead();
        $user->income_head = $request->income_head;
        $user->des = $request->des;

        $user->save();

        return redirect()->route('admin.income_head')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =IncomeHead::find($request->id);
        $user->income_head = $request->income_head;
        $user->des = $request->des;
        $user->save();

        return redirect()->route('admin.income_head')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = IncomeHead::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.income_head')->with('error','Deleted successfully!');
    }
}
