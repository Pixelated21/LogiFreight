<div class="bg-gray-100 dark:bg-gray-900 w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center">


    <div class="w-full flex justify-evenly flex-col h-full">


        <h1 class="text-2xl  md:text-4xl font-bold leading-tight mt-12 dark:text-gray-200 ">Registration </h1>

        <form wire:submit.prevent="createUser" class="space-y-3">


            <div class="flex gap-5">
                <x-Form.input wire:model="userInfo.fname" :error="$errors->first('userInfo.fname')" placeholder="First Name" autofocus/>
                <x-Form.input wire:model="userInfo.lname" :error="$errors->first('userInfo.lname')" placeholder="Last Name"/>
            </div>

            <x-Form.input wire:model="user.email" :error="$errors->first('user.email')" placeholder="Email"/>


            <x-Form.select wire:model="userInfo.salutation" :error="$errors->first('userInfo.salutation')">
                <x-Form.select-options selected disabled title="Select Gender"/>
                <x-Form.select-options value="Sir" title="Sir"/>
                <x-Form.select-options value="Mr" title="Mr"/>
                <x-Form.select-options value="Mrs" title="Mrs"/>
                <x-Form.select-options value="Miss" title="Miss"/>
            </x-Form.select>

            <x-Form.date wire:model="userInfo.dob" :error="$errors->first('userInfo.dob')" name="dob"/>

            <div class="flex gap-5">
                <x-Form.input type="password" wire:model="password" :error="$errors->first('password')" name="password" placeholder="Password"/>
                <x-Form.input type="password" wire:model="password_confirmation" name="password_confirmation" placeholder="Verify Password"/>
            </div>


            <x-Buttons.button-1 class="bg-purple-600 font-semibold text-gray-300  hover:bg-purple-700 hover:text-white">

                <x-slot name="spinner">
                    <i wire:loading.delay.longer="cr    eateUser" class="gg-spinner-two-alt"></i>
                </x-slot>

                <x-slot name="title">
                    Register
                </x-slot>

            </x-Buttons.button-1>

        </form>

        <div>
            <hr class="my-6 border-gray-500 w-full">

            <p class="text-center mt-8 dark:text-gray-200">Already Have an account?<br>
                <a href="{{route('login')}}"
                   class="text-purple-500 dark:text-gray-200 duration-300 dark:hover:text-purple-500 hover:text-purple-700  font-semibold">
                    Login To Your Account
                </a>
            </p>
        </div>


    </div>
</div>
