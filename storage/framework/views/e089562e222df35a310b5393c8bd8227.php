<!-- resources/views/search/index.blade.php -->



<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Search Results for "<?php echo e($query); ?>"</h1>

        <?php if($results->isEmpty()): ?>
            <p>No results found.</p>
        <?php else: ?>
            <ul>
                <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <h2><?php echo e($product->name); ?></h2>
                        <p><?php echo e($product->description); ?></p>
                        <?php if($product->image): ?>
                        <img src="<?php echo e(asset('assets/images/fashion/product/front')); ?>/<?php echo e($product->image); ?>" class="img-fluid blur-up lazyload" alt="<?php echo e($product->name); ?>">
                        <?php endif; ?>
                        <!-- Add other product details as needed -->
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\laravel_ecommerce\resources\views/search/index.blade.php ENDPATH**/ ?>