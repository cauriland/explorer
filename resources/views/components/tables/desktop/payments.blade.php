<x-cauri-tables.table sticky class="hidden w-full md:block">
    <thead>
        <tr>
            <x-tables.headers.desktop.address
                name="general.transaction.address"
            />
            <x-tables.headers.desktop.number name="general.transaction.amount"/>
        </tr>
    </thead>
    <tbody>
        @foreach($payments as $payment)
            <x-cauri-tables.row wire:key="payment-{{ $payment->address() }}">
                <x-cauri-tables.cell last-on="md">
                    <x-general.identity :model="$payment" without-truncate />
                </x-cauri-tables.cell>
                <x-cauri-tables.cell
                    responsive
                    breakpoint="md"
                    class="text-right"
                >
                    <x-tables.rows.desktop.amount :model="$payment" />
                </x-cauri-tables.cell>
            </x-cauri-tables.row>
        @endforeach
    </tbody>
</x-cauri-tables.table>
