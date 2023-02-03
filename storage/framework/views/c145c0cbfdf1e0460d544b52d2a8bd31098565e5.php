<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo e(config('app.name')); ?> : <?php echo $__env->yieldContent('title'); ?></title>
  <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">
  <link rel="icon" type="image/x-icon" href="<?php echo e(asset('favicon.ico')); ?>">
</head>
<body>
  <?php echo $__env->yieldContent('content'); ?>
</body>
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
</html><?php /**PATH /Applications/MAMP/htdocs/CADRICIEL/Eric-Charbonnier-TP1/Maisonneuve2295209/resources/views/layouts/app.blade.php ENDPATH**/ ?>