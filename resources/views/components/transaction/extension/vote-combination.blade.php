<div class="bg-white border-t border-theme-secondary-300 dark:border-theme-secondary-800 dark:bg-theme-secondary-900">
    <x-cauri-container>
        <div class="w-full">
            <div class="flex relative justify-between items-end">
                <h3>@lang('general.transaction.types.vote-combination')</h3>
            </div>

            <x-cauri-tables.table class="hidden md:block">
                <thead>
                    <tr>
                        <x-tables.headers.desktop.text name="general.transaction.delegate" />
                        <x-tables.headers.desktop.text class="text-center" name="general.delegates.rank" />
                        <x-tables.headers.desktop.text class="text-right" name="general.transaction.type" />
                    </tr>
                </thead>
                <tbody>
                    <x-cauri-tables.row>
                        <x-cauri-tables.cell>
                            <div class="flex items-center space-x-4">
                                <x-general.avatar :identifier="$transaction->voted()->address()" no-shrink />

                                <div class="flex items-center space-x-3 max-w-full">
                                    <a href="{{ route('wallet', $transaction->voted()->address()) }}" class="font-semibold link">
                                        {{ $transaction->voted()->username() }}
                                    </a>
                                    <span class="min-w-0 font-semibold text-theme-secondary-500 dark:text-theme-secondary-700">
                                        <x-truncate-dynamic>{{ $transaction->voted()->address() }}</x-truncate-dynamic>
                                    </span>
                                </div>

                            </div>
                        </x-cauri-tables.cell>
                        <x-cauri-tables.cell>
                            <span class="mx-auto">#<x-number>{{ $transaction->voted()->rank() }}</x-number></span>
                        </x-cauri-tables.cell>
                        <x-cauri-tables.cell width="130">
                            <div class="flex flex-grow justify-end items-center space-x-4">
                                <span>@lang('pages.transaction.vote')</span>

                                <div class="vote-circle">
                                    <x-cauri-icon name="app-transactions.vote" style="success" />
                                </div>
                            </div>
                        </x-cauri-tables.cell>
                    </x-cauri-tables.row>
                    <x-cauri-tables.row>
                        <x-cauri-tables.cell>
                            <div class="flex items-center space-x-4">
                                <x-general.avatar :identifier="$transaction->unvoted()->address()" no-shrink />

                                <div class="flex items-center space-x-3 max-w-full">
                                    <a href="{{ route('wallet', $transaction->unvoted()->address()) }}" class="font-semibold link">
                                        {{ $transaction->unvoted()->username() }}
                                    </a>
                                    <span class="min-w-0 font-semibold text-theme-secondary-500 dark:text-theme-secondary-700">
                                        <x-truncate-dynamic>{{ $transaction->unvoted()->address() }}</x-truncate-dynamic>
                                    </span>
                                </div>
                            </div>
                        </x-cauri-tables.cell>
                        <x-cauri-tables.cell>
                            <span class="mx-auto">#<x-number>{{ $transaction->unvoted()->rank() }}</x-number></span>
                        </x-cauri-tables.cell>
                        <x-cauri-tables.cell width="130">
                            <div class="flex flex-grow justify-end items-center space-x-4">
                                <span>@lang('pages.transaction.unvote')</span>

                                <div class="unvote-circle">
                                    <x-cauri-icon name="app-transactions.unvote" style="danger" />
                                </div>
                            </div>
                        </x-cauri-tables.cell>
                    </x-cauri-tables.row>
                </tbody>
            </x-cauri-tables.table>

            <div class="divide-y md:hidden table-list-mobile">
                <div class="table-list-mobile-row">
                    <div>
                        @lang('general.transaction.delegate')

                        <div class="flex items-center space-x-3">
                            <a href="{{ route('wallet', $transaction->voted()->address()) }}" class="font-semibold link">
                                {{ $transaction->voted()->username() }}
                            </a>

                            <x-general.avatar :identifier="$transaction->voted()->address()" />
                        </div>
                    </div>

                    <div>
                        @lang('general.delegates.rank')

                        <span>#<x-number>{{ $transaction->voted()->rank() }}</x-number></span>
                    </div>

                    <div>
                        @lang('general.transaction.type')

                        <div class="flex items-center space-x-3">
                            <span>@lang('pages.transaction.vote')</span>
                            <x-cauri-icon name="app-transactions.vote" style="success" />
                        </div>
                    </div>
                </div>

                <div class="table-list-mobile-row">
                    <div>
                        @lang('general.transaction.delegate')

                        <div class="flex items-center space-x-3">
                            <a href="{{ route('wallet', $transaction->unvoted()->address()) }}" class="font-semibold link">
                                {{ $transaction->unvoted()->username() }}
                            </a>

                            <x-general.avatar :identifier="$transaction->unvoted()->address()" />
                        </div>
                    </div>

                    <div>
                        @lang('general.delegates.rank')

                        <span>#<x-number>{{ $transaction->unvoted()->rank() }}</x-number></span>
                    </div>

                    <div>
                        @lang('general.transaction.type')

                        <div class="flex items-center space-x-3">
                            <span>@lang('pages.transaction.unvote')</span>
                            <x-cauri-icon name="app-transactions.unvote" style="danger" />
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </x-cauri-container>
</div>
