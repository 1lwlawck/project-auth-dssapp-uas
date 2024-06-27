<!-- resources/views/livewire/laporan-component.blade.php -->

<div>
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-8">Laporan Produk Terpopuler</h1>

        <h2 class="text-xl font-semibold mb-4">Normalisasi Tabel</h2>
        <table class="min-w-full bg-white border-collapse">
            <thead>
                <tr>
                    <th class="py-2 px-4 border">Kode Produk</th>
                    <th class="py-2 px-4 border">Nama Produk</th>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = array_keys($weights); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $criteria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <th class="py-2 px-4 border"><?php echo e(ucwords(str_replace('_', ' ', $criteria))); ?></th>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </tr>
            </thead>
            <tbody>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $normalized; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="py-2 px-4 border"><?php echo e($products[$index]->kd_produk); ?></td>
                        <td class="py-2 px-4 border"><?php echo e($products[$index]->nama_produk); ?></td>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <td class="py-2 px-4 border"><?php echo e(number_format($value, 4)); ?></td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </tbody>
        </table>

        <h2 class="text-xl font-semibold mb-4 mt-8">Rangking Tabel</h2>
        <table class="min-w-full bg-white border-collapse">
            <thead>
                <tr>
                    <th class="py-2 px-4 border">Ranking</th>
                    <th class="py-2 px-4 border">Kode Produk</th>
                    <th class="py-2 px-4 border">Nama Produk</th>
                    <th class="py-2 px-4 border">Nilai Preferensi</th>
                </tr>
            </thead>
            <tbody>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $rankedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="py-2 px-4 border"><?php echo e($product['rank']); ?></td>
                        <td class="py-2 px-4 border"><?php echo e($product['kd_produk']); ?></td>
                        <td class="py-2 px-4 border"><?php echo e($product['nama_produk']); ?></td>
                        <td class="py-2 px-4 border"><?php echo e(number_format($product['nilai_preferensi'], 4)); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </tbody>
        </table>

        <div class="mt-4 mb-4">
            <?php echo e($products->links()); ?>

        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\project-auth-dssapp-main\resources\views/livewire/laporan-component.blade.php ENDPATH**/ ?>