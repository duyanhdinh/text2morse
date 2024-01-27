<?php

namespace App\Livewire;

use Livewire\Attributes\Js;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;

#[Title('Text to Morse')]
class Text2Morse extends Component
{
    #[Url]
    public bool $encode = true;

    #[Js]
    public function changeWave(): string
    {
        return <<<'JS'
            $wire.encode = !$wire.encode;
            $wire.encodeChange();
        JS;
    }

    public function encodeChange(): void
    {
        $this->dispatch('encode-change', $this->encode);
    }
}
