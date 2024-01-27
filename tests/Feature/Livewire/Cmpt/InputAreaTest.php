<?php

use App\Livewire\Cmpt\InputArea;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(InputArea::class)
        ->assertStatus(200);
});

it('should only encode alphanumeric & space characters to morse', function () {
    Livewire::test(InputArea::class, [
        'encode' => true,
        'input' => 'abc+-12 3%#.',
    ])
        ->assertSet('input', 'abc12 3');
});

it('should only decode \'.\', \'-\' & space characters by morse', function () {
    Livewire::test(InputArea::class, [
        'encode' => false,
        'input' => 'abc+-12 3%#/.---.',
    ])
        ->assertSet('input', '- /.---.');
});
