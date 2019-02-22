<?php

namespace App\Http\Controllers\Admin;

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

    public function store()
    {
        $inputs = request()->all();
        $inputs['user_id'] = 1;
        Product::create($inputs);
        return redirect('/admin/create');
    }
}
