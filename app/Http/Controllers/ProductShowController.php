<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Cknow\Money\Money;

class ProductShowController extends Controller
{
    public function __invoke(Product $product)
    {
        $product->load('variations.children');
        return view('products.show', [
            'product' => $product,
            'currencyFormatter' => new Money(),
        ]);
    }
}
