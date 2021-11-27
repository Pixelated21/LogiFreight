<div>
    <div x-data="{}">
        <x-Table.table title="Quick Alerts">

            <x-slot name="button">

                <x-Form.input placeholder="Search"/>
            </x-slot>

            <x-slot name="thead">
                <x-Table.table-head title="Tracking Number"/>
                <x-Table.table-head title="Package Value"/>
                <x-Table.table-head title="Description"/>
                <x-Table.table-head title="Courier"/>
                <x-Table.table-head title="Status"/>
            </x-slot>

            <x-slot name="tbody">
                @forelse($alerts as $alert)
                    <x-Table.table-row>
                        <x-Table.table-cell :title="$alert->tracking_nbr"/>
                        <x-Table.table-cell :title="$alert->package_value"/>
                        <x-Table.table-cell :title="$alert->desc"/>
                        <x-Table.table-cell :title="$alert->courier->name"/>
                        <x-Table.table-cell :title="$alert->status"/>
                    </x-Table.table-row>
                @empty
                @endforelse
            </x-slot>

            <x-slot name="pagination">
                {{$alerts->links()}}
            </x-slot>

        </x-Table.table>
    </div>
</div>
