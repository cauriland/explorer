<x-cauri-tables.table sticky class="w-full">
    <thead>
        <tr>
            <x-tables.headers.desktop.text name="pages.delegates.order" width="70" />
            <x-tables.headers.desktop.address name="pages.delegates.name" />
            <x-tables.headers.desktop.text name="pages.delegates.forging_at" responsive breakpoint="sm" />
            <x-tables.headers.desktop.status name="pages.delegates.status" last-on="md"  />
            <x-tables.headers.desktop.text
                name="pages.delegates.block_id"
                responsive
                breakpoint="md"
                class="text-right"
            />
        </tr>
    </thead>
    <tbody>
        @foreach($delegates as $delegate)
            <x-cauri-tables.row
                wire:key="{{ Helpers::generateId($delegate->publicKey(), $round, $delegate->status()) }}"
                :danger="$delegate->keepsMissing()"
                :warning="$delegate->justMissed()"
            >
                <x-cauri-tables.cell>
                    <x-tables.rows.desktop.slot-id :model="$delegate" />
                </x-cauri-tables.cell>
                <x-cauri-tables.cell>
                    <span class="hidden md:inline">
                        <x-tables.rows.desktop.username :model="$delegate->wallet()" />
                    </span>
                    <span class="md:hidden">
                        <x-tables.rows.mobile.username-with-avatar :model="$delegate->wallet()" />
                    </span>
                </x-cauri-tables.cell>
                <x-cauri-tables.cell responsive breakpoint="sm">
                    <x-tables.rows.desktop.slot-time :model="$delegate" />
                </x-cauri-tables.cell>
                <x-cauri-tables.cell last-on="md">
                    <x-tables.rows.desktop.round-status :model="$delegate" />
                </x-cauri-tables.cell>
                <x-cauri-tables.cell class="text-right" responsive breakpoint="md" >
                    <x-tables.rows.desktop.wallet-last-block :model="$delegate" />
                </x-cauri-tables.cell>
            </x-cauri-tables.row>
        @endforeach
    </tbody>
</x-cauri-tables.table>
