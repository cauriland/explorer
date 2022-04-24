<?php

declare(strict_types=1);

use App\Services\Cache\NetworkCache;
use App\Services\Cache\NetworkStatusBlockCache;
use App\Services\MarketCap;

it('should calculate the supply', function () {
    (new NetworkStatusBlockCache())->setPrice('CAU', 'USD', 1.234);
    (new NetworkCache())->setSupply(fn () => 4.567 * 1e8);

    expect(MarketCap::get('CAU', 'USD'))->toBe(5.635678);
});

it('should return the supply formatted', function () {
    (new NetworkStatusBlockCache())->setPrice('CAU', 'USD', 1.234);
    (new NetworkCache())->setSupply(fn () => 4.567 * 1e8);

    expect(MarketCap::getFormatted('CAU', 'USD'))->toBe('$6');
});

it('should return the null if no price', function () {
    (new NetworkCache())->setSupply(fn () => 4.567 * 1e8);

    expect(MarketCap::get('CAU', 'USD'))->toBeNull;
    expect(MarketCap::getFormatted('CAU', 'USD'))->toBeNull;
});
