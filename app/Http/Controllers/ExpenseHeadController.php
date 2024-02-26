<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExpenseHead;
class ExpenseHeadController extends Controller
{
    public function index(){


        $expense_head_details = ExpenseHead::latest()->get();


        return view('admin.expense.expense_head.index',['expense_head_details'=>$expense_head_details]);
    }





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'expense_head' => 'required|max:350',

        ]);

        // Create New User
        $user = new ExpenseHead();
        $user->expense_head = $request->expense_head;
        $user->des = $request->des;

        $user->save();

        return redirect()->route('admin.expense_head')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =ExpenseHead::find($request->id);
        $user->expense_head = $request->expense_head;
        $user->des = $request->des;
        $user->save();

        return redirect()->route('admin.expense_head')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = ExpenseHead::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.expense_head')->with('error','Deleted successfully!');
    }
}
