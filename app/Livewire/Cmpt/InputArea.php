<?php

namespace App\Livewire\Cmpt;

use App\Facades\Morse;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;

class InputArea extends Component
{
    const MAX_LENGTH_ENCODE = 2000;
    const MAX_LENGTH_DECODE = 4000;

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
        $this->input = substr(Morse::validEncode($this->input),0, self::MAX_LENGTH_ENCODE);
    }

    private function validCharacterDecode(): void
    {
        $this->input = substr(Morse::validDecode($this->input),0, self::MAX_LENGTH_DECODE);
    }

    #[Computed]
    public function countedLength(): string
    {
        $length = strlen($this->input);
        if ($this->encode) {
            return $length . '/' . self::MAX_LENGTH_ENCODE;
        }

        return $length . '/' . self::MAX_LENGTH_DECODE;
    }
}
