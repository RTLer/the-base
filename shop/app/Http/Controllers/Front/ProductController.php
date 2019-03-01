<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use \App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::query()->get();

        return view('front.product.index', [
            'products' => $products,
        ]);
    }

}
