<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['tags']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['tags']); ?>
<?php foreach (array_filter((['tags']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $mytags = explode(',', $tags)
?>

<ul class="flex mt-5">
    <?php $__currentLoopData = $mytags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="flex items-center justify-center bg-t3 text-white rounded-xl py-1 px-3 mr-2 text-xs">
        <a href="/?tag=<?php echo e($tag); ?>"><?php echo e($tag); ?></a></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH C:\Users\Yazan\Desktop\laravel\CodesHub\resources\views/components/tags-ul.blade.php ENDPATH**/ ?>