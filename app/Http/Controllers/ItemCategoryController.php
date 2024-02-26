<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemCategory;
class ItemCategoryController extends Controller
{
    public function index(){


        $item_category_details = ItemCategory::latest()->get();


        return view('admin.item_categoty.index',['item_category_details'=>$item_category_details]);
    }





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'name' => 'required|max:350',

        ]);

        // Create New User
        $user = new ItemCategory();
        $user->name = $request->name;
        $user->des = $request->des;

        $user->save();

        return redirect()->route('admin.item_category')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =ItemCategory::find($request->id);
        $user->name = $request->name;
        $user->des = $request->des;
        $user->save();

        return redirect()->route('admin.item_category')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = ItemCategory::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.item_category')->with('error','Deleted successfully!');
    }
}
