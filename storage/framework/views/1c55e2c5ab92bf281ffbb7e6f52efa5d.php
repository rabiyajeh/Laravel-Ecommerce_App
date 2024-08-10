<?php $__env->startSection('content'); ?>
<style>
    [type="text"]:focus,
    [type="email"]:focus,
    [type="url"]:focus,
    [type="password"]:focus,
    [type="number"]:focus,
    [type="date"]:focus,
    [type="datetime-local"]:focus,
    [type="month"]:focus,
    [type="search"]:focus,
    [type="tel"]:focus,
    [type="time"]:focus,
    [type="week"]:focus,
    [multiple]:focus,
    textarea:focus,
    select:focus {

        box-shadow: none !important;
        border-color: transparent !important;
    }
</style>
<!-- Sign Up Section Start -->
<div class="login-section">
    <div class="materialContainer">
        <div class="box">
            <form method="POST" action="<?php echo e(route('register')); ?>">
                <?php echo csrf_field(); ?>
                <div class="login-title">
                    <h2>Register</h2>
                </div>

                <div class="input">
                    <label for="name">Name</label>
                    <input type="text" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required="" autofocus="" autocomplete="name">
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger mt-3"><?php echo e($message); ?> </span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="input">
                    <label for="emailname">Email Address</label>
                    <input type="email" id="emailname" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required="" autocomplete="username">
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger mt-3"><?php echo e($message); ?> </span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="input">
                    <label for="pass">Password</label>
                    <input type="password" id="pass" class="block mt-1 w-full" name="password" required="" autocomplete="new-password">
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger mt-3"><?php echo e($message); ?> </span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="input">
                    <label for="compass">Confirm Password</label>
                    <input type="password" id="compass" class="block mt-1 w-full" name="password_confirmation" required="" autocomplete="new-password">
                </div>

                <div class="button login">
                    <button type="submit">
                        <span>Sign Up</span>
                        <i class="fa fa-check"></i>
                    </button>
                </div>
            </form>
        </div>
        <p><a href="<?php echo e(route('login')); ?>" class="theme-color">Already have an account?</a></p>
    </div>
</div>

<!-- Sign Up Section End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\laravel_ecommerce\resources\views/auth/register.blade.php ENDPATH**/ ?>