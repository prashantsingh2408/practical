<select class="form-control" name="subject_id">
      @foreach($subjects as $subject)
      <option value="{{ $subject->id }}"
              @if($subject->id == $subject_id)
                 selected
              @endif
              >{{ $subject->subject_name }}</option>
      @endforeach
    </select>