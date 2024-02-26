
@if(!empty($states))
  @foreach($states as $value)
  <div class="form-check">

    <input class="form-check-input" type="checkbox" name="section_id[]" value="{{ $value->name }}" id="defaultCheck{{ $value->id }}">
  <label class="form-check-label" for="defaultCheck{{ $value->id }}">
    {{ $value->name }}
  </label>
  </div>

  @endforeach
@endif
