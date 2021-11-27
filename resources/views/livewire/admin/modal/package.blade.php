<div>
    <div x-data="{newPackage:false}" x-on:new-package-open.window="newPackage = true" x-on:new-package-close.window="newPackage = false">
        <x-Modals.modal-1 alphName="newPackage" :errors="$errors->all()" title="New Package">
            <x-slot name="body">
                <form wire:submit.prevent="newProduct" class="space-y-5">
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <x-Form.input wire:model="package.member_id" placeholder="Member"/>
                        <x-Form.input wire:model="package.courier_id" placeholder="Courier"/>
                        <x-Form.input wire:model="package.package_type_id" placeholder="Package Type"/>
                        <x-Form.input wire:model="package.courier_tracking_number" placeholder="Courier Tracking Number"/>
                        <x-Form.input wire:model="package.weight" placeholder="Weight"/>
                        <x-Form.input wire:model="package.internal_tracking_nbr" placeholder="Internal Tracking Number"/>
                    </div>
                    <x-Form.input wire:model="package.estimated_cost" placeholder="Estimated Cost"/>

                    <div class="flex sm:flex-row flex-col gap-0 sm:gap-4">
                        <x-Buttons.button-1 @click.prevent="newPackage = false" class="bg-red-600 font-semibold text-gray-200 rounded py-2 px-4 hover:bg-red-700" title="Cancel" />
                        <x-Buttons.button-1 class="bg-blue-600 font-semibold text-gray-200 rounded py-2 px-4 hover:bg-blue-700" title="Create New Package" />
                    </div>
                </form>
            </x-slot>
        </x-Modals.modal-1>
    </div>
</div>
