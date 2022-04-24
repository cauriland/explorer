<?php

declare(strict_types=1);

use App\Services\MarketDataProviders\CoinGecko;

return [
    'network' => env('EXPLORER_NETWORK', 'development'),

    'uri_prefix' => env('EXPLORER_URI_PREFIX', 'cauri'),

    'market_data_provider_service' => env('EXPLORER_MARKET_DATA_PROVIDER_SERVICE', CoinGecko::class),

    'networks' => [
        'production' => [
            'name'             => env('EXPLORER_NETWORK_NAME', 'Cauri Public Network'),
            'alias'            => env('EXPLORER_NETWORK_ALIAS', 'mainnet'),
            'api'              => env('EXPLORER_NETWORK_API', 'https://wallets.cauri.cm/api'),
            'currency'         => env('EXPLORER_NETWORK_CURRENCY', 'CAU'),
            'currencySymbol'   => env('EXPLORER_NETWORK_CURRENCY_SYMBOL', 'ꚦ'),
            'confirmations'    => intval(env('EXPLORER_NETWORK_CONFIRMATIONS', 101)),
            'knownWallets'     => env('EXPLORER_NETWORK_KNOWN_WALLETS', 'https://raw.githubusercontent.com/cauriland/common/master/mainnet/known-wallets-extended.json'),
            'canBeExchanged'   => env('EXPLORER_NETWORK_CAN_BE_EXCHANGED', true),
            'hasTimelock'      => env('EXPLORER_NETWORK_HAS_TIMELOCK', false),
            'epoch'            => env('EXPLORER_NETWORK_EPOCH', '2022-04-07T00:32:58.934Z'),
            'delegateCount'    => intval(env('EXPLORER_NETWORK_DELEGATE_COUNT', 101)),
            'blockTime'        => intval(env('EXPLORER_NETWORK_BLOCK_TIME', 8)),
            'blockReward'      => intval(env('EXPLORER_NETWORK_BLOCK_REWARD', 1.5)),
            'base58Prefix'     => intval(env('EXPLORER_NETWORK_BASE58_PREFIX', 28)),
        ],
        'development' => [
            'name'             => env('EXPLORER_NETWORK_NAME', 'Cauri Development Network'),
            'api'              => env('EXPLORER_NETWORK_API', 'https://dwallets.cauri.cm/api'),
            'alias'            => env('EXPLORER_NETWORK_ALIAS', 'devnet'),
            'currency'         => env('EXPLORER_NETWORK_CURRENCY', 'DCAU'),
            'currencySymbol'   => env('EXPLORER_NETWORK_CURRENCY_SYMBOL', 'Dꚦ'),
            'confirmations'    => intval(env('EXPLORER_NETWORK_CONFIRMATIONS', 101)),
            'canBeExchanged'   => env('EXPLORER_NETWORK_CAN_BE_EXCHANGED', false),
            'hasTimelock'      => env('EXPLORER_NETWORK_HAS_TIMELOCK', true),
            'epoch'            => env('EXPLORER_NETWORK_EPOCH', '2022-04-07T00:32:58.934Z'),
            'delegateCount'    => intval(env('EXPLORER_NETWORK_DELEGATE_COUNT', 101)),
            'blockTime'        => intval(env('EXPLORER_NETWORK_BLOCK_TIME', 8)),
            'blockReward'      => intval(env('EXPLORER_NETWORK_BLOCK_REWARD', 1.5)),
            'base58Prefix'     => intval(env('EXPLORER_NETWORK_BASE58_PREFIX', 30)),
        ],
    ],

    'statistics' => [

        /*
         * Number of seconds to wait before refreshing the page.
         */
        'refreshInterval' => env('EXPLORER_STATISTICS_REFRESH_INTERVAL', '60'),
    ],
];
