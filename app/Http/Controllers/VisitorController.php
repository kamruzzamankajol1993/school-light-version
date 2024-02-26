<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visitor;
use App\Purpose;
class VisitorController extends Controller
{
    public function index(){

        $visitor_details = Visitor::latest()->get();
        $purpose_details = Purpose::latest()->get();

        return view('admin.visitor_book.index',[

            'visitor_details'=>$visitor_details,
            'purpose_details'=>$purpose_details

        ]);
    }





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'purpose' => 'required|max:350',

        ]);

        // Create New User
        $user = new Visitor();
        $user->purpose = $request->purpose;
        $user->name= $request->name;
        $user->phone = $request->phone;
        $user->id_card = $request->id_card;
        $user->date = $request->date;
        $user->number_of_person	 = $request->number_of_person;
        $user->in_time	 = $request->in_time;
        $user->out_time	 = $request->out_time;
        $user->note = $request->note;
        if ($request->hasfile('doc')) {
            $file = $request->file('doc');
            $extension = $file->getClientOriginalName();
            $filename = $extension;
            $file->move('public/uploads/', $filename);
            $user->doc =  $filename;
        }
        $user->save();

        return redirect()->route('admin.visitor_book')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =Visitor::find($request->id);
        $user->purpose = $request->purpose;
        $user->name= $request->name;
        $user->phone = $request->phone;
        $user->id_card = $request->id_card;
        $user->date = $request->date;
        $user->number_of_person	 = $request->number_of_person;
        $user->in_time	 = $request->in_time;
        $user->out_time	 = $request->out_time;
        $user->note = $request->note;
        if ($request->hasfile('doc')) {
            $file = $request->file('doc');
            $extension = $file->getClientOriginalName();
            $filename = $extension;
            $file->move('public/uploads/', $filename);
            $user->doc =  $filename;
        }
        $user->save();

        return redirect()->route('admin.visitor_book')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = Visitor::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.visitor_book')->with('error','Deleted successfully!');
    }


    public function visitor_book_download($id){
        $documnent_info = Visitor::where('id',$id)->value('doc');


        $filePath = public_path('uploads'.'/'.$documnent_info);

        //dd($filePath);
            // $headers = ['Content-Type: application/pdf'];
            // $fileName = time().'.pdf';

            return response()->download($filePath, $documnent_info);

    }
}
