<div class="flex justify-center items-center pr-4">
    <div x-data="{ open: false }" class="flex justify-center items-center">
        <div @click="open = !open" class="relative border-b-4 border-transparent py-3 w-52" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100">
            <div class="cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </div>

            <div @click.away="open = false" x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute w-52 px-5 py-3 bg-white rounded-lg shadow-lg border-2 mt-5">
                <ul class="space-y-3 text-gray-600 ">
                    @isset($lista)
                    {{ $lista }}
                    @endisset
                </ul>
            </div>

        </div>
    </div>
</div>