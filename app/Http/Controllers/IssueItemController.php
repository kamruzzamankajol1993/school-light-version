<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemCategory;
use App\Models\Item;
use App\Models\ItemSupplier;
use App\Models\Itemstore;
use App\Models\ItemStock;
use App\Models\IssueItem;
use App\Models\Admin;
use DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class IssueItemController extends Controller
{

    public function index(){

        $item_category_details = ItemCategory::latest()->get();
        $item_details = Item::latest()->get();
        $roles  = Role::where('name','!=','superadmin')->get();

        $item_issue_details = IssueItem::latest()->get();
       $admin_list = Admin::where('id','!=',1)->get();
        return view('admin.issue_item.index',[
            'item_category_details'=>$item_category_details,
            'item_details'=>$item_details,
            'roles'=>$roles,
            'item_issue_details'=>$item_issue_details,
            'admin_list'=>$admin_list
        ]);

    }

    public function user_list_search(Request $request){


        $states1 = DB::table('model_has_roles')->where('role_id',$request->id_country)->get();


        $convert_name_title1 = $states1->implode("model_id", ", ");
$separated_data_title = explode(",", $convert_name_title1);

$states = Admin::whereIn('id',$separated_data_title)->get();





        $data = view('admin.issue_item.user_list_search',compact('states'))->render();


        return response()->json(['options'=>$data]);


    }



    public function store(Request $request){


        // Validation Data
        $request->validate([
            'item' => 'required|max:350',

        ]);

        // Create New User
        $user = new IssueItem();
        $user->user_type = $request->user_type;
        $user->issue_to = $request->issue_to;
        $user->issue_by = $request->issue_by;
        $user->issue_date = $request->issue_date;
        $user->return_date = $request->return_date;
        $user->note = $request->note;
        $user->item_category = $request->item_category	;
        $user->item = $request->item;
        $user->quantity = $request->quantity;
        $user->status = '0';
        $user->save();

        $get_quantity = Item::where('id',$request->item)->value('available_quantity');



        $final_quantity =  $get_quantity - $request->quantity;



        $get_quantity_update = Item::where('id',$request->item)->update(['available_quantity' => $final_quantity ]);


        return redirect()->route('admin.issue_item')->with('success','Created successfully!');


    }


    public function update(Request $request){


        $item_id = IssueItem::where('id',$request->id)->value('item');

        $get_quantity_update1 = IssueItem::where('id',$request->id)->update(['status' => 'Returned']);

        $get_quantity = Item::where('id',$item_id)->value('available_quantity');



        $final_quantity =  $get_quantity + $request->quantity;

        $get_quantity_update = Item::where('id',$item_id)->update(['available_quantity' => $final_quantity ]);

        return redirect()->route('admin.issue_item')->with('success',' successfully returned!');

    }


    public function destroy($id){

        $get_quantity_update1 = IssueItem::where('id',$id)->value('status');

        if($get_quantity_update1 == 'Returned'){
            $user = IssueItem::find($id);
            if (!is_null($user)) {
                $user->delete();
            }


        }else{



        $item_id = IssueItem::where('id',$id)->value('item');

        $item_id_quantity = IssueItem::where('id',$id)->value('quantity');



        $get_quantity = Item::where('id',$item_id)->value('available_quantity');



        $final_quantity =  $get_quantity + $item_id_quantity;

        $get_quantity_update = Item::where('id',$item_id)->update(['available_quantity' => $final_quantity ]);

        $user = IssueItem::find($id);
       if (!is_null($user)) {
           $user->delete();
       }

    }
       return redirect()->route('admin.issue_item')->with('error','Deleted successfully!');
   }
}
