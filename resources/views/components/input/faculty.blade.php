<select class="form-control" name="faculty_id">
      @foreach($faculties as $faculty)
      <option value="{{ $loop->iteration }}" 
              @if($faculty->name == $faculty_name)
                 selected 
              @endif
          >
          {{ $faculty->name }}
      </option>
      @endforeach
    </select>