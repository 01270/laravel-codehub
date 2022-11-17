<?php $__env->startSection('body'); ?>
    <div class="bg-nav border border-nav p-10 rounded">
        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase text-white">
                <?php if(!count($codes)): ?>
                You Don't Have Codes
                <?php else: ?>
                Posts: <?php echo e(count($codes)); ?>

                <?php endif; ?>
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
                <?php $__currentLoopData = $codes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="border-gray-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <a class="text-white" href="/<?php echo e($code['id']); ?>"><?php echo e($code['title']); ?></a>
                    </td>
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <a href="/edit/<?php echo e($code['id']); ?>" class="text-white px-6 py-2 rounded-xl"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                    </td>
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <form method="POST" action="/<?php echo e($code['id']); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="text-red-600">
                                <i class="fa-solid fa-trash-can"></i>
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Yazan\Desktop\laravel\CodesHub\resources\views/codes/manage.blade.php ENDPATH**/ ?>