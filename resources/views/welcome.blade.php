<x-AppLayout class="bg-stone-800">
    
    <nav class=" fixed z-20 w-full transform bg-opacity-90 flex items-center h-14 shadow-lg shadow-violet-700 bg-stone-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div id="menu" class="hidden text-gray-400 font-bold space-x-6 md:flex md:justify-center md:items-center w-full">
                <a href="#inicio" class="hover:border-b-4 border-violet-600">Inicio</a>
                <a href="#sobre_mi" class="hover:border-b-4 border-violet-600">Sobre mi</a>
                <a href="#habilidades" class="hover:border-b-4 border-violet-600">Habilidades</a>
                <a href="#servicios" class="hover:border-b-4 border-violet-600">Servicios</a>
                <a href="#">Blog</a>
                <a href="{{ route('login') }}">Iniciar sesión</a>
            </div>
            <div class="flex justify-center items-center md:hidden">
                <x-menu>
                    <x-slot name="lista">
                        <li class="font-medium"><a href="#inicio">Inicio</a></li>
                        <li class="font-medium"><a href="#sobre_mi">Sobre mi</a></li>
                        <li class="font-medium"><a href="#habilidades">Habilidades</a></li>
                        <li class="font-medium"><a href="#servicios">Servicios</a></li>
                        <li class="font-medium"><a href="#">Blog</a></li>
                        <li class="font-medium"><a href="{{ route('login') }}">Iniciar sesión</a></li>
                    </x-slot>
                </x-menu>
            </div>
        </div>
    </nav>
    <x-container>
        
        <x-sections.inicio />
        <x-sections.sobre-mi />
        <x-sections.habilidades :data="$data" />
        <x-sections.servicios />
         
    </x-container>

    <footer class="fixed bottom-0 h-14 bg-stone-800 border-t-2 border-gray-700 w-full flex items-center justify-center">
        <p class="px-5 py-3 hidden md:block text-center text-xl text-gray-400 font-bold">Cybernelsk8 © {{ date('Y') }}</p>
    </footer>

    <a href="#inicio" class="rounded-full flex justify-center items-center bg-stone-700 transform hover:bg-stone-900 hover:scale-110 w-12 h-12 fixed bottom-6 right-4 border-2 border-violet-600">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 11l7-7 7 7M5 19l7-7 7 7" />
        </svg>
    </a>
    
</x-AppLayout>