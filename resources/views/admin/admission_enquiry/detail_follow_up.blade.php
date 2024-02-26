<ul class="timeline"  >



    @foreach($states as $new_enquiry)
                                                                            <li>

                                                                                <a href="#" class="float-right">{{ date('d-m-Y', strtotime($new_enquiry->follow_up_date))}}</a>
                                                                                <h4>{{ $new_enquiry->creator_name }}</h4>
                                                                                <h5>{{ $new_enquiry->response }}</h5>
                                                                                <h6>{{ $new_enquiry->note }}</h6>
                                                                            </li>
@endforeach



</ul>
