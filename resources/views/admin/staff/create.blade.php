@extends('admin.master.master')

@section('title')

Add New Staff
@endsection


@section('body')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Add New Staff</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="">Forms /</li>
                        <li class="breadcrumb-item active">Add New Staff</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->
    <?php
    $r_number = mt_rand(1000000000000000, 9999999999999999);
    $dt = new DateTime();
    $dt->setTimezone(new DateTimezone('Asia/Dhaka'));
    $main_time = $dt->format('his');

    $admissionId = date('Ymd').$main_time;

    //dd($admissionId);

    ?>

    <div class="row" style="font-size: 12px;">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5>Staff </h5>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('admin.staff.store') }}"  enctype="multipart/form-data">
                        @csrf
                        <section class="bg-primary text-light">
                            <h5 style="padding: 10px;color:white;">Basic Information</h5>
                                                </section>
                        <div class="row mt-2">


                            @foreach($custome_filed_list as $new_custome_field)
                            <div class="col-md-4 ">
                                <div class=" mb-3">


                                    @if($new_custome_field->field_name == 'PAN Number')
@else
                                    <label class="form-label" for="">{{ $new_custome_field->field_name }} <span class="ml-3 text-danger">{{ $new_custome_field->validation == 1 ? '*' : '' }}</span></label>
@endif
                                    @if($new_custome_field->field_type == 'textarea')


                                    @if($new_custome_field->field_name == 'PAN Number')
@else
                                    <textarea name="{{ $new_custome_field->database_colomn_name }}" class="form-control form-control-sm" {{ $new_custome_field->validation == 1 ? 'required' : '' }}>

                                    </textarea>
                                    @endif




                                    @elseif($new_custome_field->field_type == 'select')
                                   <!--fix field item -->
                                    @if($new_custome_field->field_name == 'Role')
                                     <select name="{{ $new_custome_field->database_colomn_name }}" class="form-control form-control-sm" {{ $new_custome_field->validation == 1 ? 'required' : '' }}>
                                        <option value="">---Select Role---</option>
                                        @foreach($role_list as $newCategory)

                                        <option value="{{ $newCategory->name }}">{{ $newCategory->name }}</option>

                                        @endforeach
                                     </select>

                                    @elseif($new_custome_field->field_name == 'Designation')


                                    <select name="{{ $new_custome_field->database_colomn_name }}"  class="form-control form-control-sm" {{ $new_custome_field->validation == 1 ? 'required' : '' }}>
                                        <option value="">Select Designation</option>
                       @foreach ($dp_details as $user_class_update)
                 <option value="{{ $user_class_update->name }}" >{{ $user_class_update->name }}</option>

                        @endforeach
                                    </select>

                        @elseif($new_custome_field->field_name == 'Department')

                        <select name="{{ $new_custome_field->database_colomn_name }}"  class="form-control form-control-sm" {{ $new_custome_field->validation == 1 ? 'required' : '' }}>
                            <option value="">Select Department</option>
                            @foreach ($class_details as $user_class_update)
                      <option value="{{ $user_class_update->name }}" >{{ $user_class_update->name }}</option>

                             @endforeach
                        </select>


                                    @elseif($new_custome_field->field_name == 'Section')

                                    <select name="section_id"  class="form-control" {{ $new_custome_field->validation == 1 ? 'required' : '' }}>

                                    </select>


                                    @elseif($new_custome_field->field_name == 'Student House')

                                    <select name="{{ $new_custome_field->database_colomn_name }}" class="form-control" {{ $new_custome_field->validation == 1 ? 'required' : '' }}>

                                        @foreach($student_house as $newCategory)

                                        <option value="{{ $newCategory->name }}">{{ $newCategory->name }}</option>

                                        @endforeach
                                     </select>

                                    @else


                                    <?php

                                     $string_value = $new_custome_field->field_value;

                                     $array_value = explode(',', $string_value);

                                     //var_dump($array_value);
                                    ?>

                                    <select name="{{ $new_custome_field->database_colomn_name }}" class="form-control form-control-sm" {{ $new_custome_field->validation == 1 ? 'required' : '' }}>
@foreach($array_value as $print_value)
                                        <option value="{{ $print_value }}">{{ $print_value }}</option>
                                        @endforeach
                                     </select>
                                    @endif

<!--fix field item -->

                                    @elseif($new_custome_field->field_type == 'checkbox')

                                    <?php

                                     $string_value = $new_custome_field->field_value;

                                     $array_value = explode(',', $string_value);

                                     //var_dump($array_value);
                                    ?>
<br>
@foreach($array_value as $print_value)
                                    <input name="{{ $new_custome_field->database_colomn_name }}" type="checkbox" value="{{ $print_value }}" {{ $new_custome_field->validation == 1 ? 'required' : '' }}>
                                    <label>{{ $print_value }}</label>
                                    @endforeach


                                    @elseif($new_custome_field->field_type == 'radio')


                                    <?php

                                    $string_value = $new_custome_field->field_value;

                                    $array_value = explode(',', $string_value);

                                    //var_dump($array_value);
                                   ?>
<br>
@foreach($array_value as $key=>$print_value)
                                    <input type="radio" name="{{ $new_custome_field->database_colomn_name }}" id="customRadio{{ $key }}" value="{{ $print_value }}" {{ $new_custome_field->validation == 1 ? 'required' : '' }}>
                                    <label for="customRadio{{ $key }}">{{ $print_value }}</label>

                                    @endforeach
                                    @else

                                    @if($new_custome_field->field_type == 'date')
                                    <input type="{{ $new_custome_field->field_type }}" name="{{ $new_custome_field->database_colomn_name }}" value="<?php  echo date('Y-m-d')?>" class="form-control form-control-sm" {{ $new_custome_field->validation == 1 ? 'required' : '' }}>
                                    @else


                                    @if($new_custome_field->field_name == 'PAN Number')
