<!doctype html>
<html lang="en">
@include('inc.head')

<body>
  <div class='container-fluid'>
    <div class='row justify-content-center'>
      <div class='col-md-6'>
        <div class='card'>
          @include('inc.msg-top')
          @include('inc.view-subject-table')
          <a href={{route('add-subject')}} class="btn btn-primary m-2">Add Subjects</a>
        </div>
        @include('inc.nav')

      </div>
    </div>
  </div>
  @include('inc.scripts')
  @include('inc.name-validation')
</body>

</html>