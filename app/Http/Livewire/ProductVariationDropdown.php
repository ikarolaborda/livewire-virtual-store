<?php

namespace App\Http\Livewire;

use App\Models\Variation;
use Livewire\Component;

class ProductVariationDropdown extends Component
{
    public $variations;
    public $selectedVariation;

    public function render()
    {
        return view('livewire.product-variation-dropdown');
    }

    public function getSelectedVariationModelProperty()
    {
        if(!$this->selectedVariation) {
            return;
        }
        return Variation::find($this->selectedVariation);
    }

    public function updatedSelectedVariation()
    {
        //$this->emit('variationSelected', $this->selectedVariation);
    }
}
