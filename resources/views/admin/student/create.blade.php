@extends('admin.master.master')

@section('title')

Add New Student
@endsection


@section('body')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Add New Student</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="">Forms /</li>
                        <li class="breadcrumb-item active">Add New Student</li>
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
                    <h5>Student Admission</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('admin.student.store') }}"  enctype="multipart/form-data">
                        @csrf
                        <section class="bg-gradient-info text-light">
                            <h5 style="padding: 10px;">General Information</h5>
                                                </section>
                        <div class="row mt-2">


                            @foreach($custome_filed_list as $new_custome_field)


                                    @if($new_custome_field->field_type == 'textarea')


                                    @elseif($new_custome_field->field_type == 'select')
                                   <!--fix field item -->
                                    @if($new_custome_field->field_name == 'Category')
                                    <div class="col-md-4 ">
                                        <div class=" mb-3">
                                    <label class="form-label" for="">{{ $new_custome_field->field_name }} <span class="ml-3 text-danger">{{ $new_custome_field->validation == 1 ? '*' : '' }}</span></label>

                                     <select name="{{ $new_custome_field->database_colomn_name }}" class="form-control 1 select2" {{ $new_custome_field->validation == 1 ? 'required' : '' }}>

                                        @foreach($student_category as $newCategory)

                                        <option value="{{ $newCategory->name }}">{{ $newCategory->name }}</option>

                                        @endforeach
                                     </select>
                                    </div>
                                </div>
                                    @elseif($new_custome_field->field_name == 'Class')
                                    <div class="col-md-4 ">
                                        <div class=" mb-3">
                                    <label class="form-label" for="">{{ $new_custome_field->field_name }} <span class="ml-3 text-danger">{{ $new_custome_field->validation == 1 ? '*' : '' }}</span></label>

                                    <select name="class_id"  class="form-control 1 select2" {{ $new_custome_field->validation == 1 ? 'required' : '' }}>
                                        <option value="">Select Class</option>
                       @foreach ($class_details as $user_class_update)
                 <option value="{{ $user_class_update->name }}" >{{ $user_class_update->name }}</option>

                        @endforeach
                                    </select>
                                </div>
                            </div>
                        @elseif($new_custome_field->field_name == 'Department')
                        <div class="col-md-4 ">
                            <div class=" mb-3">
                        <label class="form-label" for="">{{ $new_custome_field->field_name }} <span class="ml-3 text-danger">{{ $new_custome_field->validation == 1 ? '*' : '' }}</span></label>

                        <select name="department_id"  class="form-control" {{ $new_custome_field->validation == 1 ? 'required' : '' }}>

                        </select>

                    </div>
                </div>
                                    @elseif($new_custome_field->field_name == 'Section')
                                    <div class="col-md-4 ">
                                        <div class=" mb-3">
                                    <label class="form-label" for="">{{ $new_custome_field->field_name }} <span class="ml-3 text-danger">{{ $new_custome_field->validation == 1 ? '*' : '' }}</span></label>

                                    <select name="section_id"  class="form-control" {{ $new_custome_field->validation == 1 ? 'required' : '' }}>

                                    </select>

                                        </div>
                                    </div>
                                    @elseif($new_custome_field->field_name == 'Student House')
                                    <div class="col-md-4 ">
                                        <div class=" mb-3">
                                    <label class="form-label" for="">Student Branch<span class="ml-3 text-danger">{{ $new_custome_field->validation == 1 ? '*' : '' }}</span></label>

                                    <select name="{{ $new_custome_field->database_colomn_name }}" class="form-control" {{ $new_custome_field->validation == 1 ? 'required' : '' }}>

                                        @foreach($student_house as $newCategory)

                                        <option value="{{ $newCategory->name }}">{{ $newCategory->name }}</option>

                                        @endforeach
                                     </select>
                                    </div>
                                </div>
                                    @else
                                    <div class="col-md-4 ">
                                        <div class=" mb-3">
                                    <label class="form-label" for="">{{ $new_custome_field->field_name }} <span class="ml-3 text-danger">{{ $new_custome_field->validation == 1 ? '*' : '' }}</span></label>


                                    <?php

                                     $string_value = $new_custome_field->field_value;

                                     $array_value = explode(',', $string_value);

                                     //var_dump($array_value);
                                    ?>

                                    <select name="{{ $new_custome_field->database_colomn_name }}" class="form-control" {{ $new_custome_field->validation == 1 ? 'required' : '' }}>
@foreach($array_value as $print_value)
                                        <option value="{{ $print_value }}">{{ $print_value }}</option>
                                        @endforeach
                                     </select>

                                    </div>
                                </div>
                                    @endif

