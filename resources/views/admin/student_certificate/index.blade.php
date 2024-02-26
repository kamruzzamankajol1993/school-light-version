@extends('admin.master.master')

@section('title')
Student Certificate List | {{ $ins_name }}
@endsection


@section('css')
{{-- <style>

    /* @page {
        margin: 18px;
    } */

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
        /* font-weight: normal;
        font-size: 17px;
        font-family: Poppins sans-serif; */
    }

    .body_container {
        /* height: 210mm;
        width: 297mm; */
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



</style> --}}
@endsection

@section('body')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Student Certificate Design Information</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">{{ $ins_name }} </a></li> --}}
                    <li class="breadcrumb-item active">{{ $ins_name }} </li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="row">

    <div class="col-sm-6">
        <div class="float-right d-md-block">
            <div class="dropdown">
                @if (Auth::guard('admin')->user()->can('student_certificate_add'))
                <button class="btn btn-primary dropdown-toggle waves-effect  btn-sm waves-light" type="button"
                    data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                    <i class="far fa-calendar-plus  mr-2"></i> Add New Design Info
                </button>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row mt-2">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @include('flash_message')
                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Template</th>
                                <th>Background Image</th>
                                <th>Body Text </th>

                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach($student_certificate as $key=>$all_design_admit)
                            <tr>
                                <td>{{ $key+1 }}</td>

                                <td>{{ $all_design_admit->certificate_name }}</td>

                                <td>
                                    <img src="{{ asset('/') }}{{ $all_design_admit->backfround_image }}"
                                        height="50px" />


                                </td>
                                <td>{!! $all_design_admit->body_text !!}</td>


                                <td>


                                    @if (Auth::guard('admin')->user()->can('student_certificate_view'))
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target=".bs-example-modal-lgee{{ $all_design_admit->id }}"
                                        class="btn btn-success waves-light waves-effect  btn-sm">
                                        <i class="fas fa-eye"></i></button>

                                    <div class="modal fade bs-example-modal-lgee{{ $all_design_admit->id }}"
                                        tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">View Certificate</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body" style="">
                                                    <!--header-->
                                                    <div class="row">
                                                        <?php


                                                                $institute_list = DB::table('institute_information')->latest()->first();


                                                                ?>

<div class="col-md-4">

</div>

                                                        <div class="col-md-4">
                                                            <img src="{{ asset('/') }}{{ $institute_list->logo }}"
                                                                style="height: 50px;" alt="">
                                                        </div>


                                                        <div class="col-md-4">

                                                        </div>
                                                        <div class="col-md-1">

                                                        </div>
                                                        <div class="col-md-10 text-center">


                                                            <h2 style="color:{{ $all_design_admit->header_color }}">
                                                                {{ $institute_list->name }}</h2>
                                                            <h6>{{ $institute_list->address }}, Phone:
                                                                {{ $institute_list->phone }} </h6>

                                                        </div>

                                                        <div class="col-md-1">

                                                        </div>

                                                    </div>
                                                    <!--header-->

                                                    <!--title-->
                                                    <div class="row ">

                                                        <div class="col-md-4 text-center">


                                                        </div>
                                                        <div class="col-md-4 text-center">
                                                            <h1 style="padd">
                                                                <u>{{ $all_design_admit->certificate_name }}</u></h1>

                                                        </div>


                                                        <div class="col-md-4 text-center">

                                                                @if($all_design_admit->photo == 1 )

                                                               <img src = "{{ asset('/') }}public/user.webp" style="height: 150px;
                                                               width: 130px;text-align: right;
            "/>

                                                                @else

                                                                @endif

                                                            </h1>

                                                        </div>

                                                    </div>
                                                    <!--title-->



                                                    <!--title-->
                                                    <div class="row mt-2">


                                                        <div class="col-md-4">

