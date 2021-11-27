<div>
    <div>
        <x-Navigation.nav-1 :title="Auth::user()->member->name">

            <x-slot name="end">
                <x-Navigation.nav-1-button wire:click="$emit('newPackageOpen')" title="New Package"/>
            </x-slot>

        </x-Navigation.nav-1>
    </div>
</div>
