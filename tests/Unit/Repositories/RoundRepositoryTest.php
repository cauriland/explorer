<?php

declare(strict_types=1);

use App\Models\Round;
use App\Models\Wallet;
use App\Repositories\RoundRepository;

beforeEach(function () {
    $this->subject = new RoundRepository();

    Wallet::factory(101)->create()->each(function ($wallet) {
        Round::factory()->create([
            'round'      => '112168',
            'public_key' => $wallet->public_key,
        ]);
    });
});

it('should get all delegates for the given round', function () {
    expect($this->subject->allByRound(112168))->toHaveCount(101);
});

it('should get the current round', function () {
    expect($this->subject->current())->toBe(Round::max('round'));
});
