<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('Frontend.layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>   
    <?php echo $__env->yieldContent('main-content'); ?>
    <?php echo $__env->make('Frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH C:\wamp64\www\demo\resources\views/Frontend/layouts/master.blade.php ENDPATH**/ ?>