<!--fix field item -->

                                    @elseif($new_custome_field->field_type == 'checkbox')


                                    @elseif($new_custome_field->field_type == 'radio')



                                    @else
                                    @if($new_custome_field->field_name == 'Roll Number' || $new_custome_field->field_name == 'Religion' || $new_custome_field->field_name == 'Caste' || $new_custome_field->field_name == 'Admission Date' || $new_custome_field->field_name == 'Height' || $new_custome_field->field_name == 'Weight' || $new_custome_field->field_name == 'As on Date' || $new_custome_field->field_name == 'Blood Group' || $new_custome_field->field_name == 'Email')


@elseif ($new_custome_field->field_name == 'Admission No' )

<div class="col-md-4 ">
    <div class=" mb-3">
                                    <label class="form-label" for="">{{ $new_custome_field->field_name }} <span class="ml-3 text-danger">{{ $new_custome_field->validation == 1 ? '*' : '' }}</span></label>

                                    @if($new_custome_field->field_type == 'date')
                                    <input type="{{ $new_custome_field->field_type }}" name="{{ $new_custome_field->database_colomn_name }}" value="<?php  echo date('Y-m-d')?>" class="form-control 1" {{ $new_custome_field->validation == 1 ? 'required' : '' }}>
                                    @else
                                    <input type="{{ $new_custome_field->field_type }}" name="{{ $new_custome_field->database_colomn_name }}" readonly value="{{ $admissionId }}" class="form-control 1" {{ $new_custome_field->validation == 1 ? 'required' : '' }}>
                                    @endif
                                </div>
                            </div>
@else
<div class="col-md-4 ">
    <div class=" mb-3">
                                    <label class="form-label" for="">{{ $new_custome_field->field_name }} <span class="ml-3 text-danger">{{ $new_custome_field->validation == 1 ? '*' : '' }}</span></label>

                                    @if($new_custome_field->field_type == 'date')
                                    <input type="{{ $new_custome_field->field_type }}" name="{{ $new_custome_field->database_colomn_name }}" value="<?php  echo date('Y-m-d')?>" class="form-control 1" {{ $new_custome_field->validation == 1 ? 'required' : '' }}>
                                    @else
                                    <input type="{{ $new_custome_field->field_type }}" name="{{ $new_custome_field->database_colomn_name }}" class="form-control 1" {{ $new_custome_field->validation == 1 ? 'required' : '' }}>
                                    @endif
                                </div>
                            </div>
                                    @endif
                                    @endif

                           @endforeach
                        </div>


                        <section class="bg-gradient-info text-light">
                            <h5 style="padding: 10px;">Parent Guardian Detail</h5>
                                                </section>

                                                  <div class="row mt-2">


                            @foreach($parent_information as $new_custome_field)



                                    @if($new_custome_field->field_name == 'Father Name')

                                    <div class="col-md-6">
                                        <div class=" mb-3">
                                    <label class="form-label" for="">{{ $new_custome_field->field_name }} <span class="ml-3 text-danger">{{ $new_custome_field->validation == 1 ? '*' : '' }}</span></label>

                                    <input type="{{ $new_custome_field->field_type }}" id="father_name" name="{{ $new_custome_field->database_colomn_name }}" class="form-control" {{ $new_custome_field->validation == 1 ? 'required' : '' }}>
                                </div>
                            </div>

                                    @elseif($new_custome_field->field_name == 'Father Phone')
                                    <div class="col-md-6">
                                        <div class=" mb-3">

                                    <label class="form-label" for="">{{ $new_custome_field->field_name }} <span class="ml-3 text-danger">{{ $new_custome_field->validation == 1 ? '*' : '' }}</span></label>

                                    <input type="{{ $new_custome_field->field_type }}" id="father_phone" name="{{ $new_custome_field->database_colomn_name }}" class="form-control" {{ $new_custome_field->validation == 1 ? 'required' : '' }}>
                                </div>
                            </div>


                                    @elseif($new_custome_field->field_name == 'Mother Name')
                                    <div class="col-md-6">
                                        <div class=" mb-3">
                                            <label class="form-label" for="">{{ $new_custome_field->field_name }} <span class="ml-3 text-danger">{{ $new_custome_field->validation == 1 ? '*' : '' }}</span></label>
                                    <input type="{{ $new_custome_field->field_type }}" id="mother_name" name="{{ $new_custome_field->database_colomn_name }}" class="form-control " {{ $new_custome_field->validation == 1 ? 'required' : '' }}>
                                </div>
                            </div>
                                    @elseif($new_custome_field->field_name == 'Mother Phone')
                                    <div class="col-md-6">
                                        <div class=" mb-3">

                                    <label class="form-label" for="">{{ $new_custome_field->field_name }} <span class="ml-3 text-danger">{{ $new_custome_field->validation == 1 ? '*' : '' }}</span></label>

                                    <input type="{{ $new_custome_field->field_type }}" id="mother_phone" name="{{ $new_custome_field->database_colomn_name }}" class="form-control" {{ $new_custome_field->validation == 1 ? 'required' : '' }}>

                                </div>
                            </div>



                                    @endif


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
