@extends('admin.master.master')

@section('title')
Student Bulk  Delete List | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')
<?php use App\Http\Controllers\SectionController;


?>
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Student Bulk  Delete List</h4>

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
            <button style="margin-bottom: 10px" class="btn btn-danger btn-sm delete_all" data-url="{{ url('admin/student_bulk_delete_post') }}">Delete All Selected</button>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @include('flash_message')




                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th><input type="checkbox" id="master"></th>
                                <th>SL</th>

                                <th>Admission Name</th>

                                <th>Roll Number</th>

                                <th>Class</th>

                                <th>Department</th>

                                <th>Section</th>

                                <th>Name</th>


                                <th>Gender</th>
                                <th>Date Of Birth</th>
                                <th>Student House</th>




                            </tr>
                        </thead>


                        <tbody>


                            @foreach($test_student as $key=>$newss)
                            <tr id="tr_{{$newss->id}}">
                                <td><input type="checkbox" class="sub_chk" data-id="{{$newss->id}}"></td>
                                <td>


                                    {{ $key+1 }}




                                </td>
                                <td>




                                    {{ $newss->admission_no }}



                                </td>

                                <td>{{ $newss->roll_number}}</td>

                                <td>{{ $newss->class}}</td>

                                <td>{{ $newss->department}}</td>

                                <td>{{ $newss->section}}</td>

                                <td>{{ $newss->first_name.' '.$newss->last_name  }}</td>


                                <td>{{ $newss->gender }}</td>
                                <td>{{ $newss->date_of_birth }}</td>
                                <td>{{ $newss->student_house}}</td>




                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div>






            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->







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
            url: "{{ route('section_search') }}",
            method: 'POST',
            data: {
                id_country: id_country,
                _token: token
            },
            success: function (data) {
                $("select[name='section_id'").html('');
                $("select[name='section_id'").html(data.options);
            }
        });
    });

</script>
<script type="text/javascript">
    $("select[name='department_id']").change(function () {
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('dpsection_search') }}",
            method: 'POST',
            data: {
                id_country: id_country,
                _token: token
            },
            success: function (data) {
                $("select[name='section_id'").html('');
                $("select[name='section_id'").html(data.options);
            }
        });
    });

</script>

<script type="text/javascript">
    $(document).ready(function () {


        $('#master').on('click', function(e) {
         if($(this).is(':checked',true))
         {
            $(".sub_chk").prop('checked', true);
         } else {
            $(".sub_chk").prop('checked',false);
         }
        });


        $('.delete_all').on('click', function(e) {


            var allVals = [];
            $(".sub_chk:checked").each(function() {
                allVals.push($(this).attr('data-id'));
            });


            if(allVals.length <=0)
            {
                alert("Please select row.");
            }  else {


                var check = confirm("Are you sure you want to delete this row?");
                if(check == true){


                    var join_selected_values = allVals.join(",");


                    $.ajax({
                        url: $(this).data('url'),
                        type: 'DELETE',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: 'ids='+join_selected_values,
                        success: function (data) {
                            if (data['success']) {
                                $(".sub_chk:checked").each(function() {
                                    $(this).parents("tr").remove();
                                });
                                alert(data['success']);
                            } else if (data['error']) {
                                alert(data['error']);
                            } else {
                                alert('Whoops Something went wrong!!');
                            }
                        },
                        error: function (data) {
                            alert(data.responseText);
                        }
                    });


                  $.each(allVals, function( index, value ) {
                      $('table tr').filter("[data-row-id='" + value + "']").remove();
                  });
                }
            }
        });


        $('[data-toggle=confirmation]').confirmation({
            rootSelector: '[data-toggle=confirmation]',
            onConfirm: function (event, element) {
                element.trigger('confirm');
            }
        });


        $(document).on('confirm', function (e) {
            var ele = e.target;
            e.preventDefault();


            $.ajax({
                url: ele.href,
                type: 'DELETE',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function (data) {
                    if (data['success']) {
                        $("#" + data['tr']).slideUp("slow");
                        alert(data['success']);
                    } else if (data['error']) {
                        alert(data['error']);
                    } else {
                        alert('Whoops Something went wrong!!');
                    }
                },
                error: function (data) {
                    alert(data.responseText);
                }
            });


            return false;
        });
    });
</script>
@endsection
