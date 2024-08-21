<?php

namespace App\Http\Livewire\Mapa;

use Livewire\Component;
use App\Models\NBC;


class Index extends Component
{
    public function render()
    {
        $nbcs = NBC::where('latitud', "<>", "")->get();
        return view('livewire.mapa.index', ['nbcs' => $nbcs]);
    }
}
