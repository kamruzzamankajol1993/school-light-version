<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Source;
class SourceController extends Controller
{
    public function index(){


        $source_details = Source::latest()->get();


        return view('admin.source.index',['source_details'=>$source_details]);
    }





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'name' => 'required|max:350',

        ]);

        // Create New User
        $user = new Source();
        $user->name = $request->name;
        $user->des = $request->des;

        $user->save();

        return redirect()->route('admin.source')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =Source::find($request->id);
        $user->name = $request->name;
        $user->des = $request->des;
        $user->save();

        return redirect()->route('admin.source')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = Source::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.source')->with('error','Deleted successfully!');
    }
}
