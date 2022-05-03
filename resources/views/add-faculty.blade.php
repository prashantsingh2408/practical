<!doctype html>
<html lang="en">
@include('inc.head')

<body>
  <div class='container-fluid'>
    <div class='row justify-content-center'>
      <div class='col-md-6'>
        <div class='card'>
          @include('inc.msg-top')
          <form action={{route('add-faculty')}} method="POST">
            @csrf
            <div class="form-group m-2">
              <label for="name">Fafulty Name</label>
              <input type="text" class="form-control"  name="name" placeholder="Enter faculty name">
              @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group m-2">
              <label for="email">Email</label>
              <input type="email" class="form-control"  name="email" placeholder="Enter email">
              @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            <button type="submit" class="btn btn-primary m-2">Submit</button>
          </form>
          {{-- <a href={{route('view-faculty')}} class="btn btn-primary m-2">View Faculty</a> --}}
          </div>
      </div>
      @include('inc.nav')
    </div>
  </div>
  @include('inc.scripts')
  @include('inc.name-validation')
</body>

</html>