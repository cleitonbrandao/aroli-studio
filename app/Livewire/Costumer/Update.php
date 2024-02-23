<?php

namespace App\Livewire\Costumer;

use Livewire\Component;

class Update extends Component
{
    public $title;
    public $name;
    public function mount($title = null, $name = null)
    {
        $this->title = $title;
        $this->name = $name;
    }
    public function render()
    {
        return view('livewire.costumer.update');
    }
}
