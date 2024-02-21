<?php

namespace App\Livewire\Costumer;

use App\Models\Costumer;
use Livewire\Component;

class IndexCostumer extends Component
{
    public function index()
    {
        return view('livewire.costumer.index')->with(['costumers' => Costumer::with('people')->get()]);
    }
}
