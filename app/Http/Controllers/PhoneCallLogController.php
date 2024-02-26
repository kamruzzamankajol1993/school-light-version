<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ComplainType;
use App\Source;
use App\Complain;
use App\PostalReceive;
use App\PostalDispatch;
use App\PhoneCallLog;
class PhoneCallLogController extends Controller
{

    public function index(){

        $phone_call_log_details = PhoneCallLog::latest()->get();
        $complainType_details = ComplainType::latest()->get();
        $source_details = Source::latest()->get();

        return view('admin.phone_call_log.index',[

            'phone_call_log_details'=>$phone_call_log_details,
            'complainType_details'=>$complainType_details,
            'source_details'=>$source_details
        ]);
    }





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'phone' => 'required|max:350',

        ]);

        // Create New User
        $user = new PhoneCallLog();
        $user->name = $request->name;
        $user->phone= $request->phone;
        $user->des = $request->des;
        $user->next_follow_up_date = $request->next_follow_up_date;
        $user->date = $request->date;
        $user->call_duration = $request->call_duration;
        $user->call_type = $request->call_type;
        $user->note = $request->note;
        $user->save();

        return redirect()->route('admin.phone_call_log')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =PhoneCallLog::find($request->id);
        $user->name = $request->name;
        $user->phone= $request->phone;
        $user->des = $request->des;
        $user->next_follow_up_date = $request->next_follow_up_date;
        $user->date = $request->date;
        $user->call_duration = $request->call_duration;
        $user->call_type = $request->call_type;
        $user->note = $request->note;
        $user->save();

        return redirect()->route('admin.phone_call_log')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = PhoneCallLog::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.phone_call_log')->with('error','Deleted successfully!');
    }




}
