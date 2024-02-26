<div class="col-12">
    <div class="card">
        <div class="card-body">
            @include('flash_message')
            <div class="table-responsive">
                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Admission No</th>
                            <th>Student Name</th>
                            <th>Class</th>
                            <th>Section</th>
                            <th>Gender</th>
                            <th>Current Email</th>
                            <th>Current Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
@foreach($student_list as $all_search_list)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $all_search_list->admission_no }}</td>
                            <td>{{ $all_search_list->first_name.''.$all_search_list->last_name }}</td>
                            <td>{{ $all_search_list->class }}</td>
                            <td>{{ $all_search_list->section }}</td>
                            <td>{{ $all_search_list->gender }}</td>
                            <td>{{ $all_search_list->email }}</td>
                            <td>{{ $all_search_list->mobile_number }}</td>
                            <td>@if (Auth::guard('admin')->user()->can('student_view'))

                                <a type="button" href="{{ route('collect_fee_list',$all_search_list->id) }}"
                                    class="btn btn-success waves-light waves-effect  btn-sm" >
                                    <i class="fas fa-eye"></i></a>

                                @endif</td>
                        </tr>

                @endforeach
                    </tbody>


                </table>
            </div>
        </div>
    </div>
</div> <!-- end col -->
