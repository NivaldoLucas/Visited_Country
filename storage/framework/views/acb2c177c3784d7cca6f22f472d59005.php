<!-- resources/views/countries/index.blade.php -->



<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Visited Countries</h2>
        <a href="<?php echo e(route('countries.create')); ?>" class="btn btn-primary">Add Country</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Continent</th>
                    <th>DDD</th>
                    <th>Description</th>
                    <th>Year Visited</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($country->name); ?></td>
                        <td><?php echo e($country->continent); ?></td>
                        <td><?php echo e($country->ddd); ?></td>
                        <td><?php echo e($country->description); ?></td>
                        <td><?php echo e($country->year_visited); ?></td>
                        <td>
                            <a href="<?php echo e(route('countries.show', $country->id)); ?>" class="btn btn-info">View</a>
                            <a href="<?php echo e(route('countries.edit', $country->id)); ?>" class="btn btn-warning">Edit</a>
                            <form action="<?php echo e(route('countries.destroy', $country->id)); ?>" method="POST" class="d-inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\VisitedCountries\resources\views/index.blade.php ENDPATH**/ ?>