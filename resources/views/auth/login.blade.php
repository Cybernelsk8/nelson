<x-GuestLayout class="bg-stone-800">
    <div class="flex justify-center items-center h-screen">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <x-card color="gray" class="bg-gray-700 shadow-violet-800 w-96">
                <x-slot name="content">
                    <div class="flex justify-center items-center mb-2">
                        <div class=" h-16 w-16 flex">
                            <span class="animate-ping relative inline-flex w-full rounded-full bg-violet-700 opacity-75"></span>
                            <img src="{{ asset('img/logo.png') }}" alt="" class="h-16 w-16 absolute">
                        </div>
                        <h1 class="text-4xl text-gray-400 font-bold">Cybernelsk8</h1>
                    </div>
                    <div class="space-y-2">
                        <div>
                            <label class="text-gray-400 font-bold">Email</label>
                            <x-input name="email" type="email" placeholder="example@example.com" class="border-violet-800">
                                <x-slot name="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </x-slot>
                            </x-input>
                        </div>
                        <div>
                            <label class="text-gray-400 font-bold">Password</label>
                            <x-input name="password" type="password" placeholder="password" class="border-violet-800">
                                <x-slot name="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                                    </svg>
                                </x-slot>
                            </x-input>
                        </div>
                    </div>
                    <div class="text-gray-400 text-sm font-bold my-2">
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2 border-2">
                            Recordar sesión
                        </label>
                        <a href="#" class="">¿Olvidaste la contraseña ?</a>
                    </div>
                    <div class="my-2">
                        <x-errors-validate />
                    </div>
                    <div class="flex space-x-2">
                        <a type="button" href="{{ route('register') }}" class="flex shadow-violet-800 items-center justify-center shadow-md px-2 py-1 border-2 rounded-lg font-bold uppercase transform hover:scale-105 tex-center bg-violet-500 w-full text-gray-200 border-gray-800 text-left">Register</a>
                        <x-button type="submit" text="Login" class="bg-red-500 shadow-red-800 w-full text-gray-200 border-red-800 text-left" />
                    </div>
                </x-slot>
            </x-card>
        </form>
    </div>
</x-GuestLayout>
