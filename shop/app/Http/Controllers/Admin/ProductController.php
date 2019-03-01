<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductEdit;
use App\Http\Requests\ProductStore;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductUpdate;
use \App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::query()->simplePaginate(20);

        return view('admin.product.index', [
            'products' => $products,
        ]);
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        auth()->user()->products()->create([
            'category_id' => $request->get('category_id', 1),
            'name' => $request->get('name'),
            'code' => $request->get('code'),
            'price' => $request->get('price'),
            'description' => $request->get('description'),
            'image' => $request->get('image', ''),
        ]);

        return redirect()->route('admin.product.index');
    }

    public function edit(ProductEdit $request)
    {
        $product = Product::query()->find($request->get('id'));
        return view('admin.product.edit',
            [
                'product' => $product,
            ]
        );
    }

    public function update(ProductUpdate $request)
    {
        $product = Product::query()->find($request->get('id'));
        $product->fill($request->all());
        $product->save();

        Log::info('user: ' . auth()->id() . 'edited product: ' . $product->id);

        return redirect()->route('admin.product.index');
    }


    public function destroy($id)
    {
        Product::query()->where('id', $id)->delete();

        return redirect()->route('admin.product.index');
    }
}
