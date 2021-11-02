<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GenericMessage extends Component
{
    public $displayingModal = false;

    public function render()
    {
        return view('livewire.generic-message');
    }
}
