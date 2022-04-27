<?php

namespace App\Http\Livewire;

use App\Models\Wine;
use Livewire\Component;

class PopularWines extends Component
{   
    public function render()
    {   
        $wines = Wine::take(10)->get();
        
        return view('livewire.popular-wines', compact('wines'));
    }
}
