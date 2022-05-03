<!doctype html>
<html lang="en">
<?php echo $__env->make('inc.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
  <div class='container-fluid'>
    <div class='row justify-content-center'>
      <div class='col-md-10'>
        <div class='card'>
          
          <?php echo $__env->make('inc.msg-top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <table class="table table-hover">
            <thead>
              <?php echo $__env->make('inc.faculty-time-table.row-tr', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </thead>
            <tbody>
              <?php echo $__env->make('inc.faculty-time-table.row-for-clone', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <?php echo $__env->make('inc.faculty-time-table.row-load', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <?php echo $__env->make('inc.faculty-time-table.row-empty', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </tbody>
          </table>
          <!-- submit and cancel button -->
          <a  id='time-table-submit' class="btn btn-primary m-2">Submit</a>
          <a href='' class="btn btn-primary m-2">Cancel</a>
      </div>
      <?php echo $__env->make('inc.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
  </div>
  <?php echo $__env->make('inc.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('inc.name-validation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('inc.faculty-time-table.scripts-table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('inc.faculty-time-table.scripts-end-time-calculation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('inc.faculty-time-table.validation-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('inc.faculty-time-table.submit-ajax-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH /home/prashant/repo/personal/practicle/resources/views/add-faculty-time-table.blade.php ENDPATH**/ ?>