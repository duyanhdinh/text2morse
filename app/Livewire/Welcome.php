<?php

namespace App\Livewire;

use Illuminate\Support\Facades\View;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Welcome')]
class Welcome extends Component
{
    public function render()
    {
        return view('livewire.welcome');
    }
}
