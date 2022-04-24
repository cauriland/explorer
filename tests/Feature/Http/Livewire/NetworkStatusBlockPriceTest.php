<?php

declare(strict_types=1);

use App\Http\Livewire\NetworkStatusBlockPrice;
use App\Services\Cache\NetworkStatusBlockCache;
use Illuminate\Support\Facades\Config;
use Livewire\Livewire;

it('should render with price', function () {
    Config::set('explorer.network', 'production');

    (new NetworkStatusBlockCache())->setPrice('CAU', 'USD', 1.606);
    (new NetworkStatusBlockCache())->setHistoricalHourly('CAU', 'USD', collect());

    Livewire::test(NetworkStatusBlockPrice::class)->assertSee('1.61');
});
