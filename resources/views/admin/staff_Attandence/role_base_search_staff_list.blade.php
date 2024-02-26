@if(count($role_base_search_staff_list) == 0)

<div class="alert alert-danger" role="alert">
    No Data Avaiable
  </div>
@else

 <form class="custom-validation" action="{{ route('admin.staff_attandance.update') }}" method="post" enctype="multipart/form-data">
    @csrf
<div class="row mt-3" >
    <div class=" col-sm-3">
        <input type="date" name="date" value="{{ $date }}" class="form-control form-control-sm"/>
        <input type="hidden" name="date_old" value="{{ $date }}" class="form-control form-control-sm"/>
        <input type="hidden" name="role_id" value="{{ $role_id }}" class="form-control form-control-sm"/>

      </div>
      <div class=" col-sm-3">
        <button class="btn btn-warning waves-effect  btn-sm waves-light"  type="submit">
            <i class="fas fa-pencil-alt"></i>
        </button>
      </div>
    </div>
    <div class="form-group col-md-12 col-sm-12 mt-2">
        <table class="table table-bordered  table-hover">
            <thead>
              <tr>
                <th scope="col">Staff id</th>
                <th scope="col">Staff Name</th>
                <th scope="col">Role Name</th>
                <th scope="col">Attendance</th>
                <th scope="col">Note</th>
              </tr>
            </thead>
            <tbody>
                @foreach($role_base_search_staff_list as $key=>$new_details)
              <tr>
                <td scope="row">
                    {{ $new_details->staff_id }}
                    <input type="hidden" name="staff_main_id[]" value="{{ $new_details->id }}" class="form-control form-control-sm"/>
                    <input type="hidden" name="staff_id[]" value="{{ $new_details->staff_id }}" class="form-control form-control-sm" readonly/>

                </td>
                <td>
                    {{ $new_details->name }}
                    <input type="hidden" name="name[]" value="{{ $new_details->name}}" class="form-control form-control-sm" readonly/>
                </td>

                <td>
                    {{ $new_details->role}}
                    <input type="hidden" name="role[]" value="{{ $new_details->role }}" class="form-control form-control-sm" readonly/>
                </td>
                <td>

                    <div class="form-check form-check-inline">

                        @if($new_details->attandences == 'Present')
                        <input class="form-check-input" name="present_status[]" type="checkbox" id="inlineCheckbox1" value="Present" checked>
                        @else
                        <input class="form-check-input" name="present_status[]" type="checkbox" id="inlineCheckbox1" value="Present">
    @endif

                        <label class="form-check-label" for="inlineCheckbox1">Present</label>
                      </div>
                      <div class="form-check form-check-inline">

                        @if($new_details->attandences == 'Late')
                        <input class="form-check-input" name="present_status[]" type="checkbox" id="inlineCheckbox1" value="Late" checked>
                        @else
                        <input class="form-check-input" name="present_status[]" type="checkbox" id="inlineCheckbox2" value="Late">
                        @endif
                        <label class="form-check-label" for="inlineCheckbox2">Late</label>
                      </div>

                      <div class="form-check form-check-inline">
                        @if($new_details->attandences == 'Absence')
                        <input class="form-check-input" name="present_status[]" type="checkbox" id="inlineCheckbox1" value="Absence" checked>
                        @else
                        <input class="form-check-input" name="present_status[]" type="checkbox" id="inlineCheckbox3" value="Absence">
                        @endif
                        <label class="form-check-label" for="inlineCheckbox3">Absence</label>
                      </div>


                      <div class="form-check form-check-inline">
                        @if($new_details->attandences == 'Half Day')
                        <input class="form-check-input" name="present_status[]" type="checkbox" id="inlineCheckbox1" value="Half Day" checked>
                        @else
                        <input class="form-check-input" type="checkbox" name="present_status[]" id="inlineCheckbox3" value="Half Day">
                        @endif
                        <label class="form-check-label" for="inlineCheckbox3">Half Day</label>
                      </div>



                </td>
                <td><input type="text" name="note[]" value="{{ $new_details->note }}" class="form-control form-control-sm"/></td>
              </tr>
              @endforeach
            </tbody>
          </table>




    </div>
</div>

 </form>

 @endif
