@extends('admin.master.master')

@section('title')
Student List | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Student List</h4>

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



                <div class="row">
                    <div class="form-group col-md-4 col-sm-12">
                        <label for="password">Class Name</label>
                        <select name="class_id" class="form-control form-control-sm">
                            <option value="">Select Class</option>
                            @foreach ($class_details as $user_class_update)
                            <option value="{{ $user_class_update->name }}">{{ $user_class_update->name }}</option>

                            @endforeach
                        </select>
                    </div>


                    <div class="form-group col-md-4 col-sm-12">
                        <label for="password">Department Name</label>
                        <select name="department_id" class="form-control form-control-sm">

                        </select>
                    </div>

                    <div class="form-group col-md-4 col-sm-12">
                        <label for="password">Section Name</label>
                        <select name="section_id" class="form-control form-control-sm">

                        </select>
                    </div>


                    <div class="form-group col-md-12 col-sm-12" id="student_list">


                    </div>

                    <div class="col-lg-12 mt-3">
                        <div class="float-right d-none d-md-block">
                            <div class="form-group mb-4">
                                <div>
                                    <button type="submit"
                                        class="btn btn-primary btn-lg  waves-effect  btn-sm waves-light mr-1">
                                        Search
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>


            </div>
        </div>
    </div>
</div>



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
            confirmButtonText: 'Yes, Remove it!',
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
            url: "{{ route('department_search_name') }}",
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
            url: "{{ route('section_search_name') }}",
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
            url: "{{ route('dpsection_search_name') }}",
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
    $(document).ready(function () {
        $("select[name='section_id'").click(function () {

            var class_id = $("select[name='class_id'").val();
            var section_id = $(this).val();
            var department_id = $("select[name='department_id'").val();


            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{route('library_wise_student_view')}}",
                type: "POST",
                data: {
                    'class_id': class_id,
                    'section_id': section_id,
                    'department_id': department_id
                },
                //dataType:'json',
                success: function (data) {
                    console.log(data);
                    //  $("#subcategory_area").hide();
                    $('#student_list').html(data);
                },
                error: function () {
                    //  toastr.error("Something went Wrong, Please Try again.");
                }
            });

            //end ajax


        });

    });

</script>
@endsection
