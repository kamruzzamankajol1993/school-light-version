@extends('admin.master.master')

@section('title')
Staff Attendance  List  | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Staff Attendance Information</h4>

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
    @if (Auth::guard('admin')->user()->can('Staff_attendence_add'))
    <a href="{{ route('admin.staff_attandance.create') }}" class="btn btn-primary dropdown-toggle waves-effect  btn-sm waves-light" type="button" >
                                            <i class="far fa-calendar-plus  mr-2"></i> Add Attendance
    </a>
    @endif
    </div>
</div>

<div class="row mt-2">

    <div class="col-12">
        <div class="card">

            <div class="card-body">

@include('flash_message')


<div class="row">

<div class="form-group col-md-6 col-sm-12">
                                <label for="password">Role</label>
                    <select name="role_id"  class="form-control form-control-sm">
                        <option value="">----Select Role----</option>
       @foreach ($role_list as $user_class_update)
 <option value="{{ $user_class_update->name }}" >{{ $user_class_update->name }}</option>

        @endforeach
                                </select>
                            </div>




                            <div class="form-group col-md-6 col-sm-12">
                                <label for="password">Date</label>
                                <input type="date" id="date" name="date" value="<?php echo date('Y-m-d')?>" class="form-control form-control-sm"/>
                              </div>




                            </div>

                            <div class="col-lg-12 mt-2">
                                <div class="float-right d-none d-md-block">
                                    <div class="form-group mb-4">
                                        <div>
                                            <button  class="btn btn-primary btn-lg  waves-effect  btn-sm waves-light mr-1" id="attendance_search_button">
                                               Search
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="show_result">



                            </div>




    </div>

</div>
</div>
</div>






                    {{-- <!-- start page title -->
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title-box">
                                <h4 class="font-size-18">Student Attendance  List</h4>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Resnova</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Student Attendance  List </a></li>

                                </ol>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="float-right d-md-block">
                                <div class="dropdown">
                                @if (Auth::guard('admin')->user()->can('sta_add'))
<a href="{{ route('admin.attendance_student.create') }}" class="btn btn-primary dropdown-toggle waves-effect  btn-sm waves-light" type="button" >
                                        <i class="far fa-calendar-plus  mr-2"></i> Add
</a>
@endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">

 @include('flash_message')

                                <div class="row">
                                    <div class="card-body">
                                    <div class="col-lg-12">

<div class="row">
<div class="form-group col-md-3 col-sm-12">
                                                                <label for="password">Class Name</label>
                                                    <select name="class_id"  class="form-control form-control-sm">
                                                        <option value="">Select Class</option>
                                       @foreach ($class_details as $user_class_update)
                                 <option value="{{ $user_class_update->id }}" >{{ $user_class_update->name }}</option>

                                        @endforeach
                                                                </select>
                                                            </div>


                <div class="form-group col-md-2 col-sm-12">
                                                                <label for="password">Department Name</label>
                                                    <select name="department_id"  class="form-control form-control-sm">

                                                                </select>
                                                            </div>

                                                            <div class="form-group col-md-2 col-sm-12">
                                                                <label for="password">Section Name</label>
                                                    <select name="section_id"  class="form-control form-control-sm">

                                                                </select>
                                                            </div>

                                                             <div class="form-group col-md-3 col-sm-12">
                                                                <label for="password">Subject Name</label>
                                                    <select name="subject_id"  class="form-control form-control-sm">

                                                                </select>
                                                            </div>

                                                            <div class="form-group col-md-2 col-sm-12">
                                                                <label for="password">Date</label>
                                                                <input type="date" id="date" name="date" value="<?php echo date('Y-m-d')?>" class="form-control form-control-sm"/>
                                                              </div>




                                                            </div>

                                                            <div class="col-lg-12">
                                                                <div class="float-right d-none d-md-block">
                                                                    <div class="form-group mb-4">
                                                                        <div>
                                                                            <button  class="btn btn-primary btn-lg  waves-effect  btn-sm waves-light mr-1" id="attendance_search_button">
                                                                               Search
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div id="show_result">



                                                            </div>




                                    </div>




                                </div> <!-- end col -->



                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row --> --}}







@endsection

@section('script')




      <script type="text/javascript">

        $(document).ready(function(){
           $("#attendance_search_button").click(function(){

              var role_id = $("select[name='role_id'").val();


              var date = $("#date").val();


              $.ajax({
           headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url:"{{route('role_base_search_staff_list')}}",
          type:"POST",
          data:{'role_id':role_id,'date':date},
                //dataType:'json',
                success:function(data){
                  console.log(data);
                //  $("#subcategory_area").hide();
                  $('#show_result').html(data);
                },
                error:function(){
                //  toastr.error("Something went Wrong, Please Try again.");
               }
             });

          //end ajax


        });

        });
          </script>
@endsection







