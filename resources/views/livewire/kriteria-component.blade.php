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
                                    @foreach ($kriterias as $kriteria)
                                        <tr>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">
                                                {{ $kriteria->id }}
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                @if ($editId === $kriteria->id && $editField === 'kriteria')
                                                    <input type="text" wire:model="editValue"
                                                        wire:keydown.enter="update">
                                                @else
                                                    <span
                                                        wire:click="edit({{ $kriteria->id }}, 'kriteria')">{{ $kriteria->kriteria }}</span>
                                                @endif
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                @if ($editId === $kriteria->id && $editField === 'label')
                                                    <input type="text" wire:model="editValue"
                                                        wire:keydown.enter="update">
                                                @else
                                                    <span
                                                        wire:click="edit({{ $kriteria->id }}, 'label')">{{ $kriteria->label }}</span>
                                                @endif
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                @if ($editId === $kriteria->id && $editField === 'bobot')
                                                    <input type="text" wire:model="editValue"
                                                        wire:keydown.enter="update">
                                                @else
                                                    <span
                                                        class=wire:click="edit({{ $kriteria->id }}, 'bobot')">{{ $kriteria->bobot }}</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @if ($kriterias->isEmpty())
                                <p class="text-center py-4">No criteria found.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
