<?php

use App\Livewire\Text2Morse;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Text2Morse::class)
        ->assertStatus(200)
        ->assertSeeHtmlInOrder(['Text', 'Morse']);
});


