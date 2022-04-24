@component('layouts.app', ['isLanding' => true, 'fullWidth' => true])
    <x-metadata page="blocks" />

    @section('content')
        <x-cauri-container>
            <div x-cloak class="w-full">
                <div class="flex relative justify-between items-center">
                    <h1 class="mb-3">@lang('pages.blocks.title')</h1>
                </div>

                <livewire:block-table />
            </div>
        </x-cauri-container>
    @endsection
@endcomponent
