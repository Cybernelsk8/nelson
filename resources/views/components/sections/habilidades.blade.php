<section id="habilidades" class="h-screen text-gray-400 pt-4 flex items-center">
    <div class="grid sm:grid-cols-2 justify-items-center items-center">
        <img src="{{ asset('img/tall.png') }}" class=" w-96 h-96 rounded-full object-cover shadow-lg shadow-violet-700 border-4 p-1 transform hover:scale-110 border-violet-700 duration-300">
        <article class="w-full">
            <h2 class="text-4xl font-bold mb-2">Habilidades</h2>
            
            <x-table show :data="$data" color="bg-stone-700">
                <x-slot name="thead">
                    <x-th sort="skill" text="Habilidad"/>
                    <x-th sort="val" text="Porcentaje"/>    
                </x-slot>
                <x-slot name="tbody">
                    <tr class="hover:bg-gray-200">
                        <td class="px-4 text-violet-600 font-bold flex space-x-2">
                            <img :src="item.icon" class="rounded-full w-6" alt="">
                            <span x-text="item.skill"></span>
                        </td>
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