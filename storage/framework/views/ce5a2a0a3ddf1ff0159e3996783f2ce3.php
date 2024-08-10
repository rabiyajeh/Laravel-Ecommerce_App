

<?php $__env->startSection("content"); ?>

<section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Wishlist</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('app.index')); ?>">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Cart Section Start -->
<section class="wish-list-section section-b-space">
    <div class="container">
        <?php if($items->count() > 0): ?>
        <div class="row">
            <div class="col-sm-12 table-responsive">
                <table class="table cart-table wishlist-table">
                    <thead>
                        <tr class="table-head">
                            <th scope="col">image</th>
                            <th scope="col">product name</th>
                            <th scope="col">price</th>
                            <th scope="col">availability</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                                    
                        <tr>
                            <td>
                                <a href="<?php echo e(route('shop.product.details',['slug'=>$item->model->slug])); ?>">
                                    <img src="<?php echo e(asset('assets/images/fashion/product/front')); ?>/<?php echo e($item->model->image); ?>"
                                        class=" blur-up lazyload" alt="">
                                </a>
                            </td>
                            <td>
                                <a href="<?php echo e(route('shop.product.details',['slug'=>$item->model->slug])); ?>" class="font-light"><?php echo e($item->model->name); ?></a>
                                <div class="mobile-cart-content row">
                                    <div class="col">
                                        <p>In Stock</p>
                                    </div>
                                    <div class="col">
                                        <p class="fw-bold">$<?php echo e($item->model->regular_price); ?></p>
                                    </div>
                                    <div class="col">
                                        <h2 class="td-color">
                                            <a href="javascript:void(0)" class="icon">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        </h2>
                                        <h2 class="td-color">
                                            <a href="cart.php" class="icon">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-bold">$<?php echo e($item->model->regular_price); ?></p>
                            </td>
                            <td>
                                <?php if($item->model->stock_status == "instock"): ?>
                                    <p>In Stock</p>
                                <?php else: ?>
                                    <p>Stock Out</p>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if($item->model->stock_status == 'instock'): ?>
                                    <a href="javascript:void(0)" class="icon">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                <?php else: ?>
                                    <a href="javascript:void(0)" class="icon disabled">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                <?php endif; ?>
                                <a href="javascript:void(0)" class="icon">
                                    <i class="fas fa-times"></i>
                                </a>
                            </td>
                        </tr> 
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                          
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-end">
                <a href="javascript:void(0)">Clear All Items</a>
            </div>
        </div>
        <?php else: ?>
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Your wishlist is empty ! </h2>
                    <h5 class="mt-3">Add items to it now.</h5>
                    <a href="<?php echo e(route('shop.index')); ?>" class="btn btn-warning mt-5">Shop Now</a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<!-- Cart Section End -->  

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.base", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\laravel_ecommerce\resources\views/wishlist.blade.php ENDPATH**/ ?>