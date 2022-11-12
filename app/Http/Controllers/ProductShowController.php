<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductShowController extends Controller
{
    public function __invoke()
    {
        return Product::all();
    }
}
