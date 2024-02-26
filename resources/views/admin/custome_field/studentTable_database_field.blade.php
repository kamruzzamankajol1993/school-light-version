@extends('admin.master.master')

@section('title')
Student Table column Update| {{ $ins_name }}
@endsection


@section('body')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0"> Table column Update</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">{{ $ins_name }} </a></li> --}}
                    <li class="breadcrumb-item active">{{ $ins_name }} </li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">


<div class="col-sm-12">
    <div class="">
        <div class="dropdown">

        </div>
    </div>
</div>
</div>
<div class="row mt-2">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                @include('flash_message')
   <!-- Nav tabs -->
   <ul class="nav nav-pills nav-justified bg-light" role="tablist">
    <li class="nav-item waves-effect  btn-sm waves-light">
        <a class="nav-link active" data-bs-toggle="tab" href="#navpills2-home"
            role="tab">
            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
            <span class="d-none d-sm-block">Student</span>
        </a>
    </li>
    <li class="nav-item waves-effect  btn-sm waves-light">
        <a class="nav-link" data-bs-toggle="tab" href="#navpills2-profile" role="tab">
            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
            <span class="d-none d-sm-block">Staff</span>
        </a>
    </li>

</ul>

<!-- Tab panes -->
<div class="tab-content p-3 text-muted">
    <div class="tab-pane active" id="navpills2-home" role="tabpanel">
<form method="post" action="{{ route('admin.studentTable_database_field_update') }}">
    @csrf
        <div class="row">
            <table class="table table-striped table-bordered dt-responsive nowrap">
                <tr>
                <th>Name</th>
                <th>Colomn Name</th>

                </tr>
                @foreach($student_field_list as $new_staff_student)
                <tr>
                 <td>{{ $new_staff_student->field_name }}</td>
                 <td >
                    <input type="hidden"   name="id[]" value="{{ $new_staff_student->id }}" />


                    <li id="checkboxlist" class="list-group-item card">
                        <div class="checkbox checkbox-inline">
                            <label><input type="checkbox" name="tb_data[]" value="1" id="checkbox1" {{ $new_staff_student->tb_data == 1 ? 'checked' : '' }}>Show</label>
                            <label><input type="checkbox"name="tb_data[]" value="0" id="checkbox2" {{ $new_staff_student->tb_data == 0 ? 'checked' : '' }}>Hide</label>
                        </div>
                        </li>

                        {{-- <input type="checkbox" name="visibility[]" value="1" class="form-check-input" id="nn{{ $new_staff_student->id }}" {{ $new_staff_student->visibility == 1 ? 'checked' : '' }}/>

                        <label class="form-check-label" for="formCheck1">
                          Show
                        </label>

                        <input type="checkbox" name="visibility[]" value="0" class="form-check-input" id="nn{{ $new_staff_student->id }}" {{ $new_staff_student->visibility == 0 ? 'checked' : '' }}/>

                        <label class="form-check-label" for="formCheck1">
                          Hide
                        </label> --}}



                 </td>

                </tr>
                @endforeach
            </table>

    </div>
    <div class="mt-4">
        <button type="submit" class="btn btn-primary w-md">Update</button>
    </div>
</form>
    </div>
    <div class="tab-pane" id="navpills2-profile" role="tabpanel">
        <form method="post" action="{{ route('admin.studentTable_database_field_update') }}">
            @csrf
        <div class="row">
            <table class="table table-striped table-bordered dt-responsive nowrap">
                <tr>
                <th>Name</th>
                <th>Colomn Name</th>
                </tr>
                @foreach($staff_field_list as $new_staff_student)
                <tr>
                    <td>{{ $new_staff_student->field_name }}</td>
                    <td >
                       <input type="hidden"   name="id[]" value="{{ $new_staff_student->id }}" />


                       <li id="checkboxlist" class="list-group-item card">
                           <div class="checkbox checkbox-inline">
                               <label><input type="checkbox" name="tb_data[]" value="1" id="checkbox1" {{ $new_staff_student->tb_data == 1 ? 'checked' : '' }}>Show</label>
                               <label><input type="checkbox"name="tb_data[]" value="0" id="checkbox2" {{ $new_staff_student->tb_data == 0 ? 'checked' : '' }}>Hide</label>
                           </div>
                           </li>

                           {{-- <input type="checkbox" name="visibility[]" value="1" class="form-check-input" id="nn{{ $new_staff_student->id }}" {{ $new_staff_student->visibility == 1 ? 'checked' : '' }}/>

                           <label class="form-check-label" for="formCheck1">
                             Show
                           </label>

                           <input type="checkbox" name="visibility[]" value="0" class="form-check-input" id="nn{{ $new_staff_student->id }}" {{ $new_staff_student->visibility == 0 ? 'checked' : '' }}/>

                           <label class="form-check-label" for="formCheck1">
                             Hide
                           </label> --}}



                    </td>

                   </tr>
                @endforeach
            </table>
        </div>
        <div class="mt-4">
            <button type="submit" class="btn btn-primary w-md">Update</button>
        </div>
        </form>
    </div>

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
$(document).ready(function() {

    $(".list-group-item").each(function (i, li) {
        var currentli = $(li);
        $(currentli).find("#checkbox1").on('change', function () {
            $(currentli).find("#checkbox2").not(this).prop('checked',false);
        });

        $(currentli).find("#checkbox2").on('change', function () {
            $(currentli).find("#checkbox1").not(this).prop('checked', false);
        });
    });


    $(".list-group-item1").each(function (i, li) {
        var currentli = $(li);
        $(currentli).find("#checkbox2").on('change', function () {
            $(currentli).find("#checkbox3").not(this).prop('checked',false);
        });

        $(currentli).find("#checkbox3").on('change', function () {
            $(currentli).find("#checkbox2").not(this).prop('checked', false);
        });
    });

$("[id^=nn]").change(function(){


    var id_select = $(this).attr('id');
    var last_two_id = id_select.slice(2);
    console.log(last_two_id);


    $('#nn'+last_two_id).not(this).prop('checked', false);

});
});
</script>
@endsection
