<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php $__env->startSection('title', __('Dashboard')); ?>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Welcome banner -->
        <?php if (isset($component)) { $__componentOriginal0befbe0186681e93c8b8de70927507df = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0befbe0186681e93c8b8de70927507df = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.welcome-banner','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.welcome-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0befbe0186681e93c8b8de70927507df)): ?>
<?php $attributes = $__attributesOriginal0befbe0186681e93c8b8de70927507df; ?>
<?php unset($__attributesOriginal0befbe0186681e93c8b8de70927507df); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0befbe0186681e93c8b8de70927507df)): ?>
<?php $component = $__componentOriginal0befbe0186681e93c8b8de70927507df; ?>
<?php unset($__componentOriginal0befbe0186681e93c8b8de70927507df); ?>
<?php endif; ?>

        <!-- Dashboard actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">

            <!-- Cards -->
            <div class="grid grid-cols-12 gap-6">

            </div>

        </div>

        <div class="container mx-auto mt-8 px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Ringkasan Statistik -->
                <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-4">
                    <div class="text-xl font-bold text-gray-700 dark:text-gray-300">Total Produk</div>
                    <div class="text-3xl font-bold text-gray-900 dark:text-gray-100"><?php echo e($totalProducts); ?></div>
                </div>
                <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-4">
                    <div class="text-xl font-bold text-gray-700 dark:text-gray-300">Total Kriteria</div>
                    <div class="text-3xl font-bold text-gray-900 dark:text-gray-100"><?php echo e($totalKriterias); ?></div>
                </div>
                <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-4">
                    <div class="text-xl font-bold text-gray-700 dark:text-gray-300">Total Pengguna</div>
                    <div class="text-3xl font-bold text-gray-900 dark:text-gray-100"><?php echo e($totalUsers); ?></div>
                </div>

            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\project-auth-dssapp-main\resources\views/pages/dashboard/dashboard.blade.php ENDPATH**/ ?>