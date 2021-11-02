<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ConfirmSomething extends Component
{
    public $displayingModal = false;

    public function confirmSomething()
    {
        dump('Confirming something in Livewire component');
    }

    public function render()
    {
        return view('livewire.confirm-something');
    }
}
