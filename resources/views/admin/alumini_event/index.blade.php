@extends('admin.master.master')

@section('title')
Event Information | {{ $ins_name }}
@endsection


@section('css')
<style>
    .disabled_input {
        background-color: grey;
        padding-bottom: 10px;
        /* color : #C0C0C0;
    opacity : 0.1; */
    }

</style>
@endsection

@section('body')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0"> Event List</h4>

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
                @if (Auth::guard('admin')->user()->can('alumini_event_add'))
                <button class="btn btn-primary dropdown-toggle waves-effect  btn-sm waves-light" type="button"
                    data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                    <i class="far fa-calendar-plus  mr-2"></i> Add New Event
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
                                <th>Event Title</th>
                                <th>Class</th>
                                <th>Section</th>
                                <th>Pass Out Session</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($alumini_event_detail as $all_home_work)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>


                                <td>
                                    {{ $all_home_work->event_title }}
                                </td>

                                <td>
                                    <?php $class_name = DB::table('sranis')->where('id',$all_home_work->class)->value('name'); ?>

                                    {{ $class_name}}
                                </td>

                                <td>
                                    {{ $all_home_work->section }}
                                </td>


                                <td>
                                    {{ $all_home_work->pass_out_session }}
                                </td>

                                <td>
                                    {{ date('d/m/Y', strtotime($all_home_work->from_date)) }}
                                </td>

                                <td>
                                    {{ date('d/m/Y', strtotime($all_home_work->to_date)) }}
                                </td>

                                <td>
                                    @if (Auth::guard('admin')->user()->can('alumini_event_update'))
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target=".bs-example-modal-lg{{ $all_home_work->id }}"
                                        class="btn btn-primary btn-sm waves-light waves-effect">
                                        <i class="fas fa-pencil-alt"></i></button>

                                    <div class="modal fade bs-example-modal-lg{{ $all_home_work->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update Event
                                                        Information</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.alumni_event.update') }}"
                                                        method="POST" enctype="multipart/form-data">

                                                        @csrf

                                                        <div class="row">


                                                            @if($all_home_work->event_for == 'All Alumni')
                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="name">Event For: </label>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input ev_for_all"
                                                                        type="radio" name="event_for"
                                                                        data-index="{{$all_home_work->id }}"
                                                                        id="1inlineRadio111{{ $all_home_work->id }}"
                                                                        value="All Alumni"
                                                                        {{ $all_home_work->event_for == 'All Alumni' ? 'checked':'' }}
                                                                        required>
                                                                    <label class="form-check-label"
                                                                        for="1inlineRadio111{{ $all_home_work->id }}">All
                                                                        Alumni</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input ev_for_all"
                                                                        type="radio" name="event_for"
                                                                        data-index="{{$all_home_work->id }}"
                                                                        id="1inlineRadio111{{ $all_home_work->id }}"
                                                                        value="Class"
                                                                        {{ $all_home_work->event_for == 'Class' ? 'checked':'' }}
                                                                        required>
                                                                    <label class="form-check-label"
                                                                        for="1inlineRadio111{{ $all_home_work->id }}">Class</label>
                                                                </div>
                                                            </div>


                                                            @else
                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="name">Event For: </label>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input ev_for_all"
                                                                        type="radio" name="event_for"
                                                                        data-index="{{$all_home_work->id }}"
                                                                        id="inlineRadio11{{ $all_home_work->id }}"
                                                                        value="All Alumni"
                                                                        {{ $all_home_work->event_for == 'All Alumni' ? 'checked':'' }}
                                                                        required>
                                                                    <label class="form-check-label"
                                                                        for="inlineRadio11{{ $all_home_work->id }}">All
                                                                        Alumni</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input ev_for_all"
                                                                        type="radio" name="event_for"
                                                                        data-index="{{$all_home_work->id }}"
                                                                        id="inlineRadio11{{ $all_home_work->id }}"
                                                                        value="Class"
                                                                        {{ $all_home_work->event_for == 'Class' ? 'checked':'' }}
                                                                        required>
                                                                    <label class="form-check-label"
                                                                        for="inlineRadio11{{ $all_home_work->id }}">Class</label>
                                                                </div>
                                                            </div>

