<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Cknow\Money\Money;

class ProductShowController extends Controller
{
    public function __invoke()
    {
        return view('products.show', [
            'product' => Product::first(),
            'currencyFormatter' => new Money(),
        ]);
    }
}
