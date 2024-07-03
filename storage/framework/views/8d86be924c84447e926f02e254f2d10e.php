<?php if($errors->any()): ?>
    <div <?php echo e($attributes); ?>>
        <div class="px-4 py-2 rounded-sm text-sm border bg-rose-100 dark:bg-rose-400/30 border-rose-200 dark:border-transparent text-rose-600 dark:text-rose-400">
            <div class="font-medium"><?php echo e(__('Whoops! Something went wrong.')); ?></div>
            <ul class="mt-1 list-disc list-inside text-sm">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>         
    </div>
<?php endif; ?>
<?php /**PATH C:\laragon\www\project-auth-dssapp-main\resources\views/components/validation-errors.blade.php ENDPATH**/ ?>