<?php

declare(strict_types=1);

use App\Services\Blockchain\Network;
use CauriLand\Crypto\Networks\Devnet;
use CauriLand\Crypto\Networks\Mainnet;
use BitWasp\Bitcoin\Network\Network as Bitwasp;
use Carbon\Carbon;
use function Tests\fakeKnownWallets;

it('should have all required properties', function (array $config) {
    fakeKnownWallets();

    $subject = new Network($config);

    expect($subject->name())->toBe($config['name']);
    expect($subject->alias())->toBe($config['alias']);
    expect($subject->api())->toBe($config['api']);
    expect($subject->currency())->toBe($config['currency']);
    expect($subject->currencySymbol())->toBe($config['currencySymbol']);
    expect($subject->confirmations())->toBe($config['confirmations']);
    expect($subject->knownWallets())->toBeArray();
    expect($subject->canBeExchanged())->toBe($config['canBeExchanged']);
    expect($subject->epoch())->toBeInstanceOf(Carbon::class);
    expect($subject->delegateCount())->toBe($config['delegateCount']);
    expect($subject->blockTime())->toBe($config['blockTime']);
    expect($subject->blockReward())->toBe($config['blockReward']);
    expect($subject->config())->toBeInstanceOf(Bitwasp::class);
})->with([
    [[
        'name'             => 'Cauri Public Network',
        'alias'            => 'mainnet',
        'currency'         => 'CAU',
        'api'              => 'https://wallets.cauri.cm/api',
        'currencySymbol'   => 'ꚦ',
        'confirmations'    => 101,
        'knownWallets'     => 'https://raw.githubusercontent.com/cauriland/common/master/mainnet/known-wallets-extended.json',
        'canBeExchanged'   => true,
        'epoch'            => Mainnet::new()->epoch(),
        'delegateCount'    => 101,
        'blockTime'        => 8,
        'blockReward'      => 2,
        'base58Prefix'     => 28,
    ]],
    [[
        'name'             => 'Cauri Development Network',
        'alias'            => 'devnet',
        'api'              => 'https://dwallets.cauri.cm/api',
        'currency'         => 'DCAU',
        'currencySymbol'   => 'Dꚦ',
        'confirmations'    => 101,
        'canBeExchanged'   => false,
        'epoch'            => Devnet::new()->epoch(),
        'delegateCount'    => 101,
        'blockTime'        => 8,
        'blockReward'      => 2,
        'base58Prefix'     => 30,
    ]],
]);
