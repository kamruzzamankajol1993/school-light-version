@extends('admin.master.master')

@section('title')
Staff Payroll  List  | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Staff Payroll Information</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">{{ $ins_name }} </a></li> --}}
                    <li class="breadcrumb-item active">{{ $ins_name }} </li>
                </ol>
            </div>

        </div>
    </div>
</div>



<div class="row mt-2">

    <div class="col-12">
        <div class="card">

            <div class="card-body">

@include('flash_message')

{{-- <form method="get" action="{{ route('admin.staff_search_for_payroll') }}">
    @csrf --}}
<div class="row">

<div class="form-group col-md-4 col-sm-12">
                                <label for="password">Role</label>
                    <select name="role_id"  class="form-control form-control-sm">
                        <option value="">----Select Role----</option>
       @foreach ($role_list as $user_class_update)
 <option value="{{ $user_class_update->name }}" >{{ $user_class_update->name }}</option>

        @endforeach
                                </select>
                            </div>




                            <div class="form-group col-md-4 col-sm-12">
                                <label for="password">Month</label>
                    <select name="month"  class="form-control form-control-sm" id="month">
                        <option value="">----Select Month----</option>
                        <option value='1'>January</option>
                        <option value='2'>February</option>
                        <option value='3'>March</option>
                        <option value='4'>April</option>
                        <option value='5'>May</option>
                        <option value='6'>June</option>
                        <option value='7'>July</option>
                        <option value='8'>August</option>
                        <option value='9'>September</option>
                        <option value='10'>October</option>
                        <option value='11'>November</option>
                        <option value='12'>December</option>
                                </select>
                            </div>


                            <div class="form-group col-md-4 col-sm-12">
                                <label for="password">Year</label>
                    <select name="year"  class="form-control form-control-sm" id="year">
                        <option value="">----Select Year----</option>
                        <option value='2022'>2022</option>
                        <option value='2023'>2023</option>
                        <option value='2024'>2024</option>
                        <option value='2025'>2025</option>
                        <option value='2026'>2026</option>
                        <option value='2027'>2027</option>
                        <option value='2028'>2028</option>
                        <option value='2029'>2029</option>
                        <option value='2030'>2030</option>

                                </select>
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
{{-- </form> --}}
</div>
</div>
</div>

</div>







@endsection

@section('script')

<script type="text/javascript">

    $(document).ready(function(){
       $("#attendance_search_button").click(function(){

          var role_id = $("select[name='role_id'").val();


          var year = $("#year").val();

          var month = $("#month").val();
          $.ajax({
       headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url:"{{route('admin.staff_searchlist_for_payroll')}}",
      type:"POST",
      data:{'role_id':role_id,'year':year,'month':month},
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
<script>

$(document).on('click', '#inlineCheckbox1203', function () {
    var target = $(this).data('target');
    if ($(this).is(':checked')) {
        $('#' + target).addClass('disabled').css('pointerEvents','none');
    }
    else {
        $('#' + target).removeClass('disabled').css('pointerEvents','auto');;
    }
});

    </script>


@endsection







