<!-- table -->
<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>Subject Name</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($subject->subject_name); ?></td>
      <!-- <td><?php echo e($subject->term); ?></td> -->
       
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php /**PATH /home/prashant/repo/personal/practicle/resources/views/inc/view-subject-table.blade.php ENDPATH**/ ?>