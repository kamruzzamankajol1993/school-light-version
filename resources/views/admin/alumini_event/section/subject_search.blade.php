<option readonly value="0">--- Select Subject ---</option>
@if(!empty($states))
  @foreach($states as $value)
    <option value="{{ $value->id }}">{{ $value->name }}</option>
  @endforeach
   <option value="all">All</option>
@endif