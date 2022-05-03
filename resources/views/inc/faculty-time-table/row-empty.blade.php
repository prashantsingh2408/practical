<tr id='tr_empty'>
  <td scope="row"></td>
  <td>
        <x-input.faculty/>
    </td>
    <td>
      <x-input.subject/>
    </td>

    <td>
      <x-input.session-date/>
    </td>
    <td>
      <x-input.session-time/>
    </td>
    <td>
      <x-input.duration :duration="$faculty_time_table->duration ?? ''" />
    </td>
    <td>
      <x-input.session-end-time/>
    </td>
  <td>
    <a  href="" class="row-add btn btn-primary">Add</a>
    <a  href="" class="row_del btn btn-danger">Delete</a>
  </td>
</tr>