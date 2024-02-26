


<div class="row mt-3" >
    <div class="form-group col-md-12 col-sm-12">
    <table class="table table-bordered  table-hover">
        <thead>
          <tr>
            <th scope="col">Roll Number</th>
            <th scope="col">Student Name</th>
            <th scope="col">Attendance</th>
            <th scope="col">Note</th>
          </tr>
        </thead>
        <tbody>
            @foreach($student_details as $key=>$new_details)
          <tr>
            <td scope="row">
                {{ $new_details->roll_number }}
                <input type="hidden" name="student_id[]" value="{{ $new_details->id }}" class="form-control form-control-sm"/>
                <input type="hidden" name="student_roll[]" value="{{ $new_details->roll_number }}" class="form-control form-control-sm" readonly/>

            </td>
            <td>
                {{ $new_details->first_name.' '.$new_details->last_name }}
                <input type="hidden" name="student_name[]" value="{{ $new_details->first_name.' '.$new_details->last_name }}" class="form-control form-control-sm" readonly/>
            </td>
            <td>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="present_status[]" type="checkbox" id="inlineCheckbox1" value="Present">
                    <label class="form-check-label" for="inlineCheckbox1">Present</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" name="present_status[]" type="checkbox" id="inlineCheckbox2" value="Late">
                    <label class="form-check-label" for="inlineCheckbox2">Late</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" name="present_status[]" type="checkbox" id="inlineCheckbox3" value="Absence">
                    <label class="form-check-label" for="inlineCheckbox3">Absence</label>
                  </div>


                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="present_status[]" id="inlineCheckbox3" value="Half Day">
                    <label class="form-check-label" for="inlineCheckbox3">Half Day</label>
                  </div>



            </td>
            <td><input type="text" name="note[]"  class="form-control form-control-sm"/></td>
          </tr>
          @endforeach
        </tbody>
      </table>




    </div>
</div>

