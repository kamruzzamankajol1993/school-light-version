@extends('admin.master.master')

@section('title')
Add Staff Attendence  | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Add Staff Attendence</h4>

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
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @include('flash_message')
                <form class="custom-validation" action="{{ route('admin.staff_attandance.store') }}" method="post" enctype="multipart/form-data">
                    @csrf


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
                                                                                        <input type="date" name="date" value="<?php echo date('Y-m-d')?>" class="form-control form-control-sm"/>
                                                                                      </div>
                                                                                    <div class="form-group col-md-12 col-sm-12" id="student_list">


                                                                                    </div>

                                                                                    <div class="col-lg-12 mt-3">
                                                                                        <div class="float-right d-none d-md-block">
                                                                                            <div class="form-group mb-4">
                                                                                                <div>
                                                                                                    <button type="submit" class="btn btn-primary btn-lg  waves-effect  btn-sm waves-light mr-1">
                                                                                                       Submit
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>



                                                                                    </div>

                </form>
            </div>
        </div>
    </div>
</div>



@endsection

@section('script')



<script type="text/javascript">

    $(document).ready(function(){
       $("select[name='role_id'").click(function(){


          var role_id = $(this).val();



          $.ajax({
       headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url:"{{route('staff_search')}}",
      type:"POST",
      data:{'role_id':role_id},
            //dataType:'json',
            success:function(data){
              console.log(data);
            //  $("#subcategory_area").hide();
              $('#student_list').html(data);
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







