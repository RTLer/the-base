<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductStore;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::query()->get();

        return view('admin.product.index',[
            'products'=>$products
        ]);
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(ProductStore $request)
    {
        $inputs = $request->all();
        $inputs['user_id'] = 1;
        Product::create($inputs);
        return redirect('/admin/create');
    }

    public function edit(){
        return view('admin.product.edit');
    }
}
