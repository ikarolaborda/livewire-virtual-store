<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductSelector extends Component
{
    public $product;
    public $initialVariation;

    public function mount($product)
    {
        $this->product = $product;
        $this->initialVariation = $product->variations->sortBy('order')->groupBy('type')->first();
    }

    public function render()
    {
        return view('livewire.product-selector');
    }
}
