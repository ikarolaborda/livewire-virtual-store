<?php

namespace App\Http\Livewire;

use App\Models\Variation;
use Livewire\Component;

class ProductSelector extends Component
{
    public $product;
    public $initialVariation;
    public $skuVariant;

    protected $listeners = [
        'skuVariantChanged' => 'skuVariantChanged',
    ];

    public function skuVariantChanged($variant_id)
    {
        if(!$variant_id) {
            $this->skuVariant = null;
            return;
        }
        $this->skuVariant = Variation::find($variant_id);
    }

    public function mount($product)
    {
        $this->product = $product;
        $this->initialVariation = $product->variations->sortBy('order')->groupBy('type')->first();
    }

    public function addToCart()
    {
        
    }

    public function render()
    {
        return view('livewire.product-selector');
    }
}
