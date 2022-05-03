<!-- table -->
<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>Subject Name</th>
    </tr>
  </thead>
  <tbody>
    @foreach($subjects as $subject)
    <tr>
      <td>{{$subject->subject_name}}</td>
      <!-- <td>{{$subject->term}}</td> -->
       {{-- <td>
        <a href="{{route('edit-subject', $subject->id)}}" class="btn btn-primary">Edit</a>
        <a href="{{route('delete-subject', $subject->id)}}" class="btn btn-danger">Delete</a>
      </td>  --}}
    </tr>
    @endforeach
  </tbody>
</table>
