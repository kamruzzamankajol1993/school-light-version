

    <div class="row mt-2">

        <div class="col-md-2" style="border: 1px solid #4277b7;
        padding: 5px;
        margin-bottom: 10px;
        background: #f7f7f7;">
            <h6 class="text-center">Saturday</h6>


        </div>

        <div class="col-md-2" style="border: 1px solid #4277b7;
        padding: 5px;
        margin-bottom: 10px;
        background: #f7f7f7;">
            <h6 class="text-center">Sunday</h6>
        </div>

        <div class="col-md-2" style="border: 1px solid #4277b7;
        padding: 5px;
        margin-bottom: 10px;
        background: #f7f7f7;">
            <h6 class="text-center">Monday</h6>
        </div>

        <div class="col-md-2" style="border: 1px solid #4277b7;
        padding: 5px;
        margin-bottom: 10px;
        background: #f7f7f7;">
            <h6 class="text-center">Tuesday</h6>
        </div>


        <div class="col-md-2" style="border: 1px solid #4277b7;
        padding: 5px;
        margin-bottom: 10px;
        background: #f7f7f7;">
            <h6 class="text-center">Wednesday</h6>
        </div>

        <div class="col-md-2" style="border: 1px solid #4277b7;
        padding: 5px;
        margin-bottom: 10px;
        background: #f7f7f7;">
            <h6 class="text-center">Thursday</h6>
        </div>


    </div>
    <div class="row">

        <div class="col-md-2" style="">


            @if(empty($saturday_class))

    Not Scheduled
            @else

            @foreach($saturday_class as $new_saturday)

            <?php  $teacher_name = DB::table('teachers')->where('id',$new_saturday->teacher_id)->value('name'); ?>
            <div style="border: 1px solid #f4f4f4;
            padding: 5px;
            margin-bottom: 10px;
            background: #f7f7f7;" class="text-center text-success">
     <h6>{{ $new_saturday->subject_id }}</h6>
     <h6>{{ $new_saturday->date }}</h6>
     <h6>{{ $new_saturday->room }}</h6>

     @if($new_saturday->teacher_id == 0)
     <h6>Class Teacher</h6>
     @else
     <h6>{{ $teacher_name }}</h6>
    @endif
            </div>
            @endforeach

            @endif
        </div>

        <div class="col-md-2" style="">
            @if(empty($sunday_class))

            Not Scheduled
                    @else

                    @foreach($sunday_class as $new_saturday)

                    <?php  $teacher_name = DB::table('teachers')->where('id',$new_saturday->teacher_id)->value('name'); ?>
                    <div style="border: 1px solid #f4f4f4;
                    padding: 5px;
                    margin-bottom: 10px;
                    background: #f7f7f7;" class="text-center text-success">
             <h6>{{ $new_saturday->subject_id }}</h6>
             <h6>{{ $new_saturday->date }}</h6>
             <h6>{{ $new_saturday->room }}</h6>
             @if($new_saturday->teacher_id == 0)
             <h6>Class Teacher</h6>
             @else
             <h6>{{ $teacher_name }}</h6>
            @endif

                    </div>
                    @endforeach

                    @endif
        </div>

        <div class="col-md-2" style="">
            @if(empty($monday_class))

            Not Scheduled
                    @else

                    @foreach($monday_class as $new_saturday)

                    <?php  $teacher_name = DB::table('teachers')->where('id',$new_saturday->teacher_id)->value('name'); ?>
                    <div style="border: 1px solid #f4f4f4;
                    padding: 5px;
                    margin-bottom: 10px;
                    background: #f7f7f7;" class="text-center text-success">
             <h6>{{ $new_saturday->subject_id }}</h6>
             <h6>{{ $new_saturday->date }}</h6>
             <h6>{{ $new_saturday->room }}</h6>
             @if($new_saturday->teacher_id == 0)
             <h6>Class Teacher</h6>
             @else
             <h6>{{ $teacher_name }}</h6>
            @endif

                    </div>
                    @endforeach

                    @endif
        </div>

        <div class="col-md-2" style="">
             @if(empty($tuesday_class))

             Not Scheduled
                     @else



                     @foreach($tuesday_class as $new_saturday)
                     <?php  $teacher_name = DB::table('teachers')->where('id',$new_saturday->teacher_id)->value('name'); ?>
                     <div style="border: 1px solid #f4f4f4;
                     padding: 5px;
                     margin-bottom: 10px;
                     background: #f7f7f7;" class="text-center text-success">
              <h6>{{ $new_saturday->subject_id }}</h6>
              <h6>{{ $new_saturday->date }}</h6>
              <h6>{{ $new_saturday->room }}</h6>
              @if($new_saturday->teacher_id == 0)
              <h6>Class Teacher</h6>
              @else
              <h6>{{ $teacher_name }}</h6>
             @endif

                     </div>
                     @endforeach

                     @endif
        </div>


        <div class="col-md-2" style="">
             @if(empty($wednesday_class))

             Not Scheduled
                     @else

                     @foreach($wednesday_class as $new_saturday)

                     <?php  $teacher_name = DB::table('teachers')->where('id',$new_saturday->teacher_id)->value('name'); ?>
                     <div style="border: 1px solid #f4f4f4;
                     padding: 5px;
                     margin-bottom: 10px;
                     background: #f7f7f7;" class="text-center text-success">
              <h6>{{ $new_saturday->subject_id }}</h6>
              <h6>{{ $new_saturday->date }}</h6>
              <h6>{{ $new_saturday->room }}</h6>
              @if($new_saturday->teacher_id == 0)
              <h6>Class Teacher</h6>
              @else
              <h6>{{ $teacher_name }}</h6>
             @endif

                     </div>
                     @endforeach

                     @endif
        </div>

        <div class="col-md-2" style="">
             @if(empty($thursday_class))

             Not Scheduled
                     @else

                     @foreach($thursday_class as $new_saturday)

                     <?php  $teacher_name = DB::table('teachers')->where('id',$new_saturday->teacher_id)->value('name'); ?>
            <div style="border: 1px solid #f4f4f4;
            padding: 5px;
            margin-bottom: 10px;
            background: #f7f7f7;" class="text-center text-success">
     <h6>{{ $new_saturday->subject_id }}</h6>
     <h6>{{ $new_saturday->date }}</h6>
     <h6>{{ $new_saturday->room }}</h6>
     @if($new_saturday->teacher_id == 0)
     <h6>Class Teacher</h6>
     @else
     <h6>{{ $teacher_name }}</h6>
    @endif

            </div>
                     @endforeach

                     @endif
        </div>


    </div>
