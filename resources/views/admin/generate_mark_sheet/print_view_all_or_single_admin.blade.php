<p class="btn btn-sm btn-success mt-3" style="" onclick="printContent('barcode')">Print</p>
    <div class="barcode-print" id="barcode">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>

        @page {
            margin: 18px;
        }

        p,
        h5,
        h4,
        h6,
        h3,
        h2 {
            padding: 0;
            margin: 0;
        }

        body {
            font-weight: normal;
            font-size: 15px;
            /* font-family: Poppins sans-serif; */
        }

        .body_container {
            height: 200mm;
            width: 297mm;
        }

        .pdf_body {
            padding: 2%;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }




        .logo_table tr td:nth-child(1)
        {
            width: 20%;
            text-align: right;
        }

        .logo_table tr td:nth-child(2)
        {
            width: 40%;
            text-align: center;
        }
        .logo_table tr td:nth-child(3)
        {
            width: 20%;
            text-align: center;
        }


        .logo_table img
        {
            height: 80px;
            width: 80px;
        }

        .logo_table tr td h1
        {
            font-size: 35px;
            margin-top:0;
            margin-bottom:0;
            color: darkslateblue;
            font-weight: bold;
        }

        .logo_table tr td h4
        {
            font-size: 16px;
            margin-top:0;
            font-weight: 600;
        }

        .logo_table tr td h3
        {
            font-size: 20px;
            margin-top:0;
            font-weight: 600;
        }

        .first_table tr td h1
        {
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            text-decoration: underline;
        }

        .second_table tr td
        {
            padding-bottom: 10px;
        }

        .second_table tr td:nth-child(1)
        {
            width: 15%;
        }

        .third_table
        {
            border: 1px solid black;
            margin-top: 15px;
        }

        .third_table th
        {
            border: 1px solid black;
            padding: 5px;
        }
        .third_table td
        {
            border: 1px solid black;
            text-align: center;
            padding: 5px;
        }



    </style>
</head>
<body>

