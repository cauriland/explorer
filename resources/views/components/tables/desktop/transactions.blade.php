@props([
    'transactions',
    'wallet',
    'useDirection' => false,
    'excludeItself' => false,
    'useConfirmations' => false,
    'isSent' => null,
    'isReceived' => null,
    'state' => [],
])

<x-cauri-tables.table sticky class="hidden md:block" wire:key="{{ Helpers::generateId('transactions', ...$state) }}">
    <thead>
        <tr>
            <x-tables.headers.desktop.id name="general.transaction.id" />
            <x-tables.headers.desktop.text name="general.transaction.timestamp" responsive />
            <x-tables.headers.desktop.address name="general.transaction.sender" icon />
            <x-tables.headers.desktop.address name="general.transaction.recipient" />
            <x-tables.headers.desktop.number name="general.transaction.amount" last-on="xl" />
            <x-tables.headers.desktop.number name="general.transaction.fee" responsive breakpoint="xl" />
            @if($useConfirmations)
                <x-tables.headers.desktop.number
                    name="general.transaction.confirmations"
                    responsive
                    breakpoint="xl"
                />
            @endisset
        </tr>
    </thead>
    <tbody>
        @foreach($transactions as $transaction)
            <x-cauri-tables.row wire:key="{{ Helpers::generateId('transaction-item', $transaction->id(), ...$state) }}">
                <x-cauri-tables.cell>
                    <x-tables.rows.desktop.transaction-id :model="$transaction" />
                </x-cauri-tables.cell>
                <x-cauri-tables.cell responsive>
                    <x-tables.rows.desktop.timestamp :model="$transaction" shortened />
                </x-cauri-tables.cell>
                <x-cauri-tables.cell>
                    @if($useDirection)
                        <x-tables.rows.desktop.sender-with-direction :model="$transaction" :wallet="$wallet" />
                    @else
                        <x-tables.rows.desktop.sender :model="$transaction" />
                    @endif
                </x-cauri-tables.cell>
                <x-cauri-tables.cell>
                    <x-tables.rows.desktop.recipient :model="$transaction" />
                </x-cauri-tables.cell>
                <x-cauri-tables.cell
                    class="text-right"
                    last-on="xl"
                >
                    @if($useDirection)
                        @if(($transaction->isSent($wallet->address()) || $isSent === true) && $isReceived !== true)
                            <x-tables.rows.desktop.amount-sent :model="$transaction" :exclude-itself="$excludeItself" />
                        @else
                            <x-tables.rows.desktop.amount-received :model="$transaction" :wallet="$wallet" />
                        @endif
                    @else
                        <x-tables.rows.desktop.amount :model="$transaction" />
                    @endif
                </x-cauri-tables.cell>
                <x-cauri-tables.cell
                    class="text-right"
                    responsive
                    breakpoint="xl"
                >
                    <x-tables.rows.desktop.fee :model="$transaction" />
                </x-cauri-tables.cell>
                @if($useConfirmations)
                    <x-cauri-tables.cell
                        class="text-right"
                        responsive
                        breakpoint="xl"
                    >
                        <x-tables.rows.desktop.confirmations :model="$transaction" />
                    </x-cauri-tables.cell>
                @endif
            </x-cauri-tables.row>
        @endforeach
    </tbody>
</x-cauri-tables.table>
