<x-AppLayout>
    <div class="p-8">
        <div>
            <h1 class="text-center text-3xl font-bold">COMPLEMENTOS QUE SE PUEDEN USAR</h1>
        </div>

        {{-- LOGIN --}}
        <hr class="my-4">
        <h4 class="text-xl text-center py-4">Login</h4>
        <div>
            @if (session('info'))
            <x-toast-alert text="{{ session('info') }}" class="bg-green-500 text-green-700 border-green-600 shadow-green-800 ">
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </x-slot>
            </x-toast-alert>
            @endif

            @if ($errors->any())
                <x-toast-alert text="Este es el mensaje de error" class="absolute bg-red-500 text-red-700 border-red-600 shadow-red-800">
                    <x-slot name="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                    </x-slot>
                </x-toast-alert>
            @endif
            <x-card color="gray" class="bg-gray-800 shadow-xl shadow-indigo-900">
                <x-slot name="content">
                    <h4 class="mb-4 text-4xl text-gray-600 font-bold uppercase text-center">
                        Login
                    </h4>
                    <form action="{{ route('prueba') }}" method="POST">
                        @csrf
                        <div>
                            <label class="text-gray-400 font-bold">Email</label>
                            <x-input name="user" color="border-indigo-500" placeholder="example@example.com">
                                <x-slot name="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                      </svg>
                                </x-slot>
                            </x-input>
                        </div>
                        <div>
                            <label class="text-gray-400 font-bold">Password</label>
                            <x-input name="pass" type="password" color="border-indigo-500" placeholder="....."  >
                                <x-slot name="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                                      </svg>
                                </x-slot>
                            </x-input>
                        </div>
                        <div class="text-gray-400 font-bold">
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2 border-2">
                                Recordar sesión
                            </label>
                            <a href="#">¿Olvidaste la contraseña ?</a>
                        </div>
                        <div class="text-center">
                            <x-errors-validate />
                        </div>
                        <div class="flex justify-center mt-4">
                            <x-button type="submit" text="Login" class="bg-gray-500 w-full text-gray-200 border-gray-800 text-left" />
                        </div>
                    </form>    
                </x-slot>
            </x-card>
        </div>

        {{-- NAVBAR --}}
        <hr class="my-4">
        <h4 class="text-xl text-center py-4">Navbar</h4>
        <div>
            <x-navbar class="bg-gray-800 border-gray-500 text-gray-300" />
        </div>

         {{-- ASIDEBAR --}}
         <hr class="my-4">
         <h4 class="text-xl text-center py-4">Barra lateral</h4>
         <div>
             <x-aside class="bg-gray-800 border-gray-500" />
         </div>
        
        {{-- DATA TABLE --}}
        <h4 class="text-xl text-center py-4">Data table</h4>
        <div>
            <x-table :data="$data" color="bg-blue-800">
                <x-slot name="thead">
                    <x-th sort="id" text="no" />
                    <x-th sort="name" text="nombre" /> 
                    <x-th sort="email" text="correo" />      
                    <th width="10" class="th text-gray-500">
                        Acciones
                    </th>    
                </x-slot>
                <x-slot name="tbody">
                    <tr class="hover:bg-gray-100 text-xs">
                        <td x-text="item.id" class="px-4 py-2  whitespace-nowrap  text-gray-500"></td>
                        <td x-text="item.name" class="px-2 py-2  whitespace-nowrap  text-gray-500"></td>
                        <td x-text="item.email" class="px-2 py-2  whitespace-nowrap  text-gray-500"></td>
                        <td width="10" class="px-4 py-2  whitespace-nowrap  text-gray-500">
                            <div class="flex space-x-2">
                                <button class="transform hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                      </svg>
                                </button>
                                <button class="transform hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                      </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                </x-slot>
            </x-table>

            <x-table :data="$data" show="hidden" color="bg-gray-800">
                <x-slot name="thead">
                    <x-th sort="id" text="no" />
                    <x-th sort="name" text="nombre" /> 
                    <x-th sort="email" text="correo" />      
                    <th width="10" class="th text-gray-500">
                        Acciones
                    </th>    
                </x-slot>
                <x-slot name="tbody">
                    <tr class="hover:bg-gray-100 text-xs">
                        <td x-text="item.id" class="px-4 py-2  whitespace-nowrap  text-gray-500"></td>
                        <td x-text="item.name" class="px-2 py-2  whitespace-nowrap  text-gray-500"></td>
                        <td x-text="item.email" class="px-2 py-2  whitespace-nowrap  text-gray-500"></td>
                        <td width="10" class="px-4 py-2  whitespace-nowrap  text-gray-500">
                            <div class="flex space-x-2">
                                <button class="transform hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                      </svg>
                                </button>
                                <button class="transform hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                      </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                </x-slot>
            </x-table>
        </div>

        {{-- USER CARD --}}
        <hr class="my-4">
        <h4 class="text-xl text-center py-4">USER CARDS</h4>
        <div>
            <x-user-card name="Gerber Martinez">
                <x-slot name="lista">
                    <li class="font-medium">
                        <a href="#" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-blue-700">
                            <div class="mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                                  </svg>
                            </div>
                            {{__('Opcion 1')}}
                        </a>
                    </li>
                    <li class="font-medium">
                        <a href="#" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-blue-700">
                            <div class="mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                  </svg>
                            </div>
                            {{__('Opcion 2')}}
                        </a>
                    </li>
                </x-slot>
            </x-user-card>
        </div>

        {{-- BOTONES --}}
        
        <hr class="my-4">
        <h4 class="text-xl text-center py-4">Botones e inputs</h4>
        <div >
            <div class="flex space-x-2 py-4">
                <x-button text="Button" class="bg-red-500 text-red-200 border-red-700 shadow-red-500" />
                <x-button text="Button" class="bg-blue-500 text-blue-200 border-blue-700 shadow-blue-500" />
                <x-button text="Button" class="bg-lime-500 text-lime-200 border-lime-700 shadow-lime-500" />
                <x-button text="Button" class="bg-yellow-500 text-yellow-200 border-yellow-700 shadow-yellow-500" />
            </div>

            <div class="grid grid-cols-2 gap-3 ">
                <div>
                    <label>Etiqueta del campo</label>
                    <x-input class="border-blue-500" placeholder="Aqui el texto cualquiera"  />
                </div>
                <div>
                    <label>Etiqueta del campo</label>
                    <x-input class="border-green-500" placeholder="Aqui el texto cualquiera"  />
                </div>
                <x-input type="text" class="border-red-500" placeholder="Aqui el texto cualquiera"  />
                <x-input placeholder="Buscar ....">
                    <x-slot name="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                          </svg>
                    </x-slot>
                </x-input>
            </div>
        </div>

        {{-- MODAL --}}
        <hr class="my-4">
        <h4 class="text-xl text-center py-4">Modal</h4>
        <div x-data="{open:false}">
            <div class="flex justify-center">
                <x-button @click="open=true" text="abrir modal" class="bg-blue-500 text-blue-200 border-blue-700" />
            </div>    
            <x-modal color="lime">
                <x-slot name="title">
                    Este es el encabezado del modal
                </x-slot>
                <x-slot name="content">
                    Aqui puede ir todo el contenido que se requiera
                </x-slot>
                <x-slot name="foot">
                    <div class="flex space-x-2">
                        <x-button @click="open=false" text="cancelar" class="bg-red-500 text-red-200 border-red-700" />
                        <x-button text="aceptar" class="bg-blue-500 text-blue-200 border-blue-700" />
                    </div>
                </x-slot>
            </x-modal>

        </div>
        <br>
        {{-- MODAL ALERTA --}}
        <div x-data="{open:false}">
            <div class="flex justify-center">
                <x-button @click="open=true" text="abrir modal alerta" class="bg-red-500 text-red-200 border-red-700" />
            </div>    
            <x-modal color="red">
                <x-slot name="title">
                    Este es el encabezado del modal
                </x-slot>
                <x-slot name="content">
                    <div class="flex justify-between items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                       <p> ¿ Aqui puede ir todo el contenido que se requiera ? </p>
                    </div>
                </x-slot>
                <x-slot name="foot">
                    <div class="flex justify-end space-x-2">
                        <x-button @click="open=false" text="No" class="bg-red-500 text-red-200 border-red-700" />
                        <x-button text="Si" class="bg-green-500 text-green-200 border-green-700" />
                    </div>
                </x-slot>
            </x-modal>

        </div>

        {{-- SPIN --}}
        <hr class="my-4">
        <h4 class="text-xl text-center py-4">Spin, Ping, Pulce, Bounce y Barras de progreso</h4>
        <div class="flex justify-center mb-4">
            <x-spin class="border-t-red-500"/>
            <x-spin class=" border-x-lime-500"/>
            <x-spin class="border-t-green-500 border-x-green-500"/>
            <x-spin class="border-t-orange-500 border-4 h-14 w-14" />
        </div>

        {{-- PULSE --}}
        <div class="flex justify-center mb-4 space-x-2">
            <x-ping color="sky" size="3" />
            <x-ping color="blue" size="3" />
            <x-ping color="red" size="3" />
            <x-ping color="indigo" size="3" />
            <x-ping color="lime" size="3" />
            <x-ping color="gray" size="3" />
        </div>

        <div class="flex justify-center mb-4 space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 animate-bounce" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z" />
              </svg>
        </div>

        <div class="flex justify-center mb-4 space-x-2">
            <div class="border border-blue-300 shadow rounded-md p-4 max-w-sm w-full mx-auto">
                <div class="animate-pulse flex space-x-4">
                  <div class="rounded-full bg-slate-200 h-10 w-10"></div>
                  <div class="flex-1 space-y-6 py-1">
                    <div class="h-2 bg-slate-200 rounded"></div>
                    <div class="space-y-3">
                      <div class="grid grid-cols-3 gap-4">
                        <div class="h-2 bg-slate-200 rounded col-span-2"></div>
                        <div class="h-2 bg-slate-200 rounded col-span-1"></div>
                      </div>
                      <div class="h-2 bg-slate-200 rounded"></div>
                    </div>
                  </div>
                </div>
              </div>
        </div>

        {{-- BARRA DE PROGRESO --}}
        <x-progress-bar class="bg-blue-500" ancho="h-1" />
        <x-progress-bar class="bg-lime-500" ancho="h-2" />
        <x-progress-bar class="bg-red-500"  ancho="h-4"/>

        
        {{-- ALERTAS --}}
        <hr class="my-4">
        <h4 class="text-xl text-center py-4">ALERTAS</h4>
        <div x-data="{open:true}">
            <x-alert text="Aqui va el mensaje que yo quiera" class="bg-lime-500 w-96 border-lime-800 shadow-lime-500 text-lime-700">
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </x-slot>
            </x-alert>

            <x-alert text="Aqui va el mensaje que yo quiera" class="bg-blue-500 border-blue-800 shadow-blue-500" >
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                </x-slot>
            </x-alert>

            <x-alert text="Aqui va el mensaje que yo quiera" class="bg-red-500 shadow-red-500 border-red-800" >
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                </x-slot>
            </x-alert>
        </div>

        
        {{-- TOOLTIPS --}}
        <hr class="my-4">
        <h4 class="text-xl text-center py-4">TOOLTIPS</h4>
        <div class="flex justify-center">
            <x-tooltip  class="mt-6 w-64">
            
                <x-slot name="msgtooltip">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo debitis sint optio suscipit, eaque provident totam, sed doloribus nisi voluptatibus odit esse itaque magni! Amet, in! Unde quae provident quas!</p>
                </x-slot>
                <p>Aqui esta el tooltip coloca tu cursor encima</p>
            </x-tooltip>

            {{-- TOOLTIP CON COLORES --}}
            <x-tooltip  class="mt-6 w-64 bg-lime-300 border-lime-500">
                <x-slot name="msgtooltip">
                    <p>¡¡ texto corto para probar el tooltip y lo vean !!</p>
                </x-slot>
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2M3 12l6.414 6.414a2 2 0 001.414.586H19a2 2 0 002-2V7a2 2 0 00-2-2h-8.172a2 2 0 00-1.414.586L3 12z" />
                      </svg>
                </x-slot>
                <p>Ejemplo con colores en el tooltip</p>
            </x-tooltip>

        </div>

        {{-- CARDS --}}
        <hr class="my-4">
        <h4 class="text-xl text-center py-4">CARDS</h4>
        <div class="grid sm:grid-cols-4 gap-4">
            <x-card>
                <x-slot name="title">
                    Titulo del card
                </x-slot>
                <x-slot name="content">
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio dolorem deleniti aliquid, error laborum neque quod odit recusandae doloremque. Ducimus id iste deserunt autem ut? Tempore laudantium molestias minima sit!
                    </p>
                </x-slot>
                <x-slot name="foot">
                    Aqui puede ir un pie de pagina si se decea
                </x-slot>
            </x-card>
            <x-card color="red">
                <x-slot name="title">
                    Titulo del card
                </x-slot>
                <x-slot name="content">
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio dolorem deleniti aliquid, error laborum neque quod odit recusandae doloremque. Ducimus id iste deserunt autem ut? Tempore laudantium molestias minima sit!
                    </p>
                </x-slot>
                <x-slot name="foot">
                    Aqui puede ir un pie de pagina si se decea
                </x-slot>
            </x-card>
            <x-card color="blue">
                <x-slot name="title">
                    Titulo del card
                </x-slot>
                <x-slot name="content">
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio dolorem deleniti aliquid, error laborum neque quod odit recusandae doloremque. Ducimus id iste deserunt autem ut? Tempore laudantium molestias minima sit!
                    </p>
                </x-slot>
                <x-slot name="foot">
                    Aqui puede ir un pie de pagina si se decea
                </x-slot>
            </x-card>
            <x-card color="indigo">
                <x-slot name="title">
                    Titulo del card
                </x-slot>
                <x-slot name="content">
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio dolorem deleniti aliquid, error laborum neque quod odit recusandae doloremque. Ducimus id iste deserunt autem ut? Tempore laudantium molestias minima sit!
                    </p>
                </x-slot>
                <x-slot name="foot">
                    Aqui puede ir un pie de pagina si se decea
                </x-slot>
            </x-card>
        </div> 
    
    </div>



    {{-- para que se apliquen los colores del modal y cards --}}

    <div class="border-lime-600">
        <div class="bg-lime-400">
            <div class="bg-lime-100"></div>
        </div>
    </div>

    <div class="border-red-600">
        <div class="bg-red-400">
            <div class="bg-red-100"></div>
        </div>
    </div>

    <div class="border-blue-600">
        <div class="bg-blue-400">
            <div class="bg-blue-100"></div>
        </div>
    </div>

    <div class="border-indigo-600">
        <div class="bg-indigo-400">
            <div class="bg-indigo-100"></div>
        </div>
    </div>
    <div class="border-gray-600">
        <div class="bg-gray-400">
            <div class="bg-gray-100"></div>
        </div>
    </div>

</x-AppLayout>