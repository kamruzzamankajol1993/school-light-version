<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ComplainType;
use App\Source;
use App\Complain;
use App\PostalReceive;
class PostalReceiveController extends Controller
{
    public function index(){

        $postalreceive_details = PostalReceive::latest()->get();
        $complainType_details = ComplainType::latest()->get();
        $source_details = Source::latest()->get();

        return view('admin.postal_receive.index',[

            'postalreceive_details'=>$postalreceive_details,
            'complainType_details'=>$complainType_details,
            'source_details'=>$source_details
        ]);
    }





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'from_title' => 'required|max:350',

        ]);

        // Create New User
        $user = new PostalReceive();
        $user->from_title = $request->from_title;
        $user->refrence_no= $request->refrence_no;
        $user->address = $request->address;
        $user->note = $request->note;
        $user->date = $request->date;
        $user->to_title = $request->to_title;
        $user->note = $request->note;
        if ($request->hasfile('document')) {
            $file = $request->file('document');
            $extension = $file->getClientOriginalName();
            $filename = $extension;
            $file->move('public/uploads/', $filename);
            $user->document =  $filename;
        }
        $user->save();

        return redirect()->route('admin.postal_receive')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =PostalReceive::find($request->id);
        $user->from_title = $request->from_title;
        $user->refrence_no= $request->refrence_no;
        $user->address = $request->address;
        $user->note = $request->note;
        $user->date = $request->date;
        $user->to_title = $request->to_title;
        $user->note = $request->note;
        if ($request->hasfile('document')) {
            $file = $request->file('document');
            $extension = $file->getClientOriginalName();
            $filename = $extension;
            $file->move('public/uploads/', $filename);
            $user->document =  $filename;
        }
        $user->save();

        return redirect()->route('admin.postal_receive')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = PostalReceive::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.postal_receive')->with('error','Deleted successfully!');
    }


    public function postal_receive_download($id){
        $documnent_info = PostalReceive::where('id',$id)->value('document');


        $filePath = public_path('uploads'.'/'.$documnent_info);

        //dd($filePath);
            // $headers = ['Content-Type: application/pdf'];
            // $fileName = time().'.pdf';

            return response()->download($filePath, $documnent_info);

    }
}
