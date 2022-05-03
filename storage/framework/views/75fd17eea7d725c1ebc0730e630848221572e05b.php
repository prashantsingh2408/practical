<tr id='tr_empty'>
  <td scope="row"></td>
  <td>
    <!-- dropdown -->
    <select class="form-control" name="faculty_id">
      <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value="<?php echo e($loop->iteration); ?>"><?php echo e($subject->subject_name); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </td>
  
  <td>
    <select class="form-control" name="term_id">
      <?php $__currentLoopData = $term_names; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value="<?php echo e($loop->iteration); ?>"><?php echo e($name); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
  </td>

  <td>
    <!-- dropdown -->
    <select class="form-control" name="faculty_id">
      <?php $__currentLoopData = $faculties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faculty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value="<?php echo e($loop->iteration); ?>"><?php echo e($faculty->name); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
  </td>
  <td>
    <?php if (isset($component)) { $__componentOriginal13fd1c3f629e2052ad9f622b945be51001fe716c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input\Date::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Input\Date::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal13fd1c3f629e2052ad9f622b945be51001fe716c)): ?>
<?php $component = $__componentOriginal13fd1c3f629e2052ad9f622b945be51001fe716c; ?>
<?php unset($__componentOriginal13fd1c3f629e2052ad9f622b945be51001fe716c); ?>
<?php endif; ?>
  </td>
  <td>
    
    <input type="number" class="form-control" name="duration" value="" placeholder="Enter duration">
  </td>
  <td>
    <input type="time" class="form-control" name="time" value="" placeholder="Enter time">
  </td>
  <td>
    <a  href="" class="row-add btn btn-primary">Add</a>
    <a  href="" class="row_del btn btn-danger">Delete</a>
  </td>
</tr><?php /**PATH /home/prashant/repo/personal/practicle/resources/views/inc/faculty-time-table-row-empty.blade.php ENDPATH**/ ?>