<?php $__env->startSection('body'); ?>

<?php if($yes): ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => ['class' => 'mx-4 mb-4 p-4 flex space-x-6 items-center justify-center']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mx-4 mb-4 p-4 flex space-x-6 items-center justify-center']); ?>
    <a href="/" class="text-white"><i class="fa-solid fa-arrow-left"></i> Back</a>
    <a class="text-white" href="/edit/<?php echo e($code->id); ?>"><i class="fa-solid fa-pencil"></i> Edit</a>
    <form method="POST" action="/<?php echo e($code->id); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
    </form>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php endif; ?>

<div class="mx-4">
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => ['class' => 'p-10']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'p-10']); ?>
        <div class="flex flex-col items-center justify-center text-center">
            <img class="w-48 mr-6 mb-6" src="<?php echo e($code['photo'] ? asset('storage/'. $code['photo']) : asset('images/no-image.png')); ?>" alt="" />
            <h3 class="text-2xl mr-6 mb-6 text-white"><?php echo e($code['title']); ?></h3>
            <div class="text-xl font-bold mb-4"><?php echo e($code['comp']); ?></div>
            <div class="border border-gray-200 w-full mb-6"></div>
        </div>

                <div class="text-lg space-y-6">
                    <div style="width: 100%;">
                        <textarea style="width: 100%; max-width: 100%;"
                        class="border bg-back text-white border-back rounded p-2"
                        name="code"
                        value="<?php echo e(old('code')); ?>"
                        rows="10"><?php echo e($code['code']); ?></textarea>
                    </div>
                    <a href="https://t.me/<?php echo e($code['telegram']); ?>" target="_blank"
                    class="block bg-t3 text-white w-[30%] py-2 px-8 rounded-xl hover:opacity-80 text-center"
                    ><i class="fa-brands fa-telegram text-center"></i> <?php echo e($code['telegram']); ?> On Telegram</a>
                </div>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Yazan\Desktop\laravel\CodesHub\resources\views/codes/show.blade.php ENDPATH**/ ?>