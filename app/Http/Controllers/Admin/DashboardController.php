<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use PDF;
use App\Srani;
use App\Department;
use App\Section;
use App\Subject;
use App\Teacher;
use App\Student;
use App\Result;
use App\Exam;
use App\Models\Admin;
use App\Ward;
use App\AdminNotice;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{

	public $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('admin')->user();
            return $next($request);
        });
    }


    public function index(){


if (is_null($this->user) || !$this->user->can('dashboard.view')) {
            abort(403, 'Sorry !! You are Unauthorized to view dashboard !');
        }



        //admin wise dashboard
        $wardId = Auth::guard('admin')->user()->ward_id;


$class_details = Srani::latest()->count();
         $dp_details = Department::latest()->count();
         $section_details = Section::latest()->count();
         $student_details = Student::latest()->count();
       $subject_details = Subject::latest()->count();
         $exam_details = Exam::latest()->count();
$teacher_details = Teacher::latest()->count();
        return view('admin.dashboard',['teacher_details'=>$teacher_details,'exam_details'=>$exam_details,'class_details'=>$class_details,'dp_details'=>$dp_details,'section_details'=>$section_details,'student_details'=>$student_details,'subject_details'=>$subject_details]);











    }
}
