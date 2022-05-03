<!doctype html>
<html lang="en">
  <?php if (isset($component)) { $__componentOriginal0ffb0a0d50d0f581dbd60338c0b56c81fed4e7d6 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Head::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('head'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Head::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0ffb0a0d50d0f581dbd60338c0b56c81fed4e7d6)): ?>
<?php $component = $__componentOriginal0ffb0a0d50d0f581dbd60338c0b56c81fed4e7d6; ?>
<?php unset($__componentOriginal0ffb0a0d50d0f581dbd60338c0b56c81fed4e7d6); ?>
<?php endif; ?>
  <body>
    <h1>Hello, world!</h1>
    <?php if (isset($component)) { $__componentOriginale897f15469526e6bb29848b9fcf70c3214246b74 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Script::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('script'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Script::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     
    <!-- bootstrap form -->
    <!-- fields -->
    <!-- name text type -->
    <!-- subject dropdown -->

    <form action="/subjects" method="POST">
      <?php echo csrf_field(); ?>
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
      </div>
      <div class="form-group">
        <label for="subject">Subject</label>
        <select class="form-control" id="subject" name="subject">
          <option>Math</option>
          <option>Science</option>
          <option>English</option>
          <option>History</option>
          <option>Spanish</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </body>
</html><?php /**PATH /home/prashant/repo/personal/practicle/resources/views/components/add-subject.blade.php ENDPATH**/ ?>