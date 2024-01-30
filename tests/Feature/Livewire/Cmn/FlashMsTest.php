<?php

use App\Livewire\Cmn\FlashMs;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(FlashMs::class)
        ->assertStatus(200);
});
