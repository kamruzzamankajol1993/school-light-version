<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DisableReason;
class DisableReasonController extends Controller
{
    public function index(){



        $disable_reason_details = DisableReason::latest()->get();
               return view('admin.disable_reason_details.index',['disable_reason_details'=>$disable_reason_details]);
           }





           public function store(Request $request){


               // Validation Data
               $request->validate([
                   'name' => 'required|max:250',

               ]);

               // Create New User
               $user = new DisableReason();
               $user->name = $request->name;
               $user->save();

               return redirect()->route('admin.student_disable_reason')->with('success','Created successfully!');


           }


           public function update(Request $request){


               // Create New User
               $user =DisableReason::find($request->id);
               $user->name = $request->name;
               $user->save();

               return redirect()->route('admin.student_disable_reason')->with('success','Updated successfully!');


           }


           public function destroy($id){

                $user = DisableReason::find($id);
               if (!is_null($user)) {
                   $user->delete();
               }


               return redirect()->route('admin.student_disable_reason')->with('error','Deleted successfully!');
           }
}
