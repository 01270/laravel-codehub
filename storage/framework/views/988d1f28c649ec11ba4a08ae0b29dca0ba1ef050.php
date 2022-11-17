<?php $__env->startSection('body'); ?>

<div class="bg-nav border border-nav p-10 rounded max-w-lg mx-auto mt-24">
<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-1 text-white">Login</h2>
    <p class="mb-4 text-white">Login into your account</p>
</header>

<form action="/user/login" method="POST">
    <?php echo csrf_field(); ?>

    <div class="mb-6">
        <label for="email" class="text-white inline-block text-lg mb-2">Email:</label>
        <input
            type="email"
            class="border border-gray-200 rounded p-2 w-full"
            name="email"/>
        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="mb-6">
        <label for="password" class="inline-block text-lg mb-2 text-white">text-white</label>
        <input
            type="password"
            class="border border-gray-200 rounded p-2 w-full"
            name="password"/>
        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="mb-6">
        <button type="submit" class="bg-back text-white rounded py-2 px-4 hover:bg-t3">Sign Up</button>
    </div>

    <div class="mt-8">
        <p class="text-white">Don't have an account?<a href="/register" class="text-t3"> Register</a></p>
    </div>

</form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Yazan\Desktop\laravel\CodesHub\resources\views/users/login.blade.php ENDPATH**/ ?>