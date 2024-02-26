<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeeDiscount;
class FeeDiscountController extends Controller
{
    public function index(){


        $fee_discount_details = FeeDiscount::latest()->get();


        return view('admin.fee_discount.index',['fee_discount_details'=>$fee_discount_details]);
    }





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'name' => 'required|max:350',

        ]);

        // Create New User
        $user = new FeeDiscount();
        $user->name = $request->name;
        $user->discount_code = $request->discount_code;
        $user->amount = $request->amount;
        $user->des = $request->des;
        $user->save();

        return redirect()->route('admin.fee_discount')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =FeeDiscount::find($request->id);
        $user->name = $request->name;
        $user->discount_code = $request->discount_code;
        $user->amount = $request->amount;
        $user->des = $request->des;
        $user->save();

        return redirect()->route('admin.fee_discount')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = FeeDiscount::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.fee_discount')->with('error','Deleted successfully!');
    }
}
