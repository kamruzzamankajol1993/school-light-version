<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ComplainType;
use App\Source;
use App\Complain;
class ComplainController extends Controller
{
    public function index(){

        $complain_details = Complain::latest()->get();
        $complainType_details = ComplainType::latest()->get();
        $source_details = Source::latest()->get();

        return view('admin.complain.index',[

            'complain_details'=>$complain_details,
            'complainType_details'=>$complainType_details,
            'source_details'=>$source_details
        ]);
    }





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'com_by' => 'required|max:350',

        ]);

        // Create New User
        $user = new Complain();
        $user->com_type = $request->com_type;
        $user->source = $request->source;
        $user->com_by = $request->com_by;
        $user->phone = $request->phone;
        $user->date = $request->date;
        $user->des = $request->des;
        $user->action_taken = $request->action_taken;
        $user->assigned = $request->assigned;
        $user->note = $request->note;
        if ($request->hasfile('document')) {
            $file = $request->file('document');
            $extension = $file->getClientOriginalName();
            $filename = $extension;
            $file->move('public/uploads/', $filename);
            $user->document =  $filename;
        }
        $user->save();

        return redirect()->route('admin.complain')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =Complain::find($request->id);
        $user->com_type = $request->com_type;
        $user->source = $request->source;
        $user->com_by = $request->com_by;
        $user->phone = $request->phone;
        $user->date = $request->date;
        $user->des = $request->des;
        $user->action_taken = $request->action_taken;
        $user->assigned = $request->assigned;
        $user->note = $request->note;
        if ($request->hasfile('document')) {
            $file = $request->file('document');
            $extension = $file->getClientOriginalName();
            $filename = $extension;
            $file->move('public/uploads/', $filename);
            $user->document =  $filename;
        }
        $user->save();

        return redirect()->route('admin.complain')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = Complain::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.complain')->with('error','Deleted successfully!');
    }


    public function complain_file_download($id){
        $documnent_info = Complain::where('id',$id)->value('document');


        $filePath = public_path('uploads'.'/'.$documnent_info);

        //dd($filePath);
            // $headers = ['Content-Type: application/pdf'];
            // $fileName = time().'.pdf';

            return response()->download($filePath, $documnent_info);

    }
}
