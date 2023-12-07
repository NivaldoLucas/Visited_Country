<!-- resources/views/countries/show.blade.php -->



<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2><?php echo e($country->name); ?></h2>
        <p><strong>Continent:</strong> <?php echo e($country->continent); ?></p>
        <p><strong>DDD:</strong> <?php echo e($country->ddd); ?></p>
        <p><strong>Description:</strong> <?php echo e($country->description); ?></p>
        <p><strong>Year Visited:</strong> <?php echo e($country->year_visited); ?></p>
        <a href="<?php echo e(route('countries.index')); ?>" class="btn btn-secondary">Back</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\VisitedCountries\resources\views/countries/show.blade.php ENDPATH**/ ?>