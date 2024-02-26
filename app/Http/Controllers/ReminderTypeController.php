<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReminderType;
class ReminderTypeController extends Controller
{
    public function index(){


        $reminder_type_details = ReminderType::latest()->get();


        return view('admin.reminder_type.index',['reminder_type_details'=>$reminder_type_details]);
    }





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'reminder_type' => 'required|max:350',

        ]);

        // Create New User
        $user = new ReminderType();
        $user->reminder_type = $request->reminder_type;
        $user->days = $request->days;
        $user->status = $request->status;
        $user->save();

        return redirect()->route('admin.reminder_type')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =ReminderType::find($request->id);
        $user->reminder_type = $request->reminder_type;
        $user->days = $request->days;
        $user->status = $request->status;
        $user->save();

        return redirect()->route('admin.reminder_type')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = ReminderType::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.reminder_type')->with('error','Deleted successfully!');
    }
}
