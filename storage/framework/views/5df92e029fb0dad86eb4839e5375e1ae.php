

<?php $__env->startSection('content'); ?>
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
                <h3>Cart</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('app.index')); ?>">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Cart</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Cart Section Start -->
<section class="cart-section section-b-space">
    <div class="container">
        <?php if($cartItems->Count() > 0): ?>
        <div class="row">
            <div class="col-md-12 text-center">
                <table class="table cart-table">
                    <thead>
                        <tr class="table-head">
                            <th scope="col">image</th>
                            <th scope="col">product name</th>
                            <th scope="col">price</th>
                            <th scope="col">quantity</th>
                            <th scope="col">total</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                                   
                        <tr>
                            <td>
                                <a href="<?php echo e(route('shop.product.details',['slug'=>$item->model->slug])); ?>">
                                    <img src="<?php echo e(asset('assets/images/fashion/product/front')); ?>/<?php echo e($item->model->image); ?>" class="blur-up lazyloaded" alt="<?php echo e($item->model->name); ?>">
                                </a>
                            </td>
                            <td>
                                <a href="<?php echo e(route('shop.product.details',['slug'=>$item->model->slug])); ?>"><?php echo e($item->model->name); ?></a>
                                <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="mobile-cart-content row">
        <div class="col">
            <div class="qty-box">
                <div class="input-group">
                    <input type="text" name="quantity" class="form-control input-number" value="1">
                </div>
            </div>
        </div>
        <div class="col">
            <h2>$<?php echo e($cartItem->price); ?></h2>
        </div>
        <div class="col">
            <h2 class="td-color">
                <a href="javascript:void(0)">
                <a href="<?php echo e(route('cart.remove', ['cartId' => $cartItem->id])); ?>">
    <i class="fas fa-times"></i>
</a>
                </a>
            </h2>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            <td>
                                <h2>$<?php echo e($item->price); ?></h2>
                            </td>
                            <td>
    <div class="qty-box">
        <div class="input-group">
            <input type="number" name="quantity" data-rowid="<?php echo e($item->rowId); ?>" onchange="updateQuantity(this)" class="form-control input-number" value="<?php echo e($item->qty); ?>">
        </div>
    </div>
</td>
                            <td>
                                <h2 class="td-color">$<?php echo e($item->subtotal()); ?></h2>
                            </td>
                            <td>
    <a href="javascript:void(0)" onclick="removeItemFromCart('<?php echo e($item->rowId); ?>')">
        <i class="fas fa-times"></i>
    </a>
</td>
                        </tr>                       
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <div class="col-12 mt-md-5 mt-4">
                <div class="row">
                    <div class="col-sm-7 col-5 order-1">
                    <div class="col-sm-7 col-5 order-1">
    <div class="left-side-button text-end d-flex d-block justify-content-end">
        <a href="javascript:void(0)" onclick="clearCart()" class="text-decoration-underline theme-color d-block text-capitalize">clear all items</a>
    </div>
</div>
                    </div>
                    <div class="col-sm-5 col-7">
                        <div class="left-side-button float-start">
                            <a href="<?php echo e(route('shop.index')); ?>" class="btn btn-solid-default btn fw-bold mb-0 ms-0">
                                <i class="fas fa-arrow-left"></i> Continue Shopping</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cart-checkout-section">
                <div class="row g-4">
                    <div class="col-lg-4 col-sm-6">
                        <div class="promo-section">
                            <form class="row g-3">
                                <div class="col-7">
                                    <input type="text" class="form-control" id="number" placeholder="Coupon Code">
                                </div>
                                <div class="col-5">
                                    <button class="btn btn-solid-default rounded btn">Apply Coupon</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 ">
                        <div class="checkout-button">
                            <a href="checkout" class="btn btn-solid-default btn fw-bold">
                                Check Out <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="cart-box">
                            <div class="cart-box-details">
                                <div class="total-details">
                                    <div class="top-details">
                                        <h3>Cart Totals</h3>
                                        <h6>Sub Total <span>$<?php echo e(Cart::instance('cart')->subtotal()); ?></span></h6>
                                        <h6>Tax <span>$<?php echo e(Cart::instance('cart')->tax()); ?></span></h6>


                                        <h6>Total <span>$<?php echo e(Cart::instance('cart')->total()); ?></span></h6>
                                    </div>
                                    <div class="bottom-details">
                                        <a href="checkout">Process Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php else: ?>
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Your cart is empty !</h2>
                    <h5 class="mt-3">Add Items to it now.</h5>
                    <a href="<?php echo e(route('shop.index')); ?>" class="btn btn-warning mt-5">Shop Now</a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<form id="updateCartQty" action="<?php echo e(route('cart.update')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <input type="hidden" id="rowId" name="rowId" />
    <input type="hidden" id="quantity" name="quantity" />
</form>
<form id="deleteFromCart" action="<?php echo e(route('cart.remove')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('delete'); ?>
    <input type="hidden" id="rowId_D" name="rowId" />
</form>
<form id="clearCart" action="<?php echo e(route('cart.clear')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('delete'); ?> 
</form>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>
        function updateQuantity(qty)
        {
            $('#rowId').val($(qty).data('rowid'));
            $('#quantity').val($(qty).val());
            $('#updateCartQty').submit();
        }      
        function removeItemFromCart(rowId)
        {
            $('#rowId_D').val(rowId);
            $('#deleteFromCart').submit();
        }  
        function clearCart()
        {
            $('#clearCart').submit();
        }
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\laravel_ecommerce\resources\views/cart.blade.php ENDPATH**/ ?>