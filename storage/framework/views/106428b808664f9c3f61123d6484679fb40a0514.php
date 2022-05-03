<?php $__currentLoopData = $faculty_time_tables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faculty_time_table): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td scope="row"><?php echo e($loop->iteration); ?></td>
    <td>
        <?php if (isset($component)) { $__componentOriginal7c23062db094b48acf2a7d72b4dca868eaa63185 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input\Faculty::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.faculty'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Input\Faculty::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['faculty_id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($faculty_time_table->faculty_id)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c23062db094b48acf2a7d72b4dca868eaa63185)): ?>
<?php $component = $__componentOriginal7c23062db094b48acf2a7d72b4dca868eaa63185; ?>
<?php unset($__componentOriginal7c23062db094b48acf2a7d72b4dca868eaa63185); ?>
<?php endif; ?>
    </td>
    <td>
      <?php if (isset($component)) { $__componentOriginal80ac4ac0827f33a2617d5e17ac4286eb8a6b7c27 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input\Subject::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.subject'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Input\Subject::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['subject_id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($faculty_time_table->subject_id)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal80ac4ac0827f33a2617d5e17ac4286eb8a6b7c27)): ?>
<?php $component = $__componentOriginal80ac4ac0827f33a2617d5e17ac4286eb8a6b7c27; ?>
<?php unset($__componentOriginal80ac4ac0827f33a2617d5e17ac4286eb8a6b7c27); ?>
<?php endif; ?>
    </td>

    <td>
      <?php if (isset($component)) { $__componentOriginal148823a2263a03616298eb3e9ee4b64121c94da4 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input\SessionDate::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.session-date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Input\SessionDate::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['date' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($faculty_time_table->date ?? '')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal148823a2263a03616298eb3e9ee4b64121c94da4)): ?>
<?php $component = $__componentOriginal148823a2263a03616298eb3e9ee4b64121c94da4; ?>
<?php unset($__componentOriginal148823a2263a03616298eb3e9ee4b64121c94da4); ?>
<?php endif; ?>
    </td>
    <td>
      <?php if (isset($component)) { $__componentOriginal9619722cd63615ebe31d03bf58b0d9a06ce5abd5 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input\SessionTime::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.session-time'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Input\SessionTime::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['time' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($faculty_time_table->session_start_time ?? '')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9619722cd63615ebe31d03bf58b0d9a06ce5abd5)): ?>
<?php $component = $__componentOriginal9619722cd63615ebe31d03bf58b0d9a06ce5abd5; ?>
<?php unset($__componentOriginal9619722cd63615ebe31d03bf58b0d9a06ce5abd5); ?>
<?php endif; ?>
    </td>
    <td>
      <?php if (isset($component)) { $__componentOriginal18739ce3c6043ad5423916f7f4a6d93e9d929ae1 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input\Duration::class, ['duration' => $faculty_time_table->duration ?? ''] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.duration'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Input\Duration::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal18739ce3c6043ad5423916f7f4a6d93e9d929ae1)): ?>
<?php $component = $__componentOriginal18739ce3c6043ad5423916f7f4a6d93e9d929ae1; ?>
<?php unset($__componentOriginal18739ce3c6043ad5423916f7f4a6d93e9d929ae1); ?>
<?php endif; ?>
    </td>
    <td>
      
      <input type="number" class="time-end form-control" name="time" value="$faculty_time_table->duration ?? ''" placeholder="Enter time">
    </td>
    <td>
      <a href="" class="row-del btn btn-danger">Delete</a>
    </td>
  </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/prashant/repo/personal/practicle/resources/views/inc/faculty-time-table/row-load.blade.php ENDPATH**/ ?>