<?php

namespace App\Livewire\Cmpt;

use App\Facades\Morse;
use App\Services\Morse\MorseEnum;
use Livewire\Attributes\Js;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;

class InputArea extends Component
{
    #[Url(as: 'text')]
    public string $input = '';

    #[Url]
    public bool $encode = true;

    public function mount(): void
    {
        $this->validCharacter();
    }

    private function inputChange(): void
    {
        $this->dispatch('input-change', $this->input);
    }

    #[On('encode-change')]
    public function updateEncode($data): void
    {
        $this->reset('input');
        $this->encode = $data;
    }

//    #[Js]
//    public function jsValidCharacter(): string
//    {
//        return <<<'JS'
//            if ($wire.encode) {
//                await $wire.validCharacter();
//            }
//        JS;
//    }

    public function validCharacter(): void
    {
        if ($this->encode) {
            $this->validCharacterEncode();
        } else {
            $this->validCharacterDecode();
        }

        $this->inputChange();
    }

    private function validCharacterEncode(): void
    {
        $this->input = Morse::validEncode($this->input);
    }

    private function validCharacterDecode(): void
    {
        $this->input = Morse::validDecode($this->input);
    }
}
