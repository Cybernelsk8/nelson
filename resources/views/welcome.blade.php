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
            <div class="flex justify-center items-center md:hidden"> class="active:border-t-2 border-violet-600"
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
        <section id="inicio" class=" grid sm:flex justify-center items-center h-screen">
            <div class=" sm:h-60 sm:w-60 flex">
                <span class="animate-ping relative inline-flex w-full rounded-full bg-violet-700 opacity-75"></span>
                <img src="{{ asset('img/logo.png') }}" alt="" class="sm:h-60 sm:w-60 absolute">
            </div>
            <div class="grid justify-items-center">
                <h1 class="text-5xl sm:text-7xl font-bold text-gray-400"> < Cybernelsk8 /> </h1>
                <h3 class="text-2xl sm:text-4xl font-bold text-gray-400">Developer</h3>
            </div>
        </section>
        
        <section id="sobre_mi" class="h-screen text-gray-400 py-4 flex items-center">
            <div class="grid sm:grid-cols-2 justify-items-center items-center">
                <article>
                    <h2 class="text-4xl font-bold mb-2">¿ Quien soy ?</h2>
                    <p class="text-lg text-justify first-letter:text-6xl first-letter:font-bold first-letter:mr-3 first-letter:float-left">
                        Me llamo <b>Nelson Vásquez</b> y soy un programador Jr. que trata de mejorar cada vez mas en sus hablididades como desarrolador de software.
                    </p>
                    <p>Actualmente me encuentro aprendiendo sobre el framework laravel y conociendo todas sus bondades; utilizando al maximo su stack de Livewire, AlpineJs y TailwindCss, trato de mejorar cada vez mas y lograr alcanzar la meta de ser un desarrollador<b> FULL STACK</b>.</p>
                </article>
                <img src="{{ asset('img/yo.jpg') }}" class=" w-96 h-96 rounded-full object-cover shadow-lg shadow-violet-700 border-4 p-1 transform hover:scale-110 border-violet-700 duration-300">
            </div>
        </section>
        <section id="habilidades" class="h-screen text-gray-400 pt-4 flex items-center">
            <div class="grid sm:grid-cols-2 justify-items-center items-center">
                <img src="{{ asset('img/tall.png') }}" class=" w-96 h-96 rounded-full object-cover shadow-lg shadow-violet-700 border-4 p-1 transform hover:scale-110 border-violet-700 duration-300">
                <article class="w-full">
                    <h2 class="text-4xl font-bold mb-2">Habilidades</h2>
                    
                    <x-table show :data="$data" color="bg-stone-700">
                        <x-slot name="thead">
                            <x-th sort="" text="Habilidad"/>
                            <x-th sort="" text="Porcentaje"/>    
                        </x-slot>
                        <x-slot name="tbody">
                            <tr class="hover:bg-gray-200">
                                <td x-text="item.skill" class="px-4 text-violet-600 font-bold"></td>
                                <td x-init="progress=item.val">
                                    <x-progress-bar class="bg-violet-600" />
                                </td>
                            </tr>
                        </x-slot>
                    </x-table>
                    <p class="text-md text-justify">Entre las habilidades también podemos mencionar el patron de diseño Modelo Vista Controlador (MVC) y el paradigma de la programacion orientada a objetos (POO). Los porcentajes de las habilidades son aproximados, puedes juzgar mis habilidades en el blog donde de explico lo aprendido y comprendido. </p>
                    <p class="text-md text-justify">Hay mas lenguajes como C++, C#, .Net y Python los cuales los manejo de forma básica.</p>
                </article>
            </div>
        </section>
        <section id="servicios" class="h-screen text-gray-400 py-4 flex items-center transition">
            <div>
                <h2 class="text-4xl  font-bold">Servicios</h2>
                <article>
                    <p class="text-lg">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus soluta esse rem ipsum aut necessitatibus odio fuga voluptatem non iure maiores sequi, accusantium eum perspiciatis eligendi consectetur. Odit, commodi pariatur.</p>
                    <p class="text-lg">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus soluta esse rem ipsum aut necessitatibus odio fuga voluptatem non iure maiores sequi, accusantium eum perspiciatis eligendi consectetur. Odit, commodi pariatur.</p>
                </article>
            </div>
        </section>
        
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