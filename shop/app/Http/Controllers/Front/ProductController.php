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
        if($request->has('search')) {
            $productsQuery->where(function ($query) use ($request) {
                $query->where('name', 'like', '%' . trim($request->get('search')) . '%')
                    ->orwhere('description', 'like', '%' . trim($request->get('search')) . '%');
            });
        }

        $inputs = $request->all();
        $products =  cache()->remember(
            'product:index:'.md5(json_encode($inputs)),
            1,
            function () use($productsQuery){
                return $productsQuery->paginate(12);
            }
        );;

        return view('front.product.index', [
            'products' => $products,
        ]);
    }
    public function show(Request $request,$id)
    {
        $product = Product::query()->find($id);

        return view('front.product.show', [
            'product' => $product,
        ]);
    }

}
