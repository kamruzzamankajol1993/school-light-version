<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ComplainType;
use App\Source;
use App\Complain;
use App\PostalReceive;
use App\PostalDispatch;
use App\Models\ItemSupplier;
class ItemSupplierController extends Controller
{
    public function index(){


        $item_supplier_list = ItemSupplier::latest()->get();

        return view('admin.item_supplier_list.index',[


            'item_supplier_list'=>$item_supplier_list,
        ]);
    }





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'name' => 'required|max:350',

        ]);

        // Create New User
        $user = new ItemSupplier();
        $user->name = $request->name;
        $user->phone= $request->phone;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->contact_person_name = $request->contact_person_name;
        $user->contact_person_phone	= $request->contact_person_phone;
        $user->contact_person_email = $request->contact_person_email;
        $user->	des = $request->des;
        $user->save();

        return redirect()->route('admin.item_supplier')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =ItemSupplier::find($request->id);
        $user->name = $request->name;
        $user->phone= $request->phone;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->contact_person_name = $request->contact_person_name;
        $user->contact_person_phone	= $request->contact_person_phone;
        $user->contact_person_email = $request->contact_person_email;
        $user->	des = $request->des;
        $user->save();

        return redirect()->route('admin.item_supplier')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = ItemSupplier::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.item_supplier')->with('error','Deleted successfully!');
    }

}
