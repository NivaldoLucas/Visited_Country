<!-- resources/views/countries/edit.blade.php -->



<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Edit Country</h2>
        <form action="<?php echo e(route('countries.update', $country->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="<?php echo e($country->name); ?>">
            </div>
            <div class="form-group">
                <label for="continent">Continent:</label>
                <input type="text" name="continent" id="continent" class="form-control" value="<?php echo e($country->continent); ?>">
            </div>
            <div class="form-group">
                <label for="ddd">DDD:</label>
                <input type="text" name="ddd" id="ddd" class="form-control" value="<?php echo e($country->ddd); ?>">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control"><?php echo e($country->description); ?></textarea>
            </div>
            <div class="form-group">
                <label for="year_visited">Year Visited:</label>
                <input type="text" name="year_visited" id="year_visited" class="form-control" value="<?php echo e($country->year_visited); ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\VisitedCountries\resources\views/countries/edit.blade.php ENDPATH**/ ?>