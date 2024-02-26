<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ComplainType;
use App\Source;
use App\Complain;
use App\PostalReceive;
use App\PostalDispatch;
class PostalDispatchController extends Controller
{
    public function index(){

        $postalreceive_details = PostalDispatch::latest()->get();
        $complainType_details = ComplainType::latest()->get();
        $source_details = Source::latest()->get();

        return view('admin.postal_dispatch.index',[

            'postalreceive_details'=>$postalreceive_details,
            'complainType_details'=>$complainType_details,
            'source_details'=>$source_details
        ]);
    }





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'to_title' => 'required|max:350',

        ]);

        // Create New User
        $user = new PostalDispatch();
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

        return redirect()->route('admin.postal_dispatch')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =PostalDispatch::find($request->id);
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

        return redirect()->route('admin.postal_dispatch')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = PostalDispatch::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.postal_dispatch')->with('error','Deleted successfully!');
    }


    public function postal_dispatch_download($id){
        $documnent_info = PostalDispatch::where('id',$id)->value('document');


        $filePath = public_path('uploads'.'/'.$documnent_info);

        //dd($filePath);
            // $headers = ['Content-Type: application/pdf'];
            // $fileName = time().'.pdf';

            return response()->download($filePath, $documnent_info);

    }
}
