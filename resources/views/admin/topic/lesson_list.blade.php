<option readonly vlaue="0">--- Select Lesson ---</option>


  @foreach($lesson_name_list as $value)
    <option value="{{ $value->lesson_name }}">{{ $value->lesson_name }}</option>
  @endforeach


