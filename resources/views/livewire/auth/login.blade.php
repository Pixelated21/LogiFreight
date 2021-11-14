<div class="bg-gray-100 dark:bg-gray-900 w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center ">

    <div class="w-full h-full flex flex-col justify-evenly">

        <h1 class="text-2xl md:text-4xl font-bold leading-tight mt-12 dark:text-gray-200">Log into your account</h1>

        <form wire:submit.prevent="authenticate" class="space-y-3">

            <x-Form.input wire:model="email" :error="$errors->first('email')" placeholder="Email" autofocus/>

            <x-Form.input type="password" wire:model="password" :error="$errors->first('password')"
                          placeholder="Password"/>

            <x-Buttons.button-1
                class="bg-purple-600 disabled:opacity-40 font-semibold text-gray-300  hover:bg-purple-700 hover:text-white">

                <x-slot name="spinner">
                    <i wire:loading.delay.longer="authenticate" class="gg-loadbar  duration-300 transition"></i>
                </x-slot>

                <x-slot name="title">
                    Login
                </x-slot>

            </x-Buttons.button-1>

        </form>


        <div>
            <hr class=" border-gray-500 w-full">

            <p class="text-center mt-8 dark:text-gray-200">Dont Have an account?<br>
                <a href="{{route('register')}}"
                   class="text-purple-500 dark:text-gray-200 duration-300 dark:hover:text-purple-500 hover:text-purple-700  font-semibold">
                    Create An Account
                </a>
            </p>
        </div>
    </div>
</div>

@push('alerts')
<x-Alerts.alert-1 x-data="{alert:false}" alphName="alert" :type="session('alertType')" :title="session('alertTitle')" x-on:alert.window="alert = true; setTimeout(() => alert=false, 4000);"/>
@endpush