@endif


                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="name">Event Title</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $all_home_work->event_title }}"
                                                                    name="event_title" placeholder="Enter Event Title">
                                                            </div>



                                                        </div>

                                                        @if($all_home_work->event_for == 'All Alumni')


                 <!--show and hide div work -->
                 <div class="row mt-2 test_main_data" class=""
                 id="">

                 <div class="form-group col-md-6 col-sm-12">
                     <label for="password">Class Name</label>
                     <select name="class_id" class="form-control" data-index="{{ $all_home_work->id }}">
                         <option value="">Select Class</option>
                         @foreach ($class_details as $user_class_update)
                         <option value="{{ $user_class_update->id }}"
                             {{ $all_home_work->class == $user_class_update->id ? 'selected':'' }}>
                             {{ $user_class_update->name }}</option>

                         @endforeach
                     </select>
                 </div>


                 <div class="form-group col-md-6 col-sm-12">
                     <label for="password">Department Name</label>
                     <select name="department_id" class="form-control" data-index="{{ $all_home_work->id }}">
                         <option readonly value="0">--- Select Department ---
                         </option>
                         @foreach ($dp_details as $user_class_update)
                         <option value="{{ $user_class_update->id }}"
                             {{ $all_home_work->department == $user_class_update->id  ? 'selected' : '' }}>
                             {{ $user_class_update->name }}</option>

                         @endforeach
                     </select>
                     </select>
                 </div>

                 <div class="form-group col-md-6 col-sm-12">
                     <label for="password">Section Name</label>



                     <?php


         $array = explode(",", $all_home_work->section);
         $count_vlue_array = count($array);


         $section_list_new = DB::table('sections')
                         ->where('class_id',$all_home_work->class)
                         ->whereNotIn('name',$array)
                      ->get();



         ?>


                     <div class="" id="section_id{{ $all_home_work->id }}">






                     </div>
                 </div>

                 <div class="form-group col-md-6 col-sm-12">
                     <label for="password">Pass Out Session</label>
                     <select name="pass_out_session" class="form-control">
                         <option value="">---->Select Session<----</option>
                                 @foreach($session_detail as $all_session)
                                 <option value="{{ $all_session->name }}"
                                 {{ $all_home_work->pass_out_session == $all_session->name ? 'selected':'' }}>
                                 {{ $all_session->name }}</option>
                         @endforeach
                     </select>
                 </div>
             </div>




                                                        @else

                                                        <!--show and hide div work -->
                                                        <div class="row mt-3" class="disabled"
                                                            id="disabled_edit{{ $all_home_work->id }}">

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Class Name</label>
                                                                <select name="class_id" class="form-control">
                                                                    <option value="">Select Class</option>
                                                                    @foreach ($class_details as $user_class_update)
                                                                    <option value="{{ $user_class_update->id }}"
                                                                        {{ $all_home_work->class == $user_class_update->id ? 'selected':'' }}>
                                                                        {{ $user_class_update->name }}</option>

                                                                    @endforeach
                                                                </select>
                                                            </div>


                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Department Name</label>
                                                                <select name="department_id" class="form-control">
                                                                    <option readonly value="0">--- Select Department ---
                                                                    </option>
                                                                    @foreach ($dp_details as $user_class_update)
                                                                    <option value="{{ $user_class_update->id }}"
                                                                        {{ $all_home_work->department == $user_class_update->id  ? 'selected' : '' }}>
                                                                        {{ $user_class_update->name }}</option>

                                                                    @endforeach
                                                                </select>
                                                                </select>
                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Section Name</label>



                                                                <?php


                                                    $array = explode(",", $all_home_work->section);
                                                    $count_vlue_array = count($array);


                                                    $section_list_new = DB::table('sections')
                                                                    ->where('class_id',$all_home_work->class)
                                                                    ->whereNotIn('name',$array)
                                                                 ->get();



                                                    ?>


                                                                <div class="" id="section_id">



                                                                    @foreach($array as $as_all_new_list)
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="section_id[]"
                                                                            value="{{ $as_all_new_list }}"
                                                                            id="defaultCheck{{ $as_all_new_list }}"
                                                                            checked>
                                                                        <label class="form-check-label"
                                                                            for="defaultCheck{{ $as_all_new_list }}">
                                                                            {{ $as_all_new_list}}
                                                                        </label>
                                                                    </div>

                                                                    @endforeach


                                                                    @foreach($section_list_new as $uncheck_list)

                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="section_id[]"
                                                                            value="{{ $uncheck_list->name }}"
                                                                            id="defaultCheck{{ $uncheck_list->name }}">
                                                                        <label class="form-check-label"
                                                                            for="defaultCheck{{ $uncheck_list->name }}">
                                                                            {{ $uncheck_list->name }}
                                                                        </label>
                                                                    </div>

                                                                    @endforeach


                                                                </div>
                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Pass Out Session</label>
                                                                <select name="pass_out_session" class="form-control">
                                                                    <option value="">---->Select Session<----</option>
                                                                            @foreach($session_detail as $all_session)
                                                                            <option value="{{ $all_session->name }}"
                                                                            {{ $all_home_work->pass_out_session == $all_session->name ? 'selected':'' }}>
                                                                            {{ $all_session->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>


                                                        @endif

                                                        <!--show and hide div work -->


                                                        <div class="row mt-3">


                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Event From Date</label>
                                                                <input type="date"
                                                                    value="{{ $all_home_work->from_date }}"
                                                                    class="form-control" id="name" name="from_date"
                                                                    placeholder="Enter Upload Date">

                                                                <input type="hidden" value="{{ $all_home_work->id }}"
                                                                    class="form-control" id="name" name="id"
                                                                    placeholder="Enter Upload Date">
                                                            </div>


                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Event To Date</label>
                                                                <input type="date" value="{{ $all_home_work->to_date }}"
                                                                    class="form-control" id="name" name="to_date"
                                                                    placeholder="Enter Upload Date">
                                                            </div>






                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="name">Note</label>
                                                                <textarea class="form-control form-control-sm" id="name"
                                                                    name="note"
                                                                    placeholder="">{{ $all_home_work->note }}</textarea>
                                                            </div>


                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="name">Event Notification Message</label>
                                                                <textarea class="form-control form-control-sm" id="name"
                                                                    name="event_notification_msg"
                                                                    placeholder="">{{ $all_home_work->event_notification_msg }}</textarea>
                                                            </div>

                                                            <?php

                                                    $array_two = explode(",", $all_home_work->type_noti);
                                                    $count_vlue = count($array_two);

                                                    ?>
                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="name">Send Via</label>

                                                                @if($count_vlue == 1)
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="type_noti[]" id="inlineCheckbox1"
                                                                        {{ $array_two[0]== 'Sms' ? 'checked':'' }}
                                                                        value="Sms">
                                                                    <label class="form-check-label"
                                                                        for="inlineCheckbox1">Sms</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="type_noti[]" id="inlineCheckbox2"
                                                                        {{ $array_two[0] == 'Email' ? 'checked':'' }}
                                                                        value="Email">
                                                                    <label class="form-check-label"
                                                                        for="inlineCheckbox2">Email</label>
                                                                </div>

                                                                @else
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="type_noti[]" id="inlineCheckbox1"
                                                                        {{ $array_two[0]== 'Sms' ? 'checked':'' }}
                                                                        value="Sms">
                                                                    <label class="form-check-label"
                                                                        for="inlineCheckbox1">Sms</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="type_noti[]" id="inlineCheckbox2"
                                                                        {{ $array_two[1] == 'Email' ? 'checked':'' }}
                                                                        value="Email">
                                                                    <label class="form-check-label"
                                                                        for="inlineCheckbox2">Email</label>
                                                                </div>

                                                                @endif
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
                                    @if (Auth::guard('admin')->user()->can('alumini_event_delete'))

                                    <button type="button" class="btn btn-danger waves-light waves-effect  btn-sm"
                                        onclick="deleteTag({{ $all_home_work->id}})" data-toggle="tooltip"
                                        title="Delete"><i class="fas fa-trash-alt"></i></button>
                                    <form id="delete-form-{{ $all_home_work->id }}"
                                        action="{{ route('admin.alumni_event.delete',$all_home_work->id) }}"
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
                <h5 class="modal-title" id="myLargeModalLabel">Add New Event</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form class="custom-validation" action="{{ route('admin.alumni_event.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="name">Event For: </label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input aev_fora" type="radio" name="event_for"
                                                    id="inlineRadio1" value="All Alumni" required>
                                                <label class="form-check-label" for="inlineRadio1">All Alumni</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input aev_fora" type="radio" name="event_for"
                                                    id="inlineRadio2" value="Class" required>
                                                <label class="form-check-label" for="inlineRadio2">Class</label>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="name">Event Title</label>
                                            <input type="text" class="form-control" name="event_title"
                                                placeholder="Enter Event Title">
                                        </div>



                                    </div>
                                    <div class="row mt-3" class="disabled" id="disabled">

                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="password">Class Name</label>
                                            <select name="class_id" class="form-control">
                                                <option value="">Select Class</option>
                                                @foreach ($class_details as $user_class_update)
                                                <option value="{{ $user_class_update->id }}">
                                                    {{ $user_class_update->name }}</option>

                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="password">Department Name</label>
                                            <select name="department_id" class="form-control">

                                            </select>
                                        </div>

                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="password">Section Name</label>


                                            <div class="" id="section_id">

                                            </div>
                                        </div>

                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="password">Pass Out Session</label>
                                            <select name="pass_out_session" class="form-control">
                                                <option value="">---->Select Session<----</option>
                                                        @foreach($session_detail as $all_session) <option
                                                        value="{{ $all_session->name }}">{{ $all_session->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>




                                    <div class="row mt-3">


                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="name">Event From Date</label>
                                            <input type="date" value="<?php echo date('Y-m-d')?>" class="form-control"
                                                id="name" name="from_date" placeholder="Enter Upload Date">
                                        </div>


                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="name">Event To Date</label>
                                            <input type="date" value="<?php echo date('Y-m-d')?>" class="form-control"
                                                id="name" name="to_date" placeholder="Enter Upload Date">
                                        </div>






                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="name">Note</label>
                                            <textarea class="form-control form-control-sm" id="name" name="note"
                                                placeholder=""></textarea>
                                        </div>


                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="name">Event Notification Message</label>
                                            <textarea class="form-control form-control-sm" id="name"
                                                name="event_notification_msg" placeholder=""></textarea>
                                        </div>


                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="name">Send Via</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="type_noti[]"
                                                    id="inlineCheckbox1" value="Sms">
                                                <label class="form-check-label" for="inlineCheckbox1">Sms</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="type_noti[]"
                                                    id="inlineCheckbox2" value="Email">
                                                <label class="form-check-label" for="inlineCheckbox2">Email</label>
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
                                            class="btn btn-primary btn-lg  waves-effect waves-light mr-1">
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
$(document).ready(function() {


    $('.test_main_data').hide();

$("[id^=1inlineRadio111]").click(function() {
    var target = $(this).val();

    // alert(target);
    if (target == 'All Alumni') {
        $('.test_main_data').hide();

    }else{
        $('.test_main_data').show();

    }

});

});

</script>
<script type="text/javascript">
    $(document).on('click', '[id^=inlineRadio11]', function () {
        var target = $(this).val();
        var index = $(this).data("index");
        //alert(index);

        if (target == 'All Alumni') {
            $('#disabled_edit' + index).addClass('disabled_input').css('pointerEvents', 'none');
        }


        if (target == 'Class') {
            $('#disabled_edit' + index).removeClass('disabled_input').css('pointerEvents', 'auto');;
        }
    });

</script>


<script type="text/javascript">
    $(document).on('click', '.aev_fora', function () {
        var target = $(this).val();
        //alert(target);

        if (target == 'All Alumni') {
            $('#disabled').addClass('disabled_input').css('pointerEvents', 'none');
        }


        if (target == 'Class') {
            $('#disabled').removeClass('disabled_input').css('pointerEvents', 'auto');;
        }
    });

</script>

<script type="text/javascript">
    $("select[name='class_id']").change(function () {
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('department_search') }}",
            method: 'POST',
            data: {
                id_country: id_country,
                _token: token
            },
            success: function (data) {
                $("select[name='department_id'").html('');
                $("select[name='department_id'").html(data.options);
            }
        });
    });