<p>{{ $all_design_admit->header_text_left }}</p>

                                                        </div>


                                                        <div class="col-md-4 text-center">

                                                            <p>{{ $all_design_admit->header_center_text }}</p>

                                                        </div>



                                                        <div class="col-md-4">

                                                            <p style="text-align: right;">{{ $all_design_admit->header_right_text }}</p>

                                                        </div>

                                                    </div>
                                                    <!--title-->


                                                    <div class="row mt-3">


                                                        <div class="col-md-12 text-center"
                                                            style="">

                                                           {!! $all_design_admit->body_text !!}

                                                        </div>







                                                    </div>
                                                    <div class="row mt-1">

                                                        <div class="col-md-4">
                                                            <p>.......................................
                                                                <br>
                                                            {{ $all_design_admit->footer_left_text }}
                                                        </p>
                                                        </div>


                                                        <div class="col-md-4">
                                                            <p>.......................................
                                                                <br>
                                                            {{ $all_design_admit->footer_center_text }}
                                                        </p>
                                                        </div>



                                                        <div class="col-md-4">
                                                            <p>.......................................
                                                                <br>
                                                            {{ $all_design_admit->footer_right_text }}
                                                        </p>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    @endif

                                    @if (Auth::guard('admin')->user()->can('student_certificate_update'))
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target=".bs-example-modal-lg{{ $all_design_admit->id }}"
                                        class="btn btn-primary waves-light waves-effect  btn-sm">
                                        <i class="fas fa-pencil-alt"></i></button>

                                    <div class="modal fade bs-example-modal-lg{{ $all_design_admit->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update Information
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.student_certificate.update') }}"
                                                        method="POST" enctype="multipart/form-data">

                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $all_design_admit->id }}"/>
                                                        <div class="row">

                                                            <div class="col-lg-12">
                                                                <div class="card">
                                                                    <div class="card-body">


                                                                        <div class="row">
                                                                            <div class="form-group col-md-6 col-sm-12">
                                                                                <label for="name">Certificate
                                                                                    Name</label>
                                                                                <input type="text" value="{{ $all_design_admit->certificate_name }}"
                                                                                    class="form-control form-control-sm"
                                                                                    id="name" name="certificate_name"
                                                                                    placeholder="Enter Certificate Name">
                                                                            </div>

                                                                            <div class="form-group col-md-6 col-sm-12">
                                                                                <label for="name">Heading Color</label>
                                                                                <input type="color" value="{{ $all_design_admit->header_color }}"
                                                                                    class="form-control form-control-sm"
                                                                                    id="name" value=""
                                                                                    name="header_color"
                                                                                    placeholder="Enter Color">
                                                                            </div>


                                                                            <div class="form-group col-md-4 col-sm-12">
                                                                                <label for="name">Header Text
                                                                                    Left</label>
                                                                                <input type="text" value="{{ $all_design_admit->header_text_left }}"
                                                                                    class="form-control form-control-sm"
                                                                                    id="name" name="header_text_left"
                                                                                    placeholder="Enter Header Text Left">
                                                                            </div>


                                                                            <div class="form-group col-md-4 col-sm-12">
                                                                                <label for="name">Header Text
                                                                                    Center</label>
                                                                                <input type="text" value="{{ $all_design_admit->header_center_text }}"
                                                                                    class="form-control form-control-sm"
                                                                                    id="name" name="header_center_text"
                                                                                    placeholder="Enter Header Text Center">
                                                                            </div>


                                                                            <div class="form-group col-md-4 col-sm-12">
                                                                                <label for="name">Header Text
                                                                                    Right</label>
                                                                                <input type="date" value="{{ $all_design_admit->header_right_text }}"
                                                                                    class="form-control form-control-sm"
                                                                                    id="name" name="header_right_text"
                                                                                    placeholder="Enter Header Text Right">
                                                                            </div>


                                                                            <hr class="mt-3">

                                                                            <div class="form-group col-md-12 col-sm-12">
                                                                                <label for="name">Body Text</label>
                                                                                <textarea
                                                                                    class="form-control form-control-sm"
                                                                                    id="classic-editor" name="body_text"
                                                                                    placeholder="Enter Body Text">

                                                                                    {!! $all_design_admit->body_text !!}
                                                                                </textarea>
                                                                                <small class="text-danger">!!!--->
                                                                                    Please Put Student Info In
                                                                                    "{{ $bracket_name }}" Symbol
                                                                                    <---!!!</small> <div class="row"
                                                                                        style="color:rgb(18, 65, 109);">



                                                                                        <div class="col-sm-2 mt-1">
                                                                                            $student_name
                                                                                        </div>


                                                                                        <div class="col-sm-2 mt-1">
                                                                                            $dob_student
                                                                                        </div>


                                                                                        <div class="col-sm-2 mt-1">
                                                                                            $present_address
                                                                                        </div>


                                                                                        <div class="col-sm-2 mt-1">
                                                                                            $father_name
                                                                                        </div>


                                                                                        <div class="col-sm-2 mt-1">
                                                                                            $mother_name
                                                                                        </div>

                                                                                        <div class="col-sm-2 mt-1">
                                                                                            $admission_no
                                                                                        </div>

                                                                                        <div class="col-sm-2 mt-1">
                                                                                            $roll_no
                                                                                        </div>

                                                                                        <div class="col-sm-2 mt-1">
                                                                                            $class
                                                                                        </div>


                                                                                        <div class="col-sm-2 mt-1">
                                                                                            $section
                                                                                        </div>


                                                                                        <div class="col-sm-2 mt-1">
                                                                                            $gender
                                                                                        </div>


                                                                                        <div class="col-sm-2 mt-1">
                                                                                            $department
                                                                                        </div>


                                                                                        <div class="col-sm-2 mt-1">
                                                                                            $category
                                                                                        </div>


                                                                                        <div class="col-sm-2 mt-1">
                                                                                            $cast
                                                                                        </div>



                                                                                        <div class="col-sm-2 mt-1">
                                                                                            $religion
                                                                                        </div>



                                                                                        <div class="col-sm-2 mt-1">
                                                                                            $email
                                                                                        </div>



                                                                                        <div class="col-sm-2 mt-1">
                                                                                            $phone
                                                                                        </div>



                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-3">

                                                                        <div class="form-group col-md-3 col-sm-12 mt-2">
                                                                            <label for="name">Footer Left Text</label>
                                                                            <input type="text" value="{{ $all_design_admit->footer_left_text }}"
                                                                                class="form-control form-control-sm"
                                                                                id="name" name="footer_left_text"
                                                                                placeholder="Enter Footer Left Text">
                                                                        </div>


                                                                        <div class="form-group col-md-3 col-sm-12 mt-2">
                                                                            <label for="name">Footer Center Text</label>
                                                                            <input type="text" value="{{ $all_design_admit->footer_center_text }}"
                                                                                class="form-control form-control-sm"
                                                                                id="name" name="footer_center_text"
                                                                                placeholder="Enter Footer Center Text">
                                                                        </div>



                                                                        <div class="form-group col-md-3 col-sm-12 mt-2">
                                                                            <label for="name">Footer Right Text</label>
                                                                            <input type="text" value="{{ $all_design_admit->footer_right_text }}"
                                                                                class="form-control form-control-sm"
                                                                                id="name" name="footer_right_text"
                                                                                placeholder="Enter Footer Right Text">
                                                                        </div>








                                                                        <div class="form-group col-md-3 col-sm-12">
                                                                            <label for="name">Background Image</label>
                                                                            <input type="file"
                                                                                class="form-control form-control-sm"
                                                                                id="name" name="backfround_image"
                                                                                placeholder="Enter Right Sign">


                                                                                <img src="{{ asset('/') }}{{ $all_design_admit->backfround_image }}"
                                        height="50px" />
                                                                        </div>







                                                                        <hr class="mt-4">



                                                                        <div class="form-group col-md-6 col-sm-12">
                                                                            <div class="form-check form-switch mb-3"
                                                                                dir="ltr">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input" value="1"
                                                                                    id="customSwitchsizesm"
                                                                                    name="photo" {{ 1 == $all_design_admit->photo ? 'checked':''  }}>
                                                                                <label class="form-check-label"
                                                                                    for="customSwitchsizesm">Student
                                                                                    Photo</label>
                                                                            </div>
                                                                        </div>




                                                                    </div>






                                                                </div>

                                                            </div>
                                                        </div>



                                                        <div class="col-lg-12">
                                                            <div class="float-right d-none d-md-block">
                                                                <div class="form-group mb-4">
                                                                    <div>
                                                                        <button type="submit"
                                                                            class="btn btn-primary btn-lg  waves-effect  btn-sm waves-light mr-1">
                                                                            Submit
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div> <!-- end col -->






                                                </form>
                                            </div>

                                        </div>
                                    </div>
                </div>
                @endif



                @if (Auth::guard('admin')->user()->can('student_certificate_delete'))

                <button type="button" class="btn btn-danger waves-light waves-effect  btn-sm"
                    onclick="deleteTag({{ $all_design_admit->id}})" data-toggle="tooltip" title="Delete"><i
                        class="fas fa-trash-alt"></i></button>
                <form id="delete-form-{{ $all_design_admit->id }}"
                    action="{{ route('admin.student_certificate.delete',$all_design_admit->id) }}" method="POST"
                    style="display: none;">
                    @method('DELETE')
                    @csrf

                </form>
                @endif

                </td>

                </tr>
                @endforeach


                </tbody>
                </table>
            </div>
        </div>
    </div>
