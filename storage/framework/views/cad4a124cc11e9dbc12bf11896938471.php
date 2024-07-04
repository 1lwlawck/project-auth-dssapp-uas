<div class="container mx-auto mt-8 px-4">
    <div class="grid grid-cols-1 gap-4">
        <div class="container mx-auto mt-4">
            <div class="flex flex-col">
                <div class="overflow-x-auto">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden shadow-md sm:rounded-lg">
                            <table class="min-w-full bg-white dark:bg-gray-800 text-black dark:text-white">
                                <thead class="bg-gray-50 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-400">
                                            ID
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-400">
                                            Kriteria
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-400">
                                            Label
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-400">
                                            Bobot
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $kriterias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kriteria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">
                                                <?php echo e($kriteria->id); ?>

                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                <!--[if BLOCK]><![endif]--><?php if($editId === $kriteria->id && $editField === 'kriteria'): ?>
                                                    <input type="text" wire:model="editValue"
                                                        wire:keydown.enter="update">
                                                <?php else: ?>
                                                    <span
                                                        wire:click="edit(<?php echo e($kriteria->id); ?>, 'kriteria')"><?php echo e($kriteria->kriteria); ?></span>
                                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                <!--[if BLOCK]><![endif]--><?php if($editId === $kriteria->id && $editField === 'label'): ?>
                                                    <input type="text" wire:model="editValue"
                                                        wire:keydown.enter="update">
                                                <?php else: ?>
                                                    <span
                                                        wire:click="edit(<?php echo e($kriteria->id); ?>, 'label')"><?php echo e($kriteria->label); ?></span>
                                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                <!--[if BLOCK]><![endif]--><?php if($editId === $kriteria->id && $editField === 'bobot'): ?>
                                                    <input type="text" wire:model="editValue"
                                                        wire:keydown.enter="update">
                                                <?php else: ?>
                                                    <span
                                                        class=wire:click="edit(<?php echo e($kriteria->id); ?>, 'bobot')"><?php echo e($kriteria->bobot); ?></span>
                                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                </tbody>
                            </table>
                            <!--[if BLOCK]><![endif]--><?php if($kriterias->isEmpty()): ?>
                                <p class="text-center py-4">No criteria found.</p>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\project-auth-dssapp-main\resources\views/livewire/kriteria-component.blade.php ENDPATH**/ ?>