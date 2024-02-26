<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemCategory;
use App\Models\Item;
use App\Models\ItemSupplier;
use App\Models\Itemstore;
use App\Models\ItemStock;
class ItemStockController extends Controller
{
    public function index(){


        $item_category_details = ItemCategory::latest()->get();
        $item_details = Item::latest()->get();
        $item_supplier_list = ItemSupplier::latest()->get();
        $item_store_details = Itemstore::latest()->get();
        $item_stocks_details = ItemStock::latest()->get();
        return view('admin.item_stock.index',[
            'item_category_details'=>$item_category_details,
            'item_supplier_list'=>$item_supplier_list,
            'item_store_details'=>$item_store_details,
            'item_stocks_details'=>$item_stocks_details,
            'item_details'=>$item_details
        ]);
    }





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'item' => 'required|max:350',

        ]);

        // Create New User
        $user = new ItemStock();
        $user->item_category = $request->item_category;
        $user->item = $request->item;
        $user->supplier = $request->supplier;
        $user->store = $request->store;
        $user->quantity = $request->quantity;
        $user->purchase_price = $request->purchase_price;
        $user->date = $request->date;
        if ($request->hasfile('doc')) {
            $file = $request->file('doc');
            $extension = $file->getClientOriginalName();
            $filename = $extension;
            $file->move('public/uploads/', $filename);
            $user->document =  $filename;
        }
        $user->des = $request->des;

        $user->save();

        $get_quantity = Item::where('id',$request->item)->value('available_quantity');



        $final_quantity = $request->quantity + $get_quantity;



        $get_quantity_update = Item::where('id',$request->item)->update(['available_quantity' => $final_quantity ]);


        return redirect()->route('admin.item_stock')->with('success','Created successfully!');


    }


    public function update(Request $request){




        // Create New User
        $user =ItemStock::find($request->id);
        $user->item_category = $request->item_category;
        $user->item = $request->item;
        $user->supplier = $request->supplier;
        $user->store = $request->store;
        $user->quantity = $request->quantity;
        $user->purchase_price = $request->purchase_price;
        $user->date = $request->date;
        if ($request->hasfile('doc')) {
            $file = $request->file('doc');
            $extension = $file->getClientOriginalName();
            $filename = $extension;
            $file->move('public/uploads/', $filename);
            $user->document =  $filename;
        }
        $user->des = $request->des;

        $user->save();


        $get_quantity = Item::where('id',$request->item)->value('available_quantity');


        if($get_quantity > $request->quantity ){

            $final_quantity = $request->quantity + $get_quantity;
            $get_quantity_update = Item::where('id',$request->item)->update(['available_quantity' => $final_quantity ]);

        }else{
            $final_quantity = $get_quantity-$request->quantity;
            $get_quantity_update = Item::where('id',$request->item)->update(['available_quantity' => $final_quantity ]);

        }









        return redirect()->route('admin.item_stock')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = ItemStock::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.item_stock')->with('error','Deleted successfully!');
    }


    public function item_search(Request $request)
    {


            $states = Item::where('category',$request->id_country)->get();
            $data = view('admin.item_stock.item_search',compact('states'))->render();


            return response()->json(['options'=>$data]);

}


public function quantity_search(Request $request)
    {


            $states = Item::where('id',$request->id_country)->value('available_quantity');
            $data = $states ;


            return response()->json(['options'=>$data]);

}



}
