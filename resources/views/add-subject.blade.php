<!doctype html>
<html lang="en">
@include('inc.head')

<body>
  <div class='container-fluid'>
    <div class='row justify-content-center'>
      <div class='col-md-6'>
        <div class='card'>
          @include('inc.msg-top')
          <form action={{route('add-subject')}} method="POST">
            @csrf
            <div class="form-group m-2">
              <label for="name">Subject Name</label>
              <input type="text" class="form-control"  name="subject_name" placeholder="Enter subject name">
              @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group m-2">
              <label for="subject">Terms</label>
              <select class="form-control" name="term_id">
                @foreach($term_names as $term_name)
                  <option value="{{ $loop->iteration }}">{{ $term_name }}</option>
                @endforeach
              </select>
            </div>
            <button type="submit" class="btn btn-primary m-2">Submit</button>
          </form>
          <a href={{route('view-subeject')}} class="btn btn-primary m-2">View Subjects</a>

        </div>
        @include('inc.nav')
      </div>
    </div>
  </div>

  @include('inc.scripts')
  @include('inc.name-validation')
</body>

</html>