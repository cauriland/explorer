@component('layouts.app', ['isLanding' => true, 'fullWidth' => true])
    <x-metadata page="transactions" />

    @section('content')
        <x-cauri-container>
            <livewire:transaction-table />
        </x-cauri-container>
    @endsection
@endcomponent
