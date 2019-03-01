<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use \App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $productsQuery = Product::query();


        if(
            $request->has('sort')
            && in_array($request->get('sort'),['desc','asc'])
        ){
            $productsQuery->orderBy('price', $request->get('sort'));
        }

        $products = $productsQuery->paginate(12);

        return view('front.product.index', [
            'products' => $products,
        ]);
    }

}
