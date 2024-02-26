<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Result information</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{ asset('/') }}public/admin/dist/icon1.png" rel="shortcut icon"/>
        <!-- Place favicon.ico in the root directory -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-2">
    				<img src="{{ asset('/') }}{{$ins_details->logo}}" style="height: 226px;">
    			</div>
    			<div class="col-md-8 mt-3">
    				<center>
    					
    					<h3 style="color:#222844;"><b>{{$ins_details->name}}</b></h3>
    					<h6 style="color:#E30000;"><b>Goverment Approved</b></h6>
    					<h6><b>EIIN: {{$ins_details->code}}</b></h6>
    					<h6><b> {{$ins_details->address}} ,Mobile: {{$ins_details->phone}}</b></h6>
    					<h6><b>Email: {{$ins_details->email}}</b></h6>
    				</center>
    			</div>
    			<div class="col-md-2"></div>
    		</div>
    	</div>
        <hr><br>
        <div class="container">
        	<div class="row">
        		<div class="col-md-6">
        			<h5 style="font-size: 15px;"><b >Name:</b> {{$student_details->student_name}}</h5>
        		</div>
        		<div class="col-md-6">
        			<h5 style="font-size: 15px;"><b >Roll:</b> {{$student_details->student_roll}}</h5>
        		</div>
        		<div class="col-md-6 mt-3">
        			<h5 style="font-size: 15px;"><b >Class:</b> {{ $class_name }}</h5>
        		</div>

        		<div class="col-md-6 mt-3">
        			<h5 style="font-size: 15px;"><b >Exam Name:</b> {{ $exam_details->exam_name}}</h5>
        		</div>
<div class="col-md-6 mt-3">
        			<h5 style="font-size: 15px;"><b >Section:</b> {{ $section_name }}</h5>
        		</div>
                @if(empty($department_name))

                @else
        		<div class="col-md-6 mt-3">
        			<h5 style="font-size: 15px;"><b >Department:</b> {{ $department_name }}</h5>
        		</div>
                @endif
        		<div class="col-md-6  mt-3">
        	
<h5 style="font-size: 15px;"><b >Total GPA:</b>  {{$avg_gpa}}</h5>

        		</div>

        		<div class="col-md-6 mt-3">
        			<h5 style="font-size: 15px;"><b >Total Mark: {{$total_mark}}</b> </h5>
        		</div>

        	</div>
        </div>
        <br><br>
        <div class="container">
        	<div class="row">
        		<div class="col-md-12">
        			<table class="table table-bordered table-striped">
  <tr style="font-size: 13px;">
                  <th id="b">Subject Name</th>
                
                  <th id="b">Written Mark</th>
                  <th id="b">Mcq Mark</th>
                  <th id="b">Practical Mark</th>
                   <th id="b">Total Mark</th>
                  <th id="b">Letter Grade </th>
                  <th id="b">Grade Point</th>
  </tr>
      

@foreach($result_details as $new_result)
                  <tr>
                   <td>
                       
                        @foreach ($subject_details as $dp_class)

                                    @if($new_result->subject_id == $dp_class->id)


                                    {{ $dp_class->name }}

                                        @endif
                                    @endforeach
                   </td>
                  
<td>{{$new_result->written_exam}}</td>
<td>{{$new_result->mcq_exam}}</td>
<td>{{$new_result->prac_exam}}</td>
<td>{{$new_result->main_total}}</td>
<td>{{$new_result->grade_letter}}</td>
<td>{{$new_result->grade_point}}</td>

                  </tr>


                @endforeach
</tbody>
                
</table>
        		</div>
        	</div>
        </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="container">
        	<div class="row">
        	    	<div class="col-md-4">
        			<center>
        				<h6><b>
        				
        				</b></h6>
        				<h6><b>
        					
        				</b></h6>
        			</center>
        		</div>

        		<div class="col-md-4">

        		</div>
        			<div class="col-md-4">
        			<center>
        				<h6><b>
        					Principal
        				</b></h6>
        				<h6><b>
        					{{$ins_details->name}}
        				</b></h6>
        			</center>
        		</div>

        	</div>
        </div>

        <!-- Add your site or application content here -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>

