<!doctype html>
<html lang="en">
<?php echo $__env->make('inc.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
  <div class='container-fluid'>
    <div class='row justify-content-center'>
      <div class='col-md-6'>
        <div class='card'>
          <?php echo $__env->make('inc.msg-top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <form action=<?php echo e(route('add-subject')); ?> method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group m-2">
              <label for="name">Subject Name</label>
              <input type="text" class="form-control"  name="subject_name" placeholder="Enter subject name">
              <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group m-2">
              <label for="subject">Terms</label>
              <select class="form-control" name="term_id">
                <?php $__currentLoopData = $term_names; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $term_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($loop->iteration); ?>"><?php echo e($term_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
            <button type="submit" class="btn btn-primary m-2">Submit</button>
          </form>
          <a href=<?php echo e(route('view-subeject')); ?> class="btn btn-primary m-2">View Subjects</a>

        </div>
        <?php echo $__env->make('inc.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
    </div>
  </div>

  <?php echo $__env->make('inc.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('inc.name-validation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH /home/prashant/repo/personal/practicle/resources/views/add-subject.blade.php ENDPATH**/ ?>