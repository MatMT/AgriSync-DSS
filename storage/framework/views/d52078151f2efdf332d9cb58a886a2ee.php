<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AgrySinc - <?php echo $__env->yieldContent('titulo'); ?></title>

    <!-- Fonts -->

    <!-- Styles -->
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>

<body>
    <h1 class="text-3xl font-bold">
        Hello world!
    </h1>


    <?php echo $__env->yieldContent('contenido'); ?>
</body>

</html>
<?php /**PATH D:\MT\GitHub\AgriSync-DSS\resources\views/app.blade.php ENDPATH**/ ?>