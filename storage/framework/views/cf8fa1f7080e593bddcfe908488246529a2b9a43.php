<!doctype html>
<html lang="en">
  <head>
      <title> Blog Site - <?php echo $__env->yieldContent('title'); ?></title>
    </head>
  <body>
    <ul>
      <li>Home</a></li>
      <li>Profile</a></li>
      <li>New Post</a></li>
      <li>About</a></li>
    </ul>
    
    <div>
      <?php echo $__env->yieldContent('content'); ?>
    </div>
  </body>
</html>
<?php /**PATH /home/vagrant/Laravel/blogsite/resources/views/app.blade.php ENDPATH**/ ?>