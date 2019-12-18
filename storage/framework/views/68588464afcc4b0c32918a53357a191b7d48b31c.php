

<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
  <p> Users Posts </p>
  <ul>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>:
      <li><?php echo e($post->user_id); ?></li>
      <li><?php echo e($post->title); ?></li>
      <li><?php echo e($post->content); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/Laravel/blogsite/resources/views/home.blade.php ENDPATH**/ ?>