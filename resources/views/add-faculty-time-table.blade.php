<!doctype html>
<html lang="en">
@include('inc.head')
<body>
  <div class='container-fluid'>
    <div class='row justify-content-center'>
      <div class='col-md-10'>
        <div class='card'>
          
          @include('inc.msg-top')
              <table class="table table-hover">
            <thead>
              @include('inc.faculty-time-table.row-tr')
            </thead>
            <tbody>
              @include('inc.faculty-time-table.row-for-clone')
              @include('inc.faculty-time-table.row-load')
              @include('inc.faculty-time-table.row-empty')
            </tbody>
          </table>
          <!-- submit and cancel button -->
          <a  id='time-table-submit' class="btn btn-primary m-2">Submit</a>
          <a href='' class="btn btn-primary m-2">Cancel</a>
      </div>
      @include('inc.nav')
    </div>
  </div>
  @include('inc.scripts')
  @include('inc.name-validation')
  @include('inc.faculty-time-table.scripts-table')
  @include('inc.faculty-time-table.scripts-end-time-calculation')
  @include('inc.faculty-time-table.validation-script')
  @include('inc.faculty-time-table.submit-ajax-script')
</body>
</html>