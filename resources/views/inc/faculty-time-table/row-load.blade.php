@foreach($faculty_time_tables as $faculty_time_table)
  <tr>
    <td scope="row">{{ $loop->iteration }}</td>
    <td>
        <x-input.faculty :faculty_id="$faculty_time_table->faculty_id"/>
    </td>
    <td>
      <x-input.subject :subject_id="$faculty_time_table->subject_id"/>
    </td>

    <td>
      <x-input.session-date :date="$faculty_time_table->date ?? ''"/>
    </td>
    <td>
      <x-input.session-time :time="$faculty_time_table->session_start_time ?? ''"/>
    </td>
    <td>
      <x-input.duration :duration="$faculty_time_table->duration ?? ''" />
    </td>
    <td>
      {{-- <x-input.session-end-time :timeend ="$faculty_time_table->duration ?? ''"/> --}}
      <input type="number" class="time-end form-control" name="time" value="$faculty_time_table->duration ?? ''" placeholder="Enter time">
    </td>
    <td>
      <a href="" class="row-del btn btn-danger">Delete</a>
    </td>
  </tr>
@endforeach