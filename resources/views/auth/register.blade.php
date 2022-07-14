<x-GuestLayout class="bg-stone-800">
    <div class="flex justify-center items-center h-screen">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <x-card color="gray" class="bg-gray-800 shadow-violet-800 w-96">
                <x-slot name="content">
                    <div class="flex justify-center items-center mb-2">
                        <div class=" h-16 w-16 flex">
                            <span class="animate-ping relative inline-flex w-full rounded-full bg-violet-700 opacity-75"></span>
                            <img src="{{ asset('img/logo.png') }}" alt="" class="h-16 w-16 absolute">
                        </div>
                        <h1 class="text-4xl text-gray-400 font-bold">Register</h1>
                    </div>
                    <div class="space-y-2">
                        <div>
                            <label class="text-gray-400 font-bold">Full name</label>
                            <x-input class="border-violet-700" placeholder="full name" name="name">
                                <x-slot name="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </x-slot>
                            </x-input>
                        </div>
                        <div>
                            <label class="text-gray-400 font-bold">Email</label>
                            <x-input type="email" class="border-violet-700" placeholder="example@example.com" name="email">
                                <x-slot name="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </x-slot>
                            </x-input>
                        </div>
                        <div>
                            <label class="text-gray-400 font-bold">Password</label>
                            <x-input type="password" class="border-violet-700" placeholder="..............." name="password">
                                <x-slot name="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                                    </svg>
                                </x-slot>
                            </x-input>
                        </div>
                        <div>
                            <label class="text-gray-400 font-bold">Confirm Password</label>
                            <x-input type="password"  class="border-violet-700" placeholder="..............." name="password_confirmation">
                                <x-slot name="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                                    </svg>
                                </x-slot>
                            </x-input>
                        </div>
                    </div>
                    <div class="my-2">
                        <x-errors-validate />
                    </div>
                    <div class="flex space-x-2 mt-4">
                        <a type="button" href="/" class="flex shadow-violet-800 items-center justify-center shadow-md px-2 py-1 border-2 rounded-lg font-bold uppercase transform hover:scale-105 tex-center bg-violet-500 w-full text-gray-200 border-gray-800 text-left">Home</a>
                        <x-button type="submit" text="Sing in" class="bg-red-500 shadow-red-800 w-full text-gray-200 border-red-800 text-left" />
                    </div>
                </x-slot>
            </x-card>
        </form>
    </div>
</x-GuestLayout>
