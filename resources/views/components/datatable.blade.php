<div class="m-10">
    @isset($header)
    <div class="grid sm:flex sm:justify-between sm:items-center">
        <div class="flex justify-center items-center text-gray-400">
            <small>Mostrar</small>
            <select wire:model="pageSize" wire:change="resetPage" class="border-none text-xs focus:ring-0 focus:border-0">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            <small>registros</small>
        </div>
        <div class="flex items-center border-2 rounded-lg overflow-hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-1 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            <input autofocus wire:model="search" wire:keypress="resetPage" placeholder="Buscar ..." type="search" class="text-xs border-none focus:ring-0 focus:border-0 w-full">  
        </div>
    </div>
    @endisset
    
    <div class="flex flex-col my-2 ">
        <div class="overflow-x-auto ">
            <div class="align-middle inline-block min-w-full">
                <div class=" shadow-md overflow-hidden border-2 border-lime-500 rounded-lg">
                    <table class="w-full divide-y divide-gray-200">
                        <thead class="bg-lime-500">
                            <tr>
                                {{ $thead }} 
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            {{ $tbody }}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @isset($foot)
    <div class="text-sm">
        {{ $data->links() }}
    </div>
    @endisset

</div>

