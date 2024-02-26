
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title>{{ $student_certificate->certificate_name }}</title>

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


                    .back_image {
                        /* //background-image: url(public/back_img1.png); */
                        background-size: 100% 100%;
                        height: 210mm;
                        width: 297mm;
                    }

                    .pdf_body {
                        padding: 8%;
                    }

                    table {
                        border-collapse: collapse;
                        width: 100%;
                    }

                    .logo_table tr td
                    {
                        text-align: center;
                    }

                    .logo_table img
                    {
                        height: 100px;
                        width: 100px;
                    }

                    .logo_table tr td h1
                    {
                        font-size: 45px;
                        margin-top:0;
                        margin-bottom:0;
                        color: {{ $student_certificate->header_color }};
                        font-weight: bold;
                    }

                    .logo_table tr td h4
                    {
                        font-size: 22px;
                        margin-top:0;
                        font-weight: 600;
                    }

                    .person_table
                    {
                        text-align: right;
                        margin-bottom: -56px;
                        margin-top: -40px;
                    }

                    .person_table img
                    {
                        height: 150px;
                        width: 130px;
                    }

                    .certificate_name_table tr td h1
                    {
                        font-size: 30px;
                        text-align: center;
                        text-decoration: underline;
                    }



                    .certificate_body_first tr td:nth-child(1)
                    {
                        width: 20%;
                    }

                    .certificate_body_first tr td:nth-child(2)
                    {
                        width: 60%;
                        text-align: center;
                    }

                    .certificate_body_first tr td:nth-child(3)
                    {
                        width: 20%;
                        text-align: right;
                    }

                    .certificate_body_second
                    {
                        text-align: center;
                    }

                    .certificate_body_second tr td
                    {
                        padding: 20px 5%;
                        width: 90%;
                        line-height: 1.5;

                    }

                    .certificate_body_third tr td:nth-child(1)
                    {
                        padding-top: 50px;
                        width: 30%;
                        text-align: left;
                    }


                    .certificate_body_third tr td:nth-child(2)
                    {
                        padding-top: 50px;
                        width: 40%;
                        text-align: center;
                    }


                    .certificate_body_third tr td:nth-child(3)
                    {
                        padding-top: 50px;
                        width: 30%;
                        text-align: right;
                    }


                </style>
            </head>
            <body>

                @foreach($student_details as $all_student_list)

            <div class="back_image" style="background-image: url('{{ asset("/") }}{{ $student_certificate->backfround_image  }}');">
                <div class="pdf_body">
                    <table class="logo_table">
                        <tr>
                            <td>
                                <img src="{{ asset('/') }}{{ $institute_list->logo }}" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h1>{{ $institute_list->name }}</h1>
                                <h4>{{ $institute_list->address }} Phone: {{ $institute_list->phone }}</h4>
                            </td>
                        </tr>
                    </table>

                    <table class="person_table">
                        <tr>
                            <td>
                                @if($student_certificate->photo == 1 )
                                <img src="{{ asset("/") }}{{ $all_student_list->student_photo  }}" alt="">
                                @endif
                            </td>
                        </tr>
                    </table>

                    <table class="certificate_name_table">
                        <tr>
                            <td>
                                <h1>{{ $student_certificate->certificate_name  }}</h1>
                            </td>
                        </tr>
                    </table>

                    <table class="certificate_body_first">
                        <tr>
                            <td>
                                <p>Reff. No: {{ $student_certificate->header_text_left  }}</p>
                            </td>
                            <td>
                                <p>{{ $student_certificate->header_center_text	}}</p>
                            </td>
                            <td>
                                <p>Date: {{ date('d/m/Y', strtotime($student_certificate->header_right_text))  }}</p>
                            </td>
                        </tr>
                    </table>

                    <table class="certificate_body_second">
                        <tr>
                            <td>
                                <?php



                                    $student_name_db = $all_student_list->first_name.' '.$all_student_list->last_name;
                                    $student_dob_db = date('d/m/Y', strtotime($all_student_list->date_of_birth));
                                    $student_p_address = $all_student_list->current_address;
                                    $father_name = $all_student_list->father_name;
                                    $mother_name = $all_student_list->mother_name;
                                    $admission_no = $all_student_list->admission_no;
                                    $roll_no = $all_student_list->roll_number;
                                    $class = $all_student_list->class;
                                    $section = $all_student_list->section;
                                    $gender = $all_student_list->gender;
                                    $department = $all_student_list->department;
                                    $category = $all_student_list->category;
                                    $cast = $all_student_list->caste;
                                    $religion = $all_student_list->religion;
                                    $email = $all_student_list->email;
                                    $phone = $all_student_list->mobile_number;



                                    $string_input =array('{{$student_name}}','{{$dob_student}}','{{ $present_address }}','{{ $father_name }}','{{$mother_name}}','{{ $admission_no }}','{{$roll_no}}','{{$class}}','{{$section}}','{{$gender}}','{{$department}}','{{$category}}','{{$cast}}','{{$religion}}','{{$email}}','{{$phone}}');

                                    $string_from_db  = array($student_name_db,$student_dob_db,$student_p_address,$father_name,$mother_name,$admission_no,$roll_no,$class,$section,$gender,$department,$category,$cast,$religion,$email,$phone);



                                    $convertedDATE = str_replace($string_input, $string_from_db, $student_certificate->body_text );



                                    ?>
                                {!! $convertedDATE !!}
                            </td>
                        </tr>
                    </table>

                    <table class="certificate_body_third">
                        <tr>
                            <td>
                                <p>.......................................
                                    <br>
                                    {{ $student_certificate->footer_left_text	}}
                                </p>
                            </td>
                            <td>
                                <p>.......................................
                                    <br>
                                    {{ $student_certificate->footer_center_text	}}
                                </p>
                            </td>
                            <td>
                                <p>.......................................
                                    <br>
                                    {{ $student_certificate->footer_right_text	}}
                                </p>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>
@endforeach
            </body>
            </html>


