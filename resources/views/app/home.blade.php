@component('layouts.app', ['isLanding' => true, 'fullWidth' => true])
    <x-metadata page="home" />

    @section('content')
        <livewire:network-status-block />

        <div class="bg-white dark:bg-theme-secondary-900">
            <x-cauri-container>
                <livewire:latest-records />
            </x-cauri-container>
        </div>
    @endsection
@endcomponent
