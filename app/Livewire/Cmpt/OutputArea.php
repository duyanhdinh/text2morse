<?php

namespace App\Livewire\Cmpt;

use App\Facades\Morse;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use function Symfony\Component\Translation\t;

class OutputArea extends Component
{
    #[Url(as: 'text')]
    public string $input = '';

    #[Url]
    public bool $encode = true;

    #[On('input-change')]
    public function updateInput($data): void
    {
        $this->input = $data;
    }

    #[On('encode-change')]
    public function updateEncode($data): void
    {
        $this->reset('input');
        $this->encode = $data;
    }

    #[Computed]
    public function output()
    {
        if ($this->encode) {
            return $this->encodeOutput();
        }

        return $this->decodeOutput();
    }

    private function encodeOutput(): string
    {
        return $this->input ? Morse::encodeSecure($this->input) : '';
    }

    private function decodeOutput(): string
    {
        return $this->input ? Morse::decodeSecure($this->input) : '';
    }

}