@else



@if($new_custome_field->field_name == 'Staff Id')
<input readonly value="{{ $admissionId }}" type="{{ $new_custome_field->field_type }}" name="{{ $new_custome_field->database_colomn_name }}" class="form-control form-control-sm" {{ $new_custome_field->validation == 1 ? 'required' : '' }}>
@else

<input type="{{ $new_custome_field->field_type }}" name="{{ $new_custome_field->database_colomn_name }}" class="form-control form-control-sm" {{ $new_custome_field->validation == 1 ? 'required' : '' }}>
@endif

@endif
                                    @endif
                                    @endif
                                </div>
                            </div>
                           @endforeach
                        </div>




                         <div class="mt-4">
                            <button type="submit" class="btn btn-primary w-md">Submit</button>
                        </div>
                    </form>



                </div>
            </div>
        </div>
    </div>
    <!-- End Form Layout -->
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
                    document.getElementById('delete-form-'+id).submit();
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

    <script type="text/javascript">
  $("select[name='class_id']").change(function(){
      var id_country = $(this).val();
      var token = $("input[name='_token']").val();
      $.ajax({
          url: "{{ route('department_search_name') }}",
          method: 'POST',
          data: {id_country:id_country, _token:token},
          success: function(data) {
            $("select[name='department_id'").html('');
            $("select[name='department_id'").html(data.options);
          }
      });
  });
</script>
 <script type="text/javascript">
  $("select[name='class_id']").change(function(){
      var id_country = $(this).val();
      var token = $("input[name='_token']").val();
      $.ajax({
          url: "{{ route('section_search_name') }}",
          method: 'POST',
          data: {id_country:id_country, _token:token},
          success: function(data) {
            $("select[name='section_id'").html('');
            $("select[name='section_id'").html(data.options);
          }
      });
  });
</script>
<script type="text/javascript">
  $("select[name='department_id']").change(function(){
      var id_country = $(this).val();
      var token = $("input[name='_token']").val();
      $.ajax({
          url: "{{ route('dpsection_search_name') }}",
          method: 'POST',
          data: {id_country:id_country, _token:token},
          success: function(data) {
            $("select[name='section_id'").html('');
            $("select[name='section_id'").html(data.options);
          }
      });
  });
</script>


<script type="text/javascript">
    $("select[name='hostel']").change(function(){
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('student_hostel_room') }}",
            method: 'POST',
            data: {id_country:id_country, _token:token},
            success: function(data) {
              $("select[name='room_no'").html('');
              $("select[name='room_no'").html(data.options);
            }
        });
    });
  </script>

<script type="text/javascript">
    var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
        $("#dynamicAddRemove").append('<tr><td><input type="text" name="siblingname[]" id="siblingname'+i+'" placeholder="Enter name" class="form-control" /></td><td><input type="text" name="siblingclass[]" id="siblingclass'+i+'" placeholder="Enter class" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
</script>


<script type="text/javascript">
    var i = 0;
    $("#dynamic-ar1").click(function () {
        ++i;
        $("#dynamicAddRemove1").append('<tr><td><input type="text" name="doctitle[]" id="doctitle'+i+'" placeholder="Enter Title" class="form-control" /></td><td><input type="file" name="doc[]" id="doc'+i+'" placeholder="Enter class" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field1">Delete</button></td></tr>'
            );
    });
    $(document).on('click', '.remove-input-field1', function () {
        $(this).parents('tr').remove();
    });
</script>



<script type="text/javascript">
    $("[id^=customRadio]").change(function(){
        var main_value = $(this).val();

        var father_name =$('#father_name').val();
        var mother_name =$('#mother_name').val();


        var father_phone =$('#father_phone').val();
        var mother_phone =$('#mother_phone').val();



        var father_occu =$('#father_occu').val();
        var mother_occu =$('#mother_occu').val();

        if(main_value == 'Father'){

            $('#g_phone').val(father_phone);
            $('#g_name').val(father_name);
            $('#g_occu').val(father_occu);
            $('#g_relation').val(main_value);

        }


        if(main_value == 'Mother'){

            $('#g_phone').val(mother_phone);
            $('#g_name').val(mother_name);
            $('#g_occu').val(mother_occu);
            $('#g_relation').val(main_value);

}


if(main_value == 'Other'){
    $('#g_phone').val('');
            $('#g_name').val('');
            $('#g_occu').val('');

            $('#g_relation').val('');
}
        //alert(main_value);
        //var token = $("input[name='_token']").val();
        // $.ajax({
        //     url: "{{ route('department_search') }}",
        //     method: 'POST',
        //     data: {id_country:id_country, _token:token},
        //     success: function(data) {
        //       $("select[name='department_id'").html('');
        //       $("select[name='department_id'").html(data.options);
        //     }
        // });
    });
  </script>
<script type="text/javascript">
    $("#gc_address").change(function(){


        var g_address = $('#g_address').val();
        var c_address = $('#c_address').val();


        if ($('#gc_address').is(':checked')) {

            $('#c_address').val(g_address);
        }else{

            $('#c_address').val('');

        }

    });


    </script>


<script type="text/javascript">
    $("#pc_address").change(function(){


        var p_address = $('#p_address').val();
        var c_address = $('#c_address').val();


        if ($('#pc_address').is(':checked')) {

            $('#p_address').val(c_address);
        }else{

            $('#p_address').val('');

        }

    });


    </script>

@endsection
