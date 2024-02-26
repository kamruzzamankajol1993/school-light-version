<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\IssueBook;
use App\Staff;
use App\Models\LibraryInfo;
use App\Srani;
use App\Department;
use App\Section;
use App\MainStudent;
use DB;

use App\Subject;
use App\Student;
use App\Result;
use App\InstituteInformation;
use App\Exam;
use App\CustomeField;
use App\Teststudent;
use Image;
use App\StudentCategory;

use App\StudentHouse;
use App\Vehicle;
use App\HostelInfo;
use App\Sibling;
use App\Document;
use App\HostelRoom;
use App\DisableReason;
class BookController extends Controller
{
    public function index(){


        $book_list = Book::latest()->get();

        return view('admin.book.index',[


            'book_list'=>$book_list,
        ]);
    }





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'book_title' => 'required|max:350',

        ]);

        // Create New User
        $user = new Book();
        $user->book_title = $request->book_title;
        $user->book_number= $request->book_number;
        $user->isbn_number = $request->isbn_number;
        $user->publisher = $request->publisher;
        $user->author = $request->author;
        $user->subject	= $request->subject;
        $user->rack_number = $request->rack_number;
        $user->quantity = $request->quantity;
        $user->available_quantity = $request->quantity;
        $user->book_price = $request->book_price;
        $user->post_date = $request->post_date;
        $user->des = $request->des;
        $user->save();

        return redirect()->route('admin.book')->with('success','Created successfully!');


    }


    public function update(Request $request){


        $previous_quantity = Book::where('id',$request->id)->value('available_quantity');

        if($request->symbol == 'p'){

            $final_result = $previous_quantity + $request->quantity;

        }else{

             $final_result = $previous_quantity - $request->quantity;
        }


        // Create New User
        $user =Book::find($request->id);
        $user->book_title = $request->book_title;
        $user->book_number= $request->book_number;
        $user->isbn_number = $request->isbn_number;
        $user->publisher = $request->publisher;
        $user->author = $request->author;
        $user->subject	= $request->subject;
        $user->rack_number = $request->rack_number;

        //if($previous_quantity> $request->quantity)

        $user->quantity = $request->quantity;
        $user->available_quantity = $final_result;

        $user->book_price = $request->book_price;
        $user->post_date = $request->post_date;
        $user->des = $request->des;
        $user->save();

        return redirect()->route('admin.book')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = Book::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.book')->with('error','Deleted successfully!');
    }


    public function add_member_to_library(){

        $member_list = Staff::latest()->get();
        $library_info_list = LibraryInfo::latest()->get();
        return view('admin.book.add_member_to_library',[


            'member_list'=>$member_list,
            'library_info_list'=>$library_info_list
        ]);

    }


    public function add_member_to_library_save(Request $request){

        $user =Staff::find($request->id);
        $user->library_id = $request->card_no;
        $user->library_card_status= 1;
        $user->save();


        $library_data = new LibraryInfo();
        $library_data->card_no = $request->card_no;
        $library_data->member_type = 'staff';
        $library_data->member_id = $request->id;
        $library_data->save();

        return redirect()->route('add_member_to_library')->with('success','Added Successfully!');

    }


    public function remove_member_to_library_save($id){

        $user =Staff::find($id);
        $user->library_id = '';
        $user->library_card_status= 0;
        $user->save();


        DB::table('library_infos')->where('id', $id)->delete();

        return redirect()->route('add_member_to_library')->with('error','Removed Successfully!');

    }

    public function add_student_to_library_save(Request $request){

        $user =MainStudent::find($request->id);
        $user->library_id = $request->card_no;
        $user->library_card_status= 1;
        $user->save();


        $library_data = new LibraryInfo();
        $library_data->card_no = $request->card_no;
        $library_data->member_id = $request->id;
        $library_data->member_type = 'student';
        $library_data->save();

        return redirect()->route('add_student_to_library')->with('success','Added Successfully!');

    }


    public function remove_student_to_library_save($id){

        $user =MainStudent::find($id);
        $user->library_id = '';
        $user->library_card_status= 0;
        $user->save();
        DB::table('library_infos')->where('id', $id)->delete();
        return redirect()->route('add_student_to_library')->with('error','Removed Successfully!');

    }

    public function add_student_to_library(){
        $class_details = Srani::latest()->get();
        $member_list = MainStudent::latest()->get();
        $library_info_list = LibraryInfo::latest()->get();
        return view('admin.book.add_student_to_library',[

            'class_details'=>$class_details,
            'member_list'=>$member_list,
            'library_info_list'=>$library_info_list
        ]);

    }


    public function library_wise_student_view(Request $request){

        $student_details = MainStudent::where('class',$request->class_id)
        ->where('section',$request->section_id)
        ->where('department',$request->department_id)
        ->get();


        return view('admin.book.library_wise_student_view',[
            'student_details'=>$student_details

         ]);

    }


    public function issued_book_list(){

        $library_info_list = LibraryInfo::latest()->get();
        return view('admin.book.issued_book_list',[

            'library_info_list'=>$library_info_list
        ]);

    }




    public function member_wise_issued_book_list($id,$type){


        if($type == 'staff'){

     $main_student_or_staff_detail = Staff::where('id',$id)->latest()->first();
        }else{

            $main_student_or_staff_detail = MainStudent::where('id',$id)->latest()->first();

        }


        $book_list = Book::latest()->get();
        $issue_book_list = IssueBook::where('member_id',$id)->get();
        $type = $type;
          return view('admin.book.member_wise_issued_book_list',[
         'main_student_or_staff_detail'=>$main_student_or_staff_detail,
            'issue_book_list'=>$issue_book_list,
            'type'=>$type,
            'book_list'=>$book_list


        ]);

    }



    public function quantity_search_of_book(Request $request){

        $states = Book::where('id',$request->id_country)->value('available_quantity');
        $data = $states ;


        return response()->json(['options'=>$data]);

    }



    public function issued_book_list_save(Request $request){

        $library_data = new IssueBook();
        $library_data->book_id = $request->book_id;
        $library_data->member_id = $request->member_id;
        $library_data->issue_date =date('Y-m-d');
        $library_data->return_date = $request->return_date;
        $library_data->save();


        $book_id_list = Book::where('id',$request->book_id)->value('available_quantity');


        $final_result = $book_id_list -1 ;


        Book::where('id', $request->book_id)
       ->update([
           'available_quantity' => $final_result
        ]);

        return redirect()->back()->with('success','Added Successfully!');

    }




    public function return_date_book(Request $request){


        // $library_data = new IssueBook();
        // $library_data->book_id = $request->book_id;
        // $library_data->member_id = $request->member_id;
        // $library_data->issue_date =date('Y-m-d');
        // $library_data->return_date = $request->return_date;
        // $library_data->save();

        $book_id_list_update = IssueBook::where('id',$request->id) ->update([
            'mainreturn' => date('Y-m-d')
         ]);


        $book_id_list = Book::where('id',$request->book_id)->value('available_quantity');


        $final_result = $book_id_list +1 ;


        Book::where('id', $request->book_id)
       ->update([
           'available_quantity' => $final_result
        ]);

        return redirect()->back()->with('success','Added Successfully!');



    }


}
