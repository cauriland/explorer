<x-cauri-tables.table sticky class="w-full">
    <thead>
        <tr>
            <x-tables.headers.desktop.id name="general.delegates.id" width="70" />
            <x-tables.headers.desktop.address name="general.delegates.name"/>
            <x-tables.headers.desktop.number name="general.delegates.votes"/>
        </tr>
    </thead>
    <tbody>
        @foreach($delegates as $delegate)
            <x-cauri-tables.row wire:key="{{ Helpers::generateId($delegate->username(), $delegate->resignationId()) }}">
                <x-cauri-tables.cell>
                    <div class="text-left">
                        <x-tables.rows.desktop.resignation-id :model="$delegate" />
                    </div>
                </x-cauri-tables.cell>
                <x-cauri-tables.cell>
                    <span class="hidden md:inline">
                        <x-tables.rows.desktop.username :model="$delegate" />
                    </span>
                    <span class="md:hidden">
                        <x-tables.rows.mobile.username-with-avatar :model="$delegate" />
                    </span>
                </x-cauri-tables.cell>
                <x-cauri-tables.cell class="text-right">
                    <span class="hidden sm:inline">
                        <x-tables.rows.desktop.votes :model="$delegate" />
                    </span>
                    <span class="sm:hidden">
                        <x-tables.rows.mobile.votes :model="$delegate" />
                    </span>
                </x-cauri-tables.cell>
            </x-cauri-tables.row>
        @endforeach
    </tbody>
</x-cauri-tables.table>
