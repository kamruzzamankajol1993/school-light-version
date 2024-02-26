<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemCategory;
use App\Models\Itemstore;
class ItemstoreController extends Controller
{
    public function index(){


        $item_store_details = Itemstore::latest()->get();


        return view('admin.item_store.index',['item_store_details'=>$item_store_details]);
    }





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'name' => 'required|max:350',

        ]);

        // Create New User
        $user = new Itemstore();
        $user->name = $request->name;
        $user->des = $request->des;
        $user->code = $request->code;
        $user->save();

        return redirect()->route('admin.item_store')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =Itemstore::find($request->id);
        $user->name = $request->name;
        $user->des = $request->des;
        $user->code = $request->code;
        $user->save();

        return redirect()->route('admin.item_store')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = Itemstore::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.item_store')->with('error','Deleted successfully!');
    }
}
