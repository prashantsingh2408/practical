<select class="form-control" name="faculty_id">
      <?php $__currentLoopData = $faculties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faculty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value="<?php echo e($loop->iteration); ?>" 
              <?php if($faculty->name == $faculty_name): ?>
                 selected 
              <?php endif; ?>
          >
          <?php echo e($faculty->name); ?>

      </option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select><?php /**PATH /home/prashant/repo/personal/practicle/resources/views/components/input/faculty.blade.php ENDPATH**/ ?>