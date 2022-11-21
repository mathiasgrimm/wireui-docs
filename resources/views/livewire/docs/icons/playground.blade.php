<div>
    <div class="mb-4 flex gap-2">
        @foreach ($this::VARIANTS as $variant)
            <button
                @class([
                    'bg-teal-100 text-teal-600 dark:bg-slate-700 dark:text-slate-300 border-transparent font-medium' => $this->variant === $variant,
                    'text-gray-600 border-gray-200 dark:border-slate-600 dark:text-slate-500' => $this->variant !== $variant,
                    'focus:border-transparent focus:ring-teal-500 focus:bg-teal-100 dark:focus:ring-slate-500 dark:focus:bg-slate-700',
                    'border capitalize rounded px-2 py-1 outline-none focus:ring-2 focus:ring-offset-2 dark:focus:ring-offset-slate-800',
                    'transition-all ease-in-out duration-150',
                ])
                wire:click="$set('variant', '{{ $variant }}')"
                type="button"
            >
                {{ $variant }}
            </button>
        @endforeach
    </div>

    <x-input type="search" placeholder="Search" wire:model.debounce="search" />

    <div class="grid grid-cols-2 sm:grid-cols-4 xl:grid-cols-5 gap-4 p-2 mt-6 overflow-y-auto soft-scrollbar max-h-96" x-data>
        @forelse ($this->icons as $icon)
            <div wire:key="icons.{{ $this->variant }}.{{ $icon }}" class="group">
                <div class="relative h-[8.5rem]">
                    <button
                        class="
                            absolute inset-0 flex h-full w-full items-center justify-center
                            rounded-xl text-slate-500 border border-slate-200
                            group-hover:text-slate-600 group-hover:bg-slate-100
                            focus:ring-2 focus:ring-slate-200 focus:ring-offset-2
                            transition-all ease-in-out duration-150
                            dark:border-slate-600 dark:group-hover:bg-slate-600 dark:group-hover:text-slate-400
                            dark:focus:ring-slate-600 dark:focus:ring-offset-slate-800
                        "
                        x-on:click="$clipboard('{{ $this->makeCopyCode($icon) }}')"
                        type="button"
                    >
                        <span class="transition-transform duration-500 ease-in-out">
                            <x-icon class="w-8 h-8" :variant="$this->variant" :name="$icon" />
                        </span>
                    </button>

                    <div class="hidden group-hover:block absolute bottom-2 w-full cursor-pointer">
                        <div
                            class="flex items-center gap-x-2 w-full justify-center text-emerald-700 dark:text-slate-400"
                            type="button"
                        >
                            Copy
                            <x-icon name="clipboard" variant="solid" class="w-4 h-4" />
                        </div>
                    </div>
                </div>

                <div class="mt-2 truncate text-center text-sm tracking-wider text-slate-500" title="{{ $icon }}">
                    {{ $icon }}
                </div>
            </div>
        @empty
            <div class="col-span-full flex flex-col items-center justify-center text-gray-500 dark:text-slate-400">
                <x-icon name="face-frown" class="w-36 h-36 text-slate-200" />

                <p class="text-xl">
                    No icons match <b>"{{ $this->search }}"</b>
                </p>

                <x-button label="Clear search" wire:click="$set('search', '')" flat negative />
            </div>
        @endforelse
    </div>
</div>
