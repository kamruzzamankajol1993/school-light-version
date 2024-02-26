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
                                <th>Date From</th>
                                <th>Start Time</th>
                                <th>Duration</th>
                                <th>Room No</th>
              </tr>
              @foreach($exam_schedule as $class_exam_schedule)
              <tr>
                  <td>


                      <?php  $subject_name = DB::table('subjects')->where('id',$class_exam_schedule->subject_id)->value('name'); ?>


                      {{ $subject_name}}


                  </td>
                  <td>


                      {{ date('d/m/Y', strtotime($class_exam_schedule->date))}}




                  </td>
                  <td>



                      {{ $class_exam_schedule->time }}


                  </td>
                  <td>{{ $class_exam_schedule->duration }}</td>
                  <td>{{ $class_exam_schedule->room_no }}</td>

              </tr>
              @endforeach
        </table>

        <table>
            <tr>
                <td>
                    <h6 style="text-align:left; padding-top: 15px; font-size:26px;">{{ $design_admit_card->footer_text }}</h6>
                </td>
            </tr>
        </table>

        <table>
            <tr>
                <td>
                    <img src="{{ asset('/') }}{{ $design_admit_card->sign }}"
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
