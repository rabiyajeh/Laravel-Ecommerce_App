<?php $__env->startSection('content'); ?>

<style>
    input [type="text"]:focus,
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
        --tw-ring-color: transparent !important;
        border-color: transparent !important;
    }

    input [type="text"]:hover,
    [type="email"]:hover,
    [type="url"]:hover,
    [type="password"]:hover,
    [type="number"]:hover,
    [type="date"]:hover,
    [type="datetime-local"]:hover,
    [type="month"]:hover,
    [type="search"]:hover,
    [type="tel"]:hover,
    [type="time"]:hover,
    [type="week"]:hover,
    [multiple]:hover,
    textarea:hover,
    select:hover {
        --tw-ring-color: transparent !important;
        border-color: transparent !important;
    }

    input [type="text"]:active,
    [type="email"]:active,
    [type="url"]:active,
    [type="password"]:active,
    [type="number"]:active,
    [type="date"]:active,
    [type="datetime-local"]:active,
    [type="month"]:active,
    [type="search"]:active,
    [type="tel"]:active,
    [type="time"]:active,
    [type="week"]:active,
    [multiple]:active,
    textarea:active,
    select:active {
        --tw-ring-color: transparent !important;
        border-color: transparent !important;
    }
</style>
<!-- Log In Section Start -->
<div class="login-section">
    <div class="materialContainer">
        <div class="box">
            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
                <div class="login-title">
                    <h2>Login</h2>
                </div>
                <div class="input">
                    <label for="name">Username</label>
                    <input type="email" id="name" name="email" :value="old('email')" required="" autofocus="" autocomplete="name">
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger mt-3"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="input">
                    <label for="pass">Password</label>
                    <input type="password" id="pass" class="block mt-1 w-full" name="password" required="" autocomplete="current-password">
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger mt-3"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <a href="javascript:void(0)" class="pass-forgot">Forgot your password?</a>

                <div class="button login">
                    <button type="submit">
                        <span>Log In</span>
                        <i class="fa fa-check"></i>
                    </button>
                </div>

                <p>Not a member? <a href="<?php echo e(route('register')); ?>" class="theme-color">Sign up now</a></p>
            </form>
        </div>
    </div>
</div>
<!-- Log In Section End -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\laravel_ecommerce\resources\views/auth/login.blade.php ENDPATH**/ ?>