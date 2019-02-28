<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductStore;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductUpdate;
use \App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::query()->get();

        return view('admin.product.index', [
            'products' => $products,
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
        Product::query()->create([
            'category_id' => $request->get('category_id', 1),
            'user_id' => $request->get('user_id', 1),
            'name' => $request->get('name'),
            'code' => $request->get('code'),
            'price' => $request->get('price'),
            'description' => $request->get('description'),
            'image' => $request->get('image',''),
        ]);
        return redirect()->route('admin.product.index');
    }

    public function edit($id)
    {
        $product = Product::query()->where('id', $id)->first();
        return view('admin.product.edit',
            [
                'product'=>$product
            ]
        );
    }

    public function update($id, ProductUpdate $request){
        $product = Product::query()
            ->where('id', $id)
            ->first();
        $product->fill($request->all());
        $product->save();

        return redirect()->route('admin.product.index');
    }


    public function destroy($id){
        Product::query()->where('id',$id)->delete();

        return redirect()->route('admin.product.index');
    }
}
