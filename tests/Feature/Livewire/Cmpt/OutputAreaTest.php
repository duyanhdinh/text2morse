<?php

use App\Livewire\Cmpt\OutputArea;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(OutputArea::class)
        ->assertStatus(200);
});

it('should encode alphanumeric & space characters to morse successfully', function () {
    Livewire::test(OutputArea::class, [
        'encode' => true,
        'input' => 'abc12 3',
    ])
        ->assertSet('output', '.- -... -.-. .---- ..--- / ...--');
});


it('should decode morse code successfully', function () {
    Livewire::test(OutputArea::class, [
        'encode' => false,
        'input' => '.- -... -.-. .---- ..--- / ...--',
    ])
        ->assertSet('output', 'abc12 3');
});
