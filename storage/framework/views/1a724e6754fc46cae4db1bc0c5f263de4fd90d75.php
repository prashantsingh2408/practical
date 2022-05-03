<?php $__currentLoopData = $faculty_time_tables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faculty_time_table): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<tr>
  <td scope="row"><?php echo e($loop->iteration); ?></td>
  <td>
    <!-- dropdown -->
    <select class="form-control" name="faculty_id">
      <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subjects): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value="<?php echo e($loop->iteration); ?>"><?php echo e($faculty->subject_name); ?></option>
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
    
    <input type="number" class="form-control" name="duration" value="<?php echo e($faculty_time_table->session_start_time ?? 0); ?>" placeholder="Enter duration">
  </td>
  <td>
    <input type="time" class="form-control" name="time" value="<?php echo e($faculty_time_table->duration); ?>" placeholder="Enter time">
  </td>
  <td><?php echo e($faculty_time_table->session_stop_time); ?></td>
  <td>
    <a href="<?php echo e(route('edit-faculty-time-table', $faculty_time_table->id)); ?>" class="btn btn-primary">Add</a>
    <a href="<?php echo e(route('delete-faculty-time-table', $faculty_time_table->id)); ?>" class="btn btn-danger">Delete</a>
  </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/prashant/repo/personal/practicle/resources/views/inc/faculty-time-table-row-load.blade.php ENDPATH**/ ?>