</script>
<script type="text/javascript">
    $("select[name='class_id']").change(function () {
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('alumni_section_search') }}",
            method: 'POST',
            data: {
                id_country: id_country,
                _token: token
            },
            success: function (data) {
                $('#section_id').html('');
                $('#section_id').html(data.options);
            }
        });
    });

</script>
<script type="text/javascript">
    $("select[name='department_id']").change(function () {
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('alumni_section_search_dp_wise') }}",
            method: 'POST',
            data: {
                id_country: id_country,
                _token: token
            },
            success: function (data) {
                $('#section_id').html('');
                $('#section_id').html(data.options);
            }
        });
    });

</script>


<script type="text/javascript">
    $("select[name='class_id']").change(function () {
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        var index = $(this).data("index");
        $.ajax({
            url: "{{ route('alumni_section_search_edit') }}",
            method: 'POST',
            data: {
                id_country: id_country,
                _token: token
            },
            success: function (data) {
                $('#section_id'+index).html('');
                $('#section_id'+index).html(data.options);
            }
        });
    });

</script>
<script type="text/javascript">
    $("select[name='department_id']").change(function () {
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        var index = $(this).data("index");
        $.ajax({
            url: "{{ route('alumni_section_search_dp_wise_edit') }}",
            method: 'POST',
            data: {
                id_country: id_country,
                _token: token
            },
            success: function (data) {
                $('#section_id'+index).html('');
                $('#section_id'+index).html(data.options);
            }
        });
    });

</script>



<script type="text/javascript">
    $("select[name='class_id']").change(function () {
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('subject_search') }}",
            method: 'POST',
            data: {
                id_country: id_country,
                _token: token
            },
            success: function (data) {
                $("select[name='subject_id'").html('');
                $("select[name='subject_id'").html(data.options);
            }
        });
    });

</script>
<script type="text/javascript">
    $("select[name='department_id']").change(function () {
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('subject_search_dpwise') }}",
            method: 'POST',
            data: {
                id_country: id_country,
                _token: token
            },
            success: function (data) {
                $("select[name='subject_id'").html('');
                $("select[name='subject_id'").html(data.options);
            }
        });
    });

</script>
<script type="text/javascript">
    $("select[name='section_id']").change(function () {
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('student_search') }}",
            method: 'POST',
            data: {
                id_country: id_country,
                _token: token
            },
            success: function (data) {
                $("select[name='students_id'").html('');
                $("select[name='students_id'").html(data.options);
            }
        });
    });

</script>




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
