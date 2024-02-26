<option readonly value="not available">--- Select User ---</option>
@if(!empty($states))
  @foreach($states as $value)
    <option value="{{ $value->id }}">{{ $value->name }}</option>
  @endforeach
@endif
