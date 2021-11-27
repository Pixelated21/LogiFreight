<div>

<div x-data="{quickAlerts:false}" x-on:quick-alerts-modal-open.window="quickAlerts = true" x-on:quick-alerts-modal-close.window="quickAlerts = false">
    <x-Modals.modal-2 alphName="quickAlerts">

        <form wire:submit.prevent="newQuickAlert" class="space-y-3 sm:space-y-8 flex flex-col justify-center items-center">

            <div>
                <p class="lg:text-4xl dark:text-gray-200 text-gray-600 lg:text-center md:text-center md:text-3xl text-2xl text-left font-bold -mt-5 mb-10">
                    New Quick Alert
                </p>
            </div>

            <div class="grid grid-cols-1 w-9/12  gap-x-4 gap-y-2 sm:grid-cols-2">
                <x-Form.input :error="$errors->first('alert.tracking_nbr')" wire:model="alert.tracking_nbr" placeholder="Tracking Number"/>

                <x-Form.select
                    field="name"
                    :options="$couriers"
                    :error="$errors->first('alert.courier_id')"
                    wire:model="alert.courier_id"
                />
            </div>

            <div class="grid grid-cols-1 w-9/12 gap-x-4 gap-y-2 sm:grid-cols-1">
                <x-Form.input :error="$errors->first('alert.package_value')"  wire:model="alert.package_value" placeholder="Package Value (USD)"/>
            </div>

            <div class="grid grid-cols-1 w-9/12 gap-x-4 gap-y-2 sm:grid-cols-1">
                <x-Form.input :error="$errors->first('alert.desc')" wire:model="alert.desc" class="w-1/2" placeholder="Describe your package"/>
            </div>



            <div class="flex flex-col sm:flex-row   w-9/12 sm:w-1/2 sm:gap-5">
                <x-Buttons.button-1 @click.prevent="quickAlerts = false" type="button" class="bg-red-600 text-center font-semibold text-gray-200 hover:bg-red-700" title="Cancel"/>
                <x-Buttons.button-1  class="bg-blue-500 text-center font-semibold text-gray-200 hover:bg-blue-700" title="Quick Alert">
                    <x-slot name="spinner">
                        <i wire:loading.delay.longer="newQuickAlert" class="gg-spinner-two-alt"></i>
                    </x-slot>
                </x-Buttons.button-1>
            </div>

        </form>

    </x-Modals.modal-2>
</div>

</div>