</div> <!-- end col -->
</div> <!-- end row -->






<!--  Modal content for the above example -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Add Design Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form class="custom-validation" action="{{ route('admin.student_certificate.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">


                                    <div class="row">
                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="name">Certificate Name</label>
                                            <input type="text" class="form-control form-control-sm" id="name"
                                                name="certificate_name" placeholder="Enter Certificate Name">
                                        </div>

                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="name">Heading Color</label>
                                            <input type="color" class="form-control form-control-sm" id="name" value=""
                                                name="header_color" placeholder="Enter Color">
                                        </div>


                                        <div class="form-group col-md-4 col-sm-12">
                                            <label for="name">Header Text Left</label>
                                            <input type="text" class="form-control form-control-sm" id="name"
                                                name="header_text_left" placeholder="Enter Header Text Left">
                                        </div>


                                        <div class="form-group col-md-4 col-sm-12">
                                            <label for="name">Header Text Center</label>
                                            <input type="text" class="form-control form-control-sm" id="name"
                                                name="header_center_text" placeholder="Enter Header Text Center">
                                        </div>


                                        <div class="form-group col-md-4 col-sm-12">
                                            <label for="name">Header Text Right</label>
                                            <input type="date" class="form-control form-control-sm" id="name"
                                                name="header_right_text" placeholder="Enter Header Text Right">
                                        </div>


                                        <hr class="mt-3">

                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="name">Body Text</label>
                                            <textarea class="form-control form-control-sm" id="classic-editor"
                                                name="body_text" placeholder="Enter Body Text">
                                            </textarea>
                                            <small class="text-danger">!!!---> Please Put Student Info In
                                                "{{ $bracket_name }}" Symbol <---!!!</small> <div class="row"
                                                    style="color:rgb(18, 65, 109);">



                                                    <div class="col-sm-2 mt-1">
                                                        $student_name
                                                    </div>


                                                    <div class="col-sm-2 mt-1">
                                                        $dob_student
                                                    </div>


                                                    <div class="col-sm-2 mt-1">
                                                        $present_address
                                                    </div>


                                                    <div class="col-sm-2 mt-1">
                                                        $father_name
                                                    </div>


                                                    <div class="col-sm-2 mt-1">
                                                        $mother_name
                                                    </div>

                                                    <div class="col-sm-2 mt-1">
                                                        $admission_no
                                                    </div>

                                                    <div class="col-sm-2 mt-1">
                                                        $roll_no
                                                    </div>

                                                    <div class="col-sm-2 mt-1">
                                                        $class
                                                    </div>


                                                    <div class="col-sm-2 mt-1">
                                                        $section
                                                    </div>


                                                    <div class="col-sm-2 mt-1">
                                                        $gender
                                                    </div>


                                                    <div class="col-sm-2 mt-1">
                                                        $department
                                                    </div>


                                                    <div class="col-sm-2 mt-1">
                                                        $category
                                                    </div>


                                                    <div class="col-sm-2 mt-1">
                                                        $cast
                                                    </div>



                                                    <div class="col-sm-2 mt-1">
                                                        $religion
                                                    </div>



                                                    <div class="col-sm-2 mt-1">
                                                        $email
                                                    </div>



                                                    <div class="col-sm-2 mt-1">
                                                        $phone
                                                    </div>



                                        </div>
                                    </div>
                                    <hr class="mt-3">

                                    <div class="form-group col-md-3 col-sm-12 mt-2">
                                        <label for="name">Footer Left Text</label>
                                        <input type="text" class="form-control form-control-sm" id="name"
                                            name="footer_left_text" placeholder="Enter Footer Left Text">
                                    </div>


                                    <div class="form-group col-md-3 col-sm-12 mt-2">
                                        <label for="name">Footer Center Text</label>
                                        <input type="text" class="form-control form-control-sm" id="name"
                                            name="footer_center_text" placeholder="Enter Footer Center Text">
                                    </div>



                                    <div class="form-group col-md-3 col-sm-12 mt-2">
                                        <label for="name">Footer Right Text</label>
                                        <input type="text" class="form-control form-control-sm" id="name"
                                            name="footer_right_text" placeholder="Enter Footer Right Text">
                                    </div>








                                    <div class="form-group col-md-3 col-sm-12">
                                        <label for="name">Background Image</label>
                                        <input type="file" class="form-control form-control-sm" id="name"
                                            name="backfround_image" placeholder="Enter Right Sign">
                                    </div>







                                    <hr class="mt-4">



                                    <div class="form-group col-md-6 col-sm-12">
                                        <div class="form-check form-switch mb-3" dir="ltr">
                                            <input type="checkbox" class="form-check-input" value="1"
                                                id="customSwitchsizesm" name="photo">
                                            <label class="form-check-label" for="customSwitchsizesm">Student
                                                Photo</label>
                                        </div>
                                    </div>




                                </div>






                            </div>

                        </div>
                    </div>



                    <div class="col-lg-12">
                        <div class="float-right d-none d-md-block">
                            <div class="form-group mb-4">
                                <div>
                                    <button type="submit"
                                        class="btn btn-primary btn-lg  waves-effect  btn-sm waves-light mr-1">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div> <!-- end col -->
            </form>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection

@section('script')



<script type="text/javascript">
    function deleteTag(id) {
        swal({
            title: 'Are you sure?',
            text: "You will not be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false,
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                event.preventDefault();
                document.getElementById('delete-form-' + id).submit();
            } else if (
                // Read more about handling dismissals
                result.dismiss === swal.DismissReason.cancel
            ) {
                swal(
                    'Cancelled',
                    'Your data is safe :)',
                    'error'
                )
            }
        })
    }

</script>
@endsection
