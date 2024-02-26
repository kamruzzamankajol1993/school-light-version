@extends('admin.master.master')

@section('title')
Custome Field| {{ $ins_name }}
@endsection


@section('body')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Custome Field</h4>

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


<div class="col-sm-6">
    <div class="">
        <div class="dropdown">
        @if (Auth::guard('admin')->user()->can('cusf_add'))
            <button class="btn btn-primary waves-light waves-effect  btn-sm" type="button" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                <i class="uil-plus  mr-2"></i> Add New Field
            </button>

            <a  href="{{ route('drag_drop_custome_field') }}" class="btn btn-success waves-light waves-effect  btn-sm" type="button" >
                <i class="uil-grid mr-2"></i> Drag & Drop  Field
            </a>


            <a  href="{{ route('drag_drop_custome_field_staff') }}" class="btn btn-info waves-light waves-effect  btn-sm" type="button" >
                <i class="uil-grid mr-2"></i> Drag & Drop  Staff Field
            </a>
@endif
        </div>
    </div>
</div>
</div>
<div class="row mt-2">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                @include('flash_message')


                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Field Type</th>
                        <th>Field Name</th>
                        <th>Required Field</th>
                        <th>Visibility</th>
                        <th>Active</th>
                    </tr>
                    </thead>


                    <tbody>
                        @foreach($custome_filed_list as $new_custome_field)
                    <tr>
                        <td>


                            @if($new_custome_field->belongs_to == 1)
<span class="badge bg-success">Student</span>

                            @else
                            <span class="badge bg-info">Staff</span>
                        @endif

                        </td>
                        <td>{{ $new_custome_field->field_type }}</td>
                        <td>{{ $new_custome_field->field_name }}</td>
                        <td> @if($new_custome_field->validation == 1)
                            <span class="badge bg-success">Active</span>

                                                        @else
                                                        <span class="badge bg-danger">Inactive</span>
                                                    @endif
                                                    </td>
                        <td>

                            @if($new_custome_field->visibility == 1)
                            <span class="badge bg-success">Active</span>

                                                        @else
                                                        <span class="badge bg-danger">Inactive</span>
                                                    @endif

                        </td>
