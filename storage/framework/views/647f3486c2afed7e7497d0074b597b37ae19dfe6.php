<select class="form-control" name="subject_id">
      <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value="<?php echo e($subject->id); ?>"
              <?php if($subject->id == $subject_id): ?>
                 selected
              <?php endif; ?>
              ><?php echo e($subject->subject_name); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select><?php /**PATH /home/prashant/repo/personal/practicle/resources/views/components/input/subject.blade.php ENDPATH**/ ?>