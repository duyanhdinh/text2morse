<?php

use App\Livewire\Cmpt\InputArea;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(InputArea::class)
        ->assertStatus(200);
});

it('should only encode alphanumeric, space, \'.\', \',\', \'?\', \'/\', characters to morse', function () {
    Livewire::test(InputArea::class, [
        'encode' => true,
        'input' => "abc+-12 3%#\r\n.,?/",
    ])
        ->assertSet('input', "abc12 3\r\n.,?/");
});

it('should only decode \'.\', \'-\' & space characters by morse', function () {
    Livewire::test(InputArea::class, [
        'encode' => false,
        'input' => 'abc+-12 3%#/.---.',
    ])
        ->assertSet('input', '- /.---.');
});

it('should show counter character of input', function () {
    Livewire::test(InputArea::class, [
        'encode' => true,
        'input' => 'abc12 3',
    ])
        ->assertSee('7/' . InputArea::MAX_LENGTH_ENCODE);

    Livewire::test(InputArea::class, [
        'encode' => false,
        'input' => '- /.---.',
    ])
        ->assertSee('8/' . InputArea::MAX_LENGTH_DECODE);
});

it('should not encode more than MAX_LENGTH_ENCODE value characters', function () {
    Livewire::test(InputArea::class, [
        'encode' => true,
        'input' => str_repeat("1", InputArea::MAX_LENGTH_ENCODE + 1234),
    ])
        ->assertSet('input', str_repeat("1", InputArea::MAX_LENGTH_ENCODE));
});

it('should not encode more than MAX_LENGTH_DECODE value characters', function () {
    Livewire::test(InputArea::class, [
        'encode' => false,
        'input' => str_repeat("-", InputArea::MAX_LENGTH_DECODE + 1234),
    ])
        ->assertSet('input', str_repeat("-", InputArea::MAX_LENGTH_DECODE));
});
