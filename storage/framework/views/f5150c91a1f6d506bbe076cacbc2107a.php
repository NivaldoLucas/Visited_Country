<!-- resources/views/countries/create.blade.php -->



<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Add New Country</h2>
        <form action="<?php echo e(route('countries.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="continent" class="form-label">Continent</label>
                <input type="text" class="form-control" id="continent" name="continent" required>
            </div>
            <div class="mb-3">
                <label for="ddd" class="form-label">DDD</label>
                <input type="text" class="form-control" id="ddd" name="ddd" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>
            <div class="mb-3">
                <label for="year_visited" class="form-label">Year Visited</label>
                <input type="text" class="form-control" id="year_visited" name="year_visited" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Country</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\VisitedCountries\resources\views/countries/create.blade.php ENDPATH**/ ?>