<td>

    @if (Auth::guard('admin')->user()->can('cusf_update'))

    <button type="button"  data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg{{ $new_custome_field->id }}"
        class="btn btn-primary waves-light waves-effect  btn-sm" >
        <i class="fas fa-pencil-alt"></i></button>

        <!--  Large modal example -->
        <div class="modal fade bs-example-modal-lg{{ $new_custome_field->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myLargeModalLabel">Update Custome Field Information</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.custome_field.update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class=" mb-3">
                                        <label for="password">Belongs To</label>
                                        <select class="form-control form-control-sm"  name="belongs_to" >
                                          <option value=""><---Please Select ---></option>
                          <option value="1" {{ $new_custome_field->belongs_to == 1 ? 'selected' : '' }} >Student</option>
                          <option value="0" {{ $new_custome_field->belongs_to == 0 ? 'selected' : '' }}>Staff</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class=" mb-3">
                                        <label for="password">Group</label>
                                        <select class="form-control form-control-sm"  name="field_group" >
                                          <option value=""><---Please Select ---></option>
                                            <option value="Basic information" {{ $new_custome_field->field_group == 'Basic information' ? 'selected' : '' }} >Basic information</option>
                                            <option value="Payroll" {{ $new_custome_field->field_group == 'Payroll' ? 'selected' : '' }} >Payroll</option>
                                            <option value="Leaves" {{ $new_custome_field->field_group == 'Leaves' ? 'selected' : '' }} >Leaves</option>
                                            <option value="Bank Account Details" {{ $new_custome_field->field_group == 'Bank Account Details' ? 'selected' : '' }} >Bank Account Details</option>
                                            <option value="Social Media Link"  {{ $new_custome_field->field_group == 'Social Media Link' ? 'selected' : '' }}>Social Media Link</option>

                          <option value="Student information" {{ $new_custome_field->field_group == 'Student information' ? 'selected' : '' }} >Student information</option>
                          <option value="Parent Guardian Detail" {{ $new_custome_field->field_group == 'Parent Guardian Detail' ? 'selected' : '' }}>Parent Guardian Detail</option>
                          <option value="Student Address Details" {{ $new_custome_field->field_group == 'Student Address Details' ? 'selected' : '' }}>Student Address Details</option>
                          <option value="Transport Details" {{ $new_custome_field->field_group == 'Transport Details' ? 'selected' : '' }}>Transport Details</option>
                          <option value="Hostel Details" {{ $new_custome_field->field_group == 'Hostel Details' ? 'selected' : '' }}>Hostel Details</option>
                          <option value="Sibling Details" {{ $new_custome_field->field_group == 'Sibling Details' ? 'selected' : '' }}>Sibling Details</option>
                          <option value="Miscellaneous Details" {{ $new_custome_field->field_group == 'Miscellaneous Details' ? 'selected' : '' }}>Miscellaneous Details</option>
                          <option value="Upload Documents" {{ $new_custome_field->field_group == 'Upload Documents' ? 'selected' : '' }}>Upload Documents</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="password">Field Type</label>
                                        @if($new_custome_field->field_name == 'Category' || $new_custome_field->field_name == 'Class' || $new_custome_field->field_name == 'Section' || $new_custome_field->field_name == 'Gender' || $new_custome_field->field_name == 'Blood Group' || $new_custome_field->field_name == 'Student House')

                                        <input type="text" class="form-control form-control-sm" value="{{ $new_custome_field->field_type }}"  name="field_type" placeholder="Enter Field Name" readonly>
                                        @else
                                        <select class="form-control form-control-sm "  name="field_type" id="nn{{ $new_custome_field->id }}">
                                          <option value=""><---Please Select ---></option>
                                            <option value="text" {{ $new_custome_field->field_type == 'text' ? 'selected' : '' }}>Input</option>

                                            <option value="number" {{ $new_custome_field->field_type == 'number' ? 'selected' : '' }}>Number</option>
                                            <option value="file" {{ $new_custome_field->field_type == 'file' ? 'selected' : '' }} >File</option>
                                            <option value="email" {{ $new_custome_field->field_type == 'email' ? 'selected' : '' }}>Email</option>

                                            <option value="textarea" {{ $new_custome_field->field_type == 'textarea' ? 'selected' : '' }}>Textarea</option>

                                            <option value="select" {{ $new_custome_field->field_type == 'select' ? 'selected' : '' }}>Select</option>

                                            <option value="checkbox" {{ $new_custome_field->field_type == 'checkbox' ? 'selected' : '' }}>Checkbox</option>

                                            <option value="radio" {{ $new_custome_field->field_type == 'radio' ? 'selected' : '' }}>Radio</option>

                                            <option value="date" {{ $new_custome_field->field_type == 'date' ? 'selected' : '' }}>Date </option>
                                        </select>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="password">Field Name</label>
                                        @if($new_custome_field->field_name == 'Category' || $new_custome_field->field_name == 'Class' || $new_custome_field->field_name == 'Section' || $new_custome_field->field_name == 'Gender' || $new_custome_field->field_name == 'Blood Group' || $new_custome_field->field_name == 'Student House')
                                        <input type="text" class="form-control form-control-sm" value="{{ $new_custome_field->field_name }}"  name="field_name" placeholder="Enter Field Name" readonly>
                                        @else
                                        <input type="text" class="form-control form-control-sm" value="{{ $new_custome_field->field_name }}"  name="field_name" placeholder="Enter Field Name">
                                        @endif
                                        <input type="hidden" class="form-control form-control-sm" value="{{ $new_custome_field->id }}"  name="id" placeholder="Enter Field Name">
                                    </div>
                                </div>

                                @if($new_custome_field->field_type == 'select' || $new_custome_field->field_type == 'radio' || $new_custome_field->field_type == 'checkbox')

                                <div class="col-md-12" id="showcontent1{{ $new_custome_field->id }}" >
                                    <div class="mb-3">
                                        <label for="password">Field Values (Separate By Comma)</label>
                                        <input type="text" class="form-control form-control-sm" value="{{$new_custome_field->field_value }}"  name="field_value" placeholder="Enter Field Name">
                                    </div>
                                </div>
                                @else

                                <div class="col-md-12" id="showcontent1{{ $new_custome_field->id }}" style="display: none;">
                                    <div class="mb-3">
                                        <label for="password">Field Values (Separate By Comma)</label>
                                        <input type="text" class="form-control form-control-sm"  name="field_value" placeholder="Enter Field Name">
                                    </div>
                                </div>

@endif
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="password">Required Field</label>
                                        <select class="form-control form-control-sm"  name="validation" >

                                            <option value=""><---Please Select ---></option>
                            <option value="1" {{ $new_custome_field->validation == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ $new_custome_field->validation == 0 ? 'selected' : '' }}>Inactive</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="password">Visibility</label>
                                        <select class="form-control form-control-sm"  name="visibility" >
                                            <option value=""><---Please Select ---></option>
                            <option value="1" {{ $new_custome_field->visibility == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ $new_custome_field->visibility == 0 ? 'selected' : '' }}>Inactive</option>
                                          </select>
                                    </div>
                                </div>

                            </div>

                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary w-md">Update</button>
                            </div>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->




    @endif

    @if (Auth::guard('admin')->user()->can('cusf_delete'))
    @if($new_custome_field->field_name == 'Category' || $new_custome_field->field_name == 'Class' || $new_custome_field->field_name == 'Section' || $new_custome_field->field_name == 'Gender' || $new_custome_field->field_name == 'Blood Group' || $new_custome_field->field_name == 'Student House')

    @else
    <button   type="button" class="btn btn-danger waves-light waves-effect  btn-sm" onclick="deleteTag({{ $new_custome_field->id}})" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
    <form id="delete-form-{{ $new_custome_field->id }}" action="{{ route('admin.custome_field.delete',$new_custome_field->id) }}" method="POST" style="display: none;">
      @method('DELETE')
                                    @csrf

                                </form>
        @endif
    @endif
</td>
                    </tr>
@endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

 <!--  Large modal example -->
 <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Add New Field</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">

                <form action="{{ route('admin.custome_field.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class=" mb-3">
                                <label for="password">Belongs To</label>
                                <select class="form-control form-control-sm"  name="belongs_to" >
                                  <option value=""><---Please Select ---></option>
                  <option value="1">Student</option>
                  <option value="0">Staff</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class=" mb-3">
                                <label for="password">Group</label>
                                <select class="form-control form-control-sm"  name="field_group" >
                                  <option value=""><---Please Select ---></option>
                                    <option value="Basic information"  >Basic information</option>
                                    <option value="Payroll"  >Payroll</option>
                                    <option value="Leaves"  >Leaves</option>
                                    <option value="Bank Account Details"  >Bank Account Details</option>
                                    <option value="Social Media Link"  >Social Media Link</option>

                  <option value="Student information"  >Student information</option>
                  <option value="Parent Guardian Detail" >Parent Guardian Detail</option>
                  <option value="Student Address Details" >Student Address Details</option>
                  <option value="Transport Details" >Transport Details</option>
                  <option value="Hostel Details" >Hostel Details</option>
                  <option value="Sibling Details" >Sibling Details</option>
                  <option value="Miscellaneous Details" >Miscellaneous Details</option>
                  <option value="Upload Documents" >Upload Documents</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="password">Field Type</label>
                                <select class="form-control form-control-sm "  name="field_type" >
                                  <option value=""><---Please Select ---></option>
                                    <option value="text">Input</option>

                                    <option value="number">Number</option>

                                    <option value="email" >Email</option>

                                    <option value="file" >File</option>


                                    <option value="textarea">Textarea</option>

                                    <option value="select">Select</option>

                                    <option value="checkbox">Checkbox</option>

                                    <option value="radio">Radio</option>

                                    <option value="date">Date </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="password">Field Name</label>
                                <input type="text" class="form-control form-control-sm"  name="field_name" placeholder="Enter Field Name">
                            </div>
                        </div>
                        <div class="col-md-12" id="showcontent_add" style="display: none;">
                            <div class="mb-3">
                                <label for="password">Field Values (Separate By Comma)</label>
                                <input type="text" class="form-control form-control-sm"  name="field_value" placeholder="Enter Field Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="password">Required Field</label>
                                <select class="form-control form-control-sm"  name="validation" >

                                    <option value=""><---Please Select ---></option>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                                  </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="password">Visibility</label>
                                <select class="form-control form-control-sm"  name="visibility" >
                                    <option value=""><---Please Select ---></option>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                                  </select>
                            </div>
                        </div>

                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary w-md">Submit</button>
                    </div>
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


$("select[name='field_type']").change(function(){

    console.log(1);
    if ($(this).val() == 'select'|| $(this).val() == 'checkbox' || $(this).val() == 'radio') {
    $('#showcontent_add').show();
  } else {
    $('#showcontent_add').hide();
  }


});


$("[id^=nn]").change(function(){


    var id_select = $(this).attr('id');
    var last_two_id = id_select.slice(2);
    console.log(last_two_id);


if ($(this).val() == 'select'|| $(this).val() == 'checkbox' || $(this).val() == 'radio') {
$('#showcontent1'+last_two_id).show();
} else {
$('#showcontent1'+last_two_id).hide();
}


});

</script>
@endsection
