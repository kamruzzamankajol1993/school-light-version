<option readonly value="0">--- Select Department ---</option>
@if(!empty($states))
  @foreach($states as $value)
    <option value="{{ $value->name }}">{{ $value->name }}</option>
  @endforeach
@endif
