<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrintHeader;
class PrintHeaderController extends Controller
{
    public function index(){



        $print_header_details = PrintHeader::latest()->get();
               return view('admin.print_header_footer.index',['print_header_details'=>$print_header_details]);
           }





           public function store(Request $request){


               // Validation Data
               $request->validate([
                   'header_image' => 'required',

               ]);

               // Create New User
               $user = new PrintHeader();
               if ($request->hasfile('header_image')) {
                $file = $request->file('header_image');
                $extension = $file->getClientOriginalName();
                $filename = $extension;
                $file->move('public/uploads/', $filename);
                $user->header_image = 'public/uploads/'.$filename;
            }
               $user->footer= $request->footer;

               $user->status = $request->status;
               $user->save();

               return redirect()->route('admin.print_header')->with('success','Created successfully!');


           }


           public function update(Request $request){


               // Create New User
               $user =PrintHeader::find($request->id);
               if ($request->hasfile('header_image')) {
                $file = $request->file('header_image');
                $extension = $file->getClientOriginalName();
                $filename = $extension;
                $file->move('public/uploads/', $filename);
                $user->header_image =  'public/uploads/'.$filename;
            }
               $user->footer= $request->footer;

               $user->status = $request->status;
               $user->save();

               return redirect()->route('admin.print_header')->with('success','Updated successfully!');


           }


           public function destroy($id){

                $user = PrintHeader::find($id);
               if (!is_null($user)) {
                   $user->delete();
               }


               return redirect()->route('admin.print_header')->with('error','Deleted successfully!');
           }
}
