<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SessionYear;
class SessionYearController extends Controller
{
    public function index(){


        $session_details = SessionYear::latest()->get();

        return view('admin.session_year.index',['session_details'=>$session_details]);
    }



    public function store(Request $request){


        // Validation Data
        $request->validate([
            'name' => 'required|max:50',

        ]);

        // Create New User
        $user = new SessionYear();
        $user->name = $request->name;
        $user->status = $request->status;
        $user->save();

        return redirect()->route('admin.year_session')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =SessionYear::find($request->id);
        $user->name = $request->name;
        $user->status = $request->status;
        $user->save();

        return redirect()->route('admin.year_session')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = SessionYear::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.year_session')->with('error','Deleted successfully!');
    }
}
