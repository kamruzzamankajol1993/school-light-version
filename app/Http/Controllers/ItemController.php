<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemCategory;
use App\Models\Item;
class ItemController extends Controller
{
    public function index(){


        $item_category_details = ItemCategory::latest()->get();
        $item_details = Item::latest()->get();

        return view('admin.item.index',['item_category_details'=>$item_category_details,'item_details'=>$item_details]);
    }





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'name' => 'required|max:350',

        ]);

        // Create New User
        $user = new Item();
        $user->name = $request->name;
        $user->category = $request->category;
        $user->unit = $request->unit;
        $user->available_quantity = $request->unit;
        $user->des = $request->des;

        $user->save();

        return redirect()->route('admin.item')->with('success','Created successfully!');


    }


    public function update(Request $request){

           $get_quantity = Item::where('id',$request->id)->value('available_quantity');


        // Create New User
        $user =Item::find($request->id);
        $user->name = $request->name;
        $user->category = $request->category;
        $user->unit = $request->unit;


        // if($request->unit > $get_quantity){
        // $user->available_quantity = $request->unit + $get_quantity;
        // }else{
        //     $user->available_quantity = $get_quantity -$request->unit;

        // }
        $user->des = $request->des;
        $user->save();

        return redirect()->route('admin.item')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = Item::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.item')->with('error','Deleted successfully!');
    }
}
