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
            font-size: 17px;
            font-family: Poppins sans-serif;
        }

        .body_container {
            height: 85.6mm;
            width: 54mm;
        }

        .pdf_body {
            padding: 0;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        .left_side {
            width: 15%;
            height: 85.6mm;

            color: white;
        }


        .left_side h1 {
            font-size: 14px;
            font-weight: bold;
            writing-mode: vertical-rl;
            display: inline-block;
            text-transform: uppercase;
        }

        .right_side {
            width: 85%;
            height: 100%;
            background-color: #eeeeee;
            text-align: center;
            padding-left: 10px;
            padding-right: 10px;
        }

        .right_side h4
        {
            font-size: 15px;
        }
        .right_side h5
        {
            font-size: 12px;
            margin-bottom: 10px;
            font-weight: normal;
        }
        .right_side h2
        {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .right_side p
        {
            font-size: 12px
        }

        .right_side p span
        {
            font-weight: bold;
        }
    </style>
</head>
<body>
    @foreach($student_details as $all_student_list)
<div class="body_container">
    <div class="pdf_body">
        <table>
            <tr>
                <td class="left_side" style=" background-color: {{ $student_id_card->background_image}}">
                    <h1>{{ $student_id_card->id_card_title }}</h1>

                </td>
                <td class="right_side">
                    <img src="{{ asset('/') }}{{ $institute_list->logo }}" height="40px" width="40px" alt="">
                    <h4>{{ $institute_list->name }}</h4>
                    <h5>{{ $institute_list->address }}</h5>
                    @if($student_id_card->photo == 1 )
                    <img src="{{ asset("/") }}{{ $all_student_list->student_photo  }}" style="border-radius: 4px" alt="" height="70px" width="70px">
                    @endif
                    <h2>{{ $all_student_list->first_name.' '.$all_student_list->last_name }}</h2>
                    @if($student_id_card->father_name == 1 )
                    <p><span>Father: </span> {{ $all_student_list->father_name  }}</p>
                    @endif
                    <p><span>Student ID:</span> {{ $all_student_list->admission_no  }}</p>
                    @if($student_id_card->class == 1 )
                    <p><span>Class:</span> {{ $all_student_list->class  }}</p>
                    @endif

                    @if($student_id_card->section == 1 )
                    <p><span>Section:</span> {{ $all_student_list->section  }}</p>
                    @endif
                    <p><span>Emergency:</span> {{ $student_id_card->school_name }}</p>
                    <p style="text-align: right; padding-top: 15px">Signature</p>
                    <p style="text-decoration:underline; text-align: right">Principle</p>
                </td>
            </tr>
        </table>
    </div>
</div>
<br>
@endforeach
</body>
</html>
