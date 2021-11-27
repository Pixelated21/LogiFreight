<div>
    <x-Navigation.nav-1 :title="Auth::user()->member->name">


        <x-slot name="center">
            <x-Navigation.nav-1-link title="Packages"/>
            <x-Navigation.nav-1-link title="Orders"/>
            <x-Navigation.nav-1-link title="Payment"/>
        </x-slot>

        <x-slot name="end">
            <x-Navigation.nav-1-button wire:click="$emit('quickAlertsOpen')" title="Quick-Alerts"/>
        </x-slot>

    </x-Navigation.nav-1>
</div>