@foreach($student_details as $all_student_list)
<div class="body_container">
    <div class="pdf_body">

        <table class="logo_table">
            <tr>
                <td>
                    <img src="{{ asset('/') }}{{ $institute_list->logo }}" alt="">
                </td>
                <td>
                    <h1 style="color:{{ $design_admit_card->backfround_image }}">{{ $institute_list->name }}</h1>
                    <h4>{{ $institute_list->address }}, Phone: {{ $institute_list->phone }}</h4>
                    <h3>{{ $exam_name }}({{ $session_name }})</h3>
                </td>
                <td>

                </td>
            </tr>
        </table>

        <table class="first_table">
            <tr>
                <td>
                    <h1  style="color:{{ $design_admit_card->backfround_image }}">{{ $design_admit_card->heading }}</h1>
                </td>
            </tr>
        </table>

        <table class="second_table">

            @if(empty($design_admit_card->name))


            @else
            <tr>
                <td>Name:</td>
                <td>{{ $all_student_list->first_name.' '.$all_student_list->last_name }} </td>
            </tr>
            @endif
            @if(empty($design_admit_card->father_name))


            @else
            <tr>
                <td>Father's Name:</td>
                <td>{{ $all_student_list->father_name }}</td>
            </tr>
            @endif
            @if(empty($design_admit_card->mother_name))


            @else
            <tr>
                <td>Mother Name:</td>
                <td>{{ $all_student_list->mother_name }}</td>
            </tr>
            @endif
            @if(empty($design_admit_card->date_of_birth))


            @else
            <tr>
                <td>Date of Birth:</td>
                <td>{{ $all_student_list->date_of_birth }}</td>
            </tr>

            @endif
            @if(empty($design_admit_card->admission_no))


            @else
            <tr>
                <td>Admission No:</td>
                <td>{{ $all_student_list->admission_no }}</td>
            </tr>

            @endif

            @if(empty($design_admit_card->roll_no))


            @else
            <tr>
                <td>Roll No:</td>
                <td>{{ $all_student_list->roll_number }}</td>
            </tr>

            @endif


            @if(empty($design_admit_card->address))


            @else
            <tr>
                <td>Address:</td>
                <td>{{ $all_student_list->current_address }}</td>
            </tr>

            @endif

            @if(empty($design_admit_card->gender))


            @else
            <tr>
                <td>Gender:</td>
                <td>{{ $all_student_list->gender }}</td>
            </tr>

            @endif
            @if(empty($design_admit_card->class))


            @else
            <tr>
                <td>Class:</td>
                <td>{{ $class_name }}</td>
            </tr>
           @endif


           @if(empty($design_admit_card->section))


           @else
           <tr>
               <td>Section:</td>
               <td>{{ $section_name }}</td>
           </tr>
          @endif


        </table>

        <table class="third_table">
            <tr>
                                <th>Subject</th>
                                <th>MAX. MARKS</th>
                                <th>MIN. MARKS</th>
                                <th>MARKS OBTAINED</th>
                                <th>Grade Point</th>
                                <th>Grade Letter</th>
              </tr>
              <?php
              $total_max_mark = 0;
              $total_get_mark = 0;
              $total_grade_point = 0;
              ?>
              @foreach($exam_schedule as $class_exam_schedule)
              <tr>
                  <td>


                      <?php  $subject_name = DB::table('subjects')->where('id',$class_exam_schedule->subject_id)->value('name'); ?>


                      {{ $subject_name}}


                  </td>

                  <td>



                      {{ $class_exam_schedule->mark_max }}


                  </td>
                  <td>{{ $class_exam_schedule->mark_min }}</td>
                  <td>
                <?php


                $total_mark = DB::table('results')
                          ->where('exam_id',$class_exam_schedule->exam_id)
                          ->where('students_id',$all_student_list->id)
                          ->where('sreni_id',$class_id)
                          ->where('department_id',$department_id)
                          ->where('section_id',$section_id)
                          ->where('subject_id',$class_exam_schedule->subject_id)
                          ->value('main_total');










                          if($total_mark>= 0 && $total_mark<=32){
        $gradePoint = 0;
        $gradeLetter= 'F';
      }elseif($total_mark>= 33 && $total_mark<=39){
       $gradePoint = 1;
        $gradeLetter= 'D';
      }elseif($total_mark>= 40 && $total_mark<=49){
        $gradePoint = 2;
        $gradeLetter= 'C';
      }elseif($total_mark>= 50 && $total_mark<=59){
        $gradePoint = 3;
        $gradeLetter= 'B';
      }elseif($total_mark>= 60 && $total_mark<=69){
        $gradePoint = 3.5;
        $gradeLetter= 'A-';
      }elseif($total_mark>= 70 && $total_mark<=79){
        $gradePoint = 4;
        $gradeLetter= 'A';
      }else{

        $gradePoint = 5;
        $gradeLetter= 'A+';

      }


      $total_grade_point = $total_grade_point+$gradePoint;
                           ?>

                      {{ $total_mark }}



                  </td>
                  <td>
                  {{ $gradePoint }}

                  </td>
                  <td>{{ $gradeLetter }}</td>
              </tr>
              <?php


              $total_max_mark =$total_max_mark+ $class_exam_schedule->mark_max;
              $total_get_mark =$total_get_mark+ $total_mark ;


              ?>
              @endforeach
              <tr>
               <td colspan="2" class="text-center">{{ $total_max_mark }}</td>
               <td>Grand Total</td>
               <td colspan="3">{{ $total_get_mark }}</td>

              </tr>

              <tr>
                <td colspan="6" class="text-left">


                    <?php $total_subject_count = DB::table('subjects')

                    ->where('class_id',$class_id)
                    ->where('department_id',$department_id)
                    ->count(); ?>


@if($total_get_mark == 0)

Final Result:

@else


                    Final Result: {{ $total_grade_point /$total_subject_count }}


@endif
                </td>

               </tr>
        </table>


        <table>
            <tr>
                <td>
                    <h6 style="text-align:left; padding-top: 15px; font-size:12px;">{{ $design_admit_card->printing_date }}</h6>
                </td>
            </tr>
        </table>

        <table>
            <tr>
                <td>
                    <h6 style="text-align:left; padding-top: 15px; font-size:12px;">{{ $design_admit_card->footer_text }}</h6>
                </td>
            </tr>
        </table>

        <table>
            <tr>
                <td>
                    <img src="{{ asset('/') }}{{ $design_admit_card->left_sign }}"
                    style="height: 20px;" alt="">
                </td>


                <td>
                    <img src="{{ asset('/') }}{{ $design_admit_card->middle_sign }}"
                    style="height: 20px;" alt="">
                </td>


                <td>
                    <img src="{{ asset('/') }}{{ $design_admit_card->right_sign }}"
                    style="height: 20px;" alt="">
                </td>

            </tr>
        </table>
    </div>
</div>

@endforeach
</body>
</html>
</div>
</div>
