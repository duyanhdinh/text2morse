<?php

use App\Livewire\Cmpt\OutputArea;
use Livewire\Livewire;

const CHARS_VALID = "The quick brown fox jumps over the lazy dog. 12, 34/567890?";
const TRUE_ENCODE = '- .... . / --.- ..- .. -.-. -.- / -... .-. --- .-- -. / ..-. --- -..- / .--- ..- -- .--. ... / --- ...- . .-. / - .... . / .-.. .- --.. -.-- / -.. --- --. .-.-.- / .---- ..--- --..-- / ...-- ....- -..-. ..... -.... --... ---.. ----. ----- ..--..';

it('renders successfully', function () {
    Livewire::test(OutputArea::class)
        ->assertStatus(200);
});

it('should encode alphanumeric & space characters to morse successfully', function () {
    Livewire::test(OutputArea::class, [
        'encode' => true,
        'input' => CHARS_VALID,
    ])
        ->assertSet('output', TRUE_ENCODE);
});


it('should decode morse code successfully', function () {
    Livewire::test(OutputArea::class, [
        'encode' => false,
        'input' => TRUE_ENCODE,
    ])
        ->assertSet('output', strtolower(CHARS_VALID));
});
