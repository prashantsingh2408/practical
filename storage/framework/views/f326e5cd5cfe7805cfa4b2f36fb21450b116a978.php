<!doctype html>
<html lang="en">
<?php echo $__env->make('inc/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
  <div class='container-fluid'>
    <div class='row justify-content-center'>
      <div class='col-md-6'>
        <div class='card'>
          <?php echo $__env->make('inc/msg-top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <!-- Add subject button -->
          <a href=<?php echo e(route('view-list-subeject')); ?> class="btn btn-primary m-2">View Subjects</a>
        </div>
      </div>
    </div>
  </div>
  <?php echo $__env->make('inc/scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('inc/name-validation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH /home/prashant/repo/personal/practicle/resources/views/view-list-subject.blade.php ENDPATH**/ ?>