


<div class="row mt-3" >
    <div class="form-group col-md-12 col-sm-12">
    <table class="table table-bordered  table-hover">
        <thead>
          <tr>
            <th scope="col">Member Id</th>
            <th scope="col">Library Card No</th>

            <th scope="col">Student Name</th>
            <th scope="col">Class </th>
            <th scope="col">Father Name </th>
            <th scope="col">Date of Birth </th>
            <th scope="col">Gender</th>
            <th scope="col">Mobile Number</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($student_details as $key=>$new_details)
            @if($new_details->library_card_status == 1)

            <tr style="background-color: #dff0d8;">

                @else
                <tr>

                @endif
            <td scope="row">
                {{ $new_details->admission_no }}


            </td>
            <td>
                {{ $new_details->library_id }}

            </td>
            <td>

                {{ $new_details->first_name.''.$new_details->last_name }}



            </td>
            <td>{{ $new_details->class }}({{ $new_details->section }})</td>
            <td>
                {{ $new_details->father_name }}

            </td>
            <td>
                {{ date('d-m-Y', strtotime($new_details->date_of_birth))}}

            </td>
            <td>
                {{ $new_details->gender }}

            </td>
            <td>
                {{ $new_details->mobile_number }}

            </td>
            <td>
                @if($new_details->library_card_status == 0)
                @if (Auth::guard('admin')->user()->can('add_student_to_library'))
                <button type="button" data-bs-toggle="modal"
                    data-bs-target=".bs-example-modal-lg{{ $new_details->id }}"
                    class="btn btn-primary btn-sm waves-light waves-effect">
                    <i class="fas fa-plus"></i></button>

                <div class="modal fade bs-example-modal-lg{{ $new_details->id }}" tabindex="-1"
                    role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Library Card No</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close">
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('add_student_to_library_save') }}"
                                    method="POST" enctype="multipart/form-data">

                                    @csrf



                                    <div class="row ">
                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="name">Library Card No</label>
                                            <input type="text" class="form-control form-control-sm" id="name"  name="card_no" placeholder="Enter To Card Number">
                                            <input type="hidden" class="form-control form-control-sm" id="name" value="{{ $new_details->id }}" name="id" placeholder="Enter Name">

                                        </div>


                                    </div>









                                    <button type="submit"
                                        class="btn btn-primary mt-4 pr-4 pl-4">Add</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                @endif


@else


                @if (Auth::guard('admin')->user()->can('remove_student_to_library'))

                <button type="button" class="btn btn-danger btn-sm waves-light waves-effect"
                    onclick="deleteTag({{ $new_details->id}})" data-toggle="tooltip" title="Delete"><i
                        class="fas fa-trash-alt"></i></button>
                <form id="delete-form-{{ $new_details->id }}"
                    action="{{ route('remove_student_to_library_save',$new_details->id) }}" method="POST"
                    style="display: none;">
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

