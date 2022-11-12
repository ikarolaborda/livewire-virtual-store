<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductVariationDropdown extends Component
{
    public $variations;

    public function render()
    {
        return view('livewire.product-variation-dropdown');
    }
}
