@extends('admin.master.master')

@section('title')
Design Mark Sheet List | {{ $ins_name }}
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
            <h4 class="mb-0">Mark Sheet Design Information</h4>

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
                @if (Auth::guard('admin')->user()->can('design_admit_card_add'))
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
                                <th>Heading</th>
                                <th>Exam Name</th>

                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach($design_mark_sheet as $key=>$all_design_admit)
                            <tr>
                                <td>{{ $key+1 }}</td>

                                <td>{{ $all_design_admit->template }}</td>

                                <td>{{ $all_design_admit->heading }}</td>

                                <td>

                                    <?php $exam_name = DB::table('exams')->where('id',$all_design_admit->exam_name)->value('exam_name');?>

                                    {{ $exam_name }}


                                </td>

                                <td>


                                    @if (Auth::guard('admin')->user()->can('design_mark_sheet_view'))
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
                                                    <h5 class="modal-title" id="exampleModalLabel">View Admin card</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!--header-->
                                                    <div class="row">
                                                        <?php


                                                                $institute_list = DB::table('institute_information')->latest()->first();


                                                                ?>

                                                        <div class="col-md-2">
                                                            <img src="{{ asset('/') }}{{ $institute_list->logo }}"
                                                                style="height: 50px;" alt="">
                                                        </div>
                                                        <div class="col-md-10 text-center">


                                                            <h2 style="color:{{ $all_design_admit->backfround_image }}">
                                                                {{ $institute_list->name }}</h2>
                                                            <h6>{{ $institute_list->address }}, Phone:
                                                                {{ $institute_list->phone }} </h6>
                                                            <h5> <?php


                                                                                $exam_name = DB::table('exams')->where('id',$all_design_admit->exam_name)->value('exam_name');
                                                                                $session_name = DB::table('exams')->where('id',$all_design_admit->exam_name)->value('year');


                                                                                ?>

                                                                {{ $exam_name }}({{ $session_name }})</h5>
                                                        </div>

                                                    </div>
                                                    <!--header-->

                                                    <!--title-->
                                                    <div class="row mt-3">


                                                        <div class="col-md-12 text-center">
                                                            <h1 style="color:{{ $all_design_admit->backfround_image }}">
                                                                <u>{{ $all_design_admit->heading }}</u></h1>

                                                        </div>

                                                    </div>
                                                    <!--title-->



                                                    <!--title-->
                                                    <div class="row mt-3">


                                                        <div class="col-md-6 text-center">

                                                            @if(empty($all_design_admit->name))


                                                            @else

                                                            <div class="">
                                                                Name:
                                                            </div>
                                                            @endif
                                                            @if(empty($all_design_admit->father_name))


                                                            @else
                                                            <div class="">
                                                                Father Name:
                                                            </div>
                                                            @endif

                                                            @if(empty($all_design_admit->mother_name))


                                                            @else
                                                            <div class="">
                                                                Mother Name:
                                                            </div>
                                                            @endif
                                                            @if(empty($all_design_admit->date_of_birth))


                                                            @else
                                                            <div class="">
                                                                Date Of Birth:
                                                            </div>
                                                            @endif
                                                            @if(empty($all_design_admit->admission_no))


                                                            @else
                                                            <div class="">
                                                                Admission No:
                                                            </div>
                                                            @endif

                                                        </div>


                                                        <div class="col-md-6 text-center">

                                                            @if(empty($all_design_admit->roll_no))


                                                            @else

                                                            <div class="">
                                                                Roll No:
                                                            </div>

                                                            @endif

                                                            @if(empty($all_design_admit->address))


                                                            @else

                                                            <div class="">
                                                                Address:
                                                            </div>

                                                            @endif

                                                            @if(empty($all_design_admit->gender))


                                                            @else
                                                            <div class="">
                                                                Gender:
                                                            </div>
                                                            @endif

                                                            @if(empty($all_design_admit->class))


                                                            @else

                                                            <div class="">
                                                                Class:
                                                            </div>
                                                            @endif

                                                            @if(empty($all_design_admit->section))


                                                            @else


                                                            <div class="">
                                                                Section:
                                                            </div>

                                                            @endif

                                                        </div>

                                                    </div>
                                                    <!--title-->


                                                    <div class="row mt-3">


                                                        <div class="col-md-3 text-center"
                                                            style="border:2px solid black">

                                                            Subject

                                                        </div>

                                                        <div class="col-md-3 text-center"
                                                            style="border:2px solid black">

                                                            Max.Marks

                                                        </div>


                                                        <div class="col-md-3 text-center"
                                                            style="border:2px solid black">

                                                            Min.Marks

                                                        </div>


                                                        <div class="col-md-3 text-center"
                                                            style="border:2px solid black">

                                                        Marks Obtained

                                                        </div>





                                                    </div>
                                                    <div class="row mt-1">

                                                        <div class="col-md-12 text-left">

                                                            {{ $all_design_admit->printing_date }}

                                                        </div>
                                                    </div>
                                                    <div class="row mt-1">

                                                        <div class="col-md-12 text-left">

                                                            {{ $all_design_admit->footer_text }}

                                                        </div>
                                                    </div>

                                                    <div class="row mt-1">

                                                        <div class="col-md-4 text-center">

                                                            <img src="{{ asset('/') }}{{ $all_design_admit->left_sign }}"
                                                                style="height: 20px;" alt="">

                                                        </div>

                                                        <div class="col-md-4 text-center">

                                                            <img src="{{ asset('/') }}{{ $all_design_admit->middle_sign }}"
                                                                style="height: 20px;" alt="">

                                                        </div>

                                                        <div class="col-md-4 text-center">

                                                            <img src="{{ asset('/') }}{{ $all_design_admit->right_sign }}"
                                                                style="height: 20px;" alt="">

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    @endif

                                    @if (Auth::guard('admin')->user()->can('design_mark_sheet_update'))
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
                                                    <form action="{{ route('admin.design_mark_sheet.update') }}"
                                                        method="POST" enctype="multipart/form-data">

                                                        @csrf
                                                        <div class="row">
                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Template</label>
                                                                <input type="text" class="form-control form-control-sm"
                                                                    value="{{ $all_design_admit->template }}" id="name"
                                                                    name="template" placeholder="Enter Template">
                                                                <input type="hidden"
                                                                    class="form-control form-control-sm"
                                                                    value="{{ $all_design_admit->id }}" id="name"
                                                                    name="id" placeholder="Enter Template">
                                                            </div>


                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Heading</label>
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="name" value="{{ $all_design_admit->heading}}"
                                                                    name="heading" placeholder="Enter Heading">
                                                            </div>


                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Heading Color</label>
                                                                <input type="color" class="form-control form-control-sm"
                                                                    id="name"
                                                                    value="{{ $all_design_admit->backfround_image}}"
                                                                    name="backfround_image" placeholder="Enter Color">
                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Printing Date</label>
                                                                <input type="date" value="{{ $all_design_admit->printing_date}}" class="form-control form-control-sm" id="name"
                                                                    name="printing_date" placeholder="Enter Printing Date">
                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Exam Name</label>

                                                                <select class="form-control form-control-sm" id="name"
                                                                    name="exam_name">
                                                                    <option value="0">--->Please Select Exam
                                                                        <---</option> @foreach($exam_details as
                                                                            $all_exam_lis) <option
                                                                            value="{{ $all_exam_lis->id }}"
                                                                            {{ $all_exam_lis->id == $all_design_admit->exam_name ? 'selected':''  }}>
                                                                            {{ $all_exam_lis->exam_name }}</option>
                                                                    @endforeach
                                                                </select>

                                                            </div>





                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Footer Text</label>
                                                                <input type="text" class="form-control form-control-sm"
                                                                    value="{{ $all_design_admit->footer_text}}"
                                                                    id="name" name="footer_text"
                                                                    placeholder="Enter Footer Text">
                                                            </div>








                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Right Sign</label>
                                                                <input type="file" class="form-control form-control-sm" id="name"
                                                                    name="right_sign" placeholder="Enter Right Sign">

                                                                    <img src="{{ asset('/') }}{{$all_design_admit->right_sign }}"
                                                                    height="20px" />
                                                            </div>


                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Middle Sign</label>
                                                                <input type="file" class="form-control form-control-sm" id="name"
                                                                    name="middle_sign" placeholder="Enter Middle Sign">


                                                                    <img src="{{ asset('/') }}{{$all_design_admit->middle_sign }}"
                                                                    height="20px" />
                                                            </div>



                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Left Sign</label>
                                                                <input type="file" class="form-control form-control-sm" id="name"
                                                                    name="left_sign" placeholder="Enter Left Sign">

                                                                    <img src="{{ asset('/') }}{{$all_design_admit->left_sign }}"
                                                                    height="20px" />
                                                            </div>




                                                            <hr class="mt-2">


                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <div class="form-check form-switch mb-3" dir="ltr">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        value="1" id="customSwitchsizesm" name="name"
                                                                        {{ 1 == $all_design_admit->name ? 'checked':''  }}>
                                                                    <label class="form-check-label"
                                                                        for="customSwitchsizesm">Name</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <div class="form-check form-switch mb-3" dir="ltr">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        value="1" id="customSwitchsizesm"
                                                                        name="father_name"
                                                                        {{ 1 == $all_design_admit->father_name ? 'checked':''  }}>
                                                                    <label class="form-check-label"
                                                                        for="customSwitchsizesm">Father Name</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <div class="form-check form-switch mb-3" dir="ltr">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        value="1" id="customSwitchsizesm"
                                                                        name="mother_name"
                                                                        {{ 1 == $all_design_admit->mother_name ? 'checked':''  }}>
                                                                    <label class="form-check-label"
                                                                        for="customSwitchsizesm">Mother Name</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <div class="form-check form-switch mb-3" dir="ltr">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        value="1" id="customSwitchsizesm"
                                                                        name="date_of_birth"
                                                                        {{ 1 == $all_design_admit->date_of_birth ? 'checked':''  }}>
                                                                    <label class="form-check-label"
                                                                        for="customSwitchsizesm">Date Of Birth</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <div class="form-check form-switch mb-3" dir="ltr">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        value="1" id="customSwitchsizesm"
                                                                        name="admission_no"
                                                                        {{ 1 == $all_design_admit->admission_no ? 'checked':''  }}>
                                                                    <label class="form-check-label"
                                                                        for="customSwitchsizesm">Admission No</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <div class="form-check form-switch mb-3" dir="ltr">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        value="1" id="customSwitchsizesm" name="roll_no"
                                                                        {{ 1 == $all_design_admit->roll_no ? 'checked':''  }}>
                                                                    <label class="form-check-label"
                                                                        for="customSwitchsizesm">Roll No</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <div class="form-check form-switch mb-3" dir="ltr">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        value="1" id="customSwitchsizesm" name="address"
                                                                        {{ 1 == $all_design_admit->address ? 'checked':''  }}>
                                                                    <label class="form-check-label"
                                                                        for="customSwitchsizesm">Address</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <div class="form-check form-switch mb-3" dir="ltr">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        value="1" id="customSwitchsizesm" name="gender"
                                                                        {{ 1 == $all_design_admit->gender ? 'checked':''  }}>
                                                                    <label class="form-check-label"
                                                                        for="customSwitchsizesm">Gender</label>
                                                                </div>
                                                            </div>

                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <div class="form-check form-switch mb-3" dir="ltr">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        value="1" id="customSwitchsizesm" name="class"
                                                                        {{ 1 == $all_design_admit->class ? 'checked':''  }}>
                                                                    <label class="form-check-label"
                                                                        for="customSwitchsizesm">Class</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <div class="form-check form-switch mb-3" dir="ltr">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        value="1" id="customSwitchsizesm" name="section"
                                                                        {{ 1 == $all_design_admit->section ? 'checked':''  }}>
                                                                    <label class="form-check-label"
                                                                        for="customSwitchsizesm">Section</label>
                                                                </div>
                                                            </div>


                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <div class="form-check form-switch mb-3" dir="ltr">
                                                                    <input type="checkbox" class="form-check-input" value="1"
                                                                        id="customSwitchsizesm" name="exam_session"   {{ 1 == $all_design_admit->exam_session ? 'checked':''  }}>
                                                                    <label class="form-check-label" for="customSwitchsizesm">Exam Session</label>
                                                                </div>
                                                            </div>

                                                        </div>





                                                        <button type="submit"
                                                            class="btn btn-primary mt-4 pr-4 pl-4">Update</button>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    @endif



                                    @if (Auth::guard('admin')->user()->can('design_mark_sheet_delete'))

                                    <button type="button" class="btn btn-danger waves-light waves-effect  btn-sm"
                                        onclick="deleteTag({{ $all_design_admit->id}})" data-toggle="tooltip"
                                        title="Delete"><i class="fas fa-trash-alt"></i></button>
                                    <form id="delete-form-{{ $all_design_admit->id }}"
                                        action="{{ route('admin.design_mark_sheet.delete',$all_design_admit->id) }}"
                                        method="POST" style="display: none;">
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
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Add Design Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form class="custom-validation" action="{{ route('admin.design_mark_sheet.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">


                                    <div class="row">
                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="name">Template</label>
                                            <input type="text" class="form-control form-control-sm" id="name"
                                                name="template" placeholder="Enter Template">
                                        </div>


                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="name">Heading</label>
                                            <input type="text" class="form-control form-control-sm" id="name"
                                                name="heading" placeholder="Enter Heading">
                                        </div>


                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="name">Heading Color</label>
                                            <input type="color" class="form-control form-control-sm" id="name" value=""
                                                name="backfround_image" placeholder="Enter Color">
                                        </div>

                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="name">Printing Date</label>
                                            <input type="date" class="form-control form-control-sm" id="name"
                                                name="printing_date" placeholder="Enter Printing Date">
                                        </div>



                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="name">Exam Name</label>

                                            <select class="form-control form-control-sm" id="name" name="exam_name">
                                                <option value="0">--->Please Select Exam<---</option>
                                                        @foreach($exam_details as $all_exam_lis) <option
                                                        value="{{ $all_exam_lis->id }}">{{ $all_exam_lis->exam_name }}
                                                </option>
                                                @endforeach
                                            </select>

                                        </div>





                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="name">Footer Text</label>
                                            <input type="text" class="form-control form-control-sm" id="name"
                                                name="footer_text" placeholder="Enter Footer Text">
                                        </div>








                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="name">Right Sign</label>
                                            <input type="file" class="form-control form-control-sm" id="name"
                                                name="right_sign" placeholder="Enter Right Sign">
                                        </div>


                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="name">Middle Sign</label>
                                            <input type="file" class="form-control form-control-sm" id="name"
                                                name="middle_sign" placeholder="Enter Middle Sign">
                                        </div>



                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="name">Left Sign</label>
                                            <input type="file" class="form-control form-control-sm" id="name"
                                                name="left_sign" placeholder="Enter Left Sign">
                                        </div>




                                        <hr class="mt-4">


                                        <div class="form-group col-md-4 col-sm-12">
                                            <div class="form-check form-switch mb-3" dir="ltr">
                                                <input type="checkbox" class="form-check-input" value="1"
                                                    id="customSwitchsizesm" name="name">
                                                <label class="form-check-label" for="customSwitchsizesm">Name</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-12">
                                            <div class="form-check form-switch mb-3" dir="ltr">
                                                <input type="checkbox" class="form-check-input" value="1"
                                                    id="customSwitchsizesm" name="father_name">
                                                <label class="form-check-label" for="customSwitchsizesm">Father
                                                    Name</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-12">
                                            <div class="form-check form-switch mb-3" dir="ltr">
                                                <input type="checkbox" class="form-check-input" value="1"
                                                    id="customSwitchsizesm" name="mother_name">
                                                <label class="form-check-label" for="customSwitchsizesm">Mother
                                                    Name</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-12">
                                            <div class="form-check form-switch mb-3" dir="ltr">
                                                <input type="checkbox" class="form-check-input" value="1"
                                                    id="customSwitchsizesm" name="date_of_birth">
                                                <label class="form-check-label" for="customSwitchsizesm">Date Of
                                                    Birth</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-12">
                                            <div class="form-check form-switch mb-3" dir="ltr">
                                                <input type="checkbox" class="form-check-input" value="1"
                                                    id="customSwitchsizesm" name="admission_no">
                                                <label class="form-check-label" for="customSwitchsizesm">Admission
                                                    No</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-12">
                                            <div class="form-check form-switch mb-3" dir="ltr">
                                                <input type="checkbox" class="form-check-input" value="1"
                                                    id="customSwitchsizesm" name="roll_no">
                                                <label class="form-check-label" for="customSwitchsizesm">Roll No</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-12">
                                            <div class="form-check form-switch mb-3" dir="ltr">
                                                <input type="checkbox" class="form-check-input" value="1"
                                                    id="customSwitchsizesm" name="address">
                                                <label class="form-check-label" for="customSwitchsizesm">Address</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-12">
                                            <div class="form-check form-switch mb-3" dir="ltr">
                                                <input type="checkbox" class="form-check-input" value="1"
                                                    id="customSwitchsizesm" name="gender">
                                                <label class="form-check-label" for="customSwitchsizesm">Gender</label>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-4 col-sm-12">
                                            <div class="form-check form-switch mb-3" dir="ltr">
                                                <input type="checkbox" class="form-check-input" value="1"
                                                    id="customSwitchsizesm" name="class">
                                                <label class="form-check-label" for="customSwitchsizesm">Class</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-12">
                                            <div class="form-check form-switch mb-3" dir="ltr">
                                                <input type="checkbox" class="form-check-input" value="1"
                                                    id="customSwitchsizesm" name="section">
                                                <label class="form-check-label" for="customSwitchsizesm">Section</label>
                                            </div>
                                        </div>


                                        <div class="form-group col-md-4 col-sm-12">
                                            <div class="form-check form-switch mb-3" dir="ltr">
                                                <input type="checkbox" class="form-check-input" value="1"
                                                    id="customSwitchsizesm" name="exam_session">
                                                <label class="form-check-label" for="customSwitchsizesm">Exam Session</label>
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
