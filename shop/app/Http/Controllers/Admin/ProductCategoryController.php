<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductCategoryEdit;
use App\Http\Requests\ProductCategoryStore;
use App\Http\Requests\ProductCategoryUpdate;
use App\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $productCategories = ProductCategory::query()->get();

        return view('admin.product_category.index', [
            'productCategories' => $productCategories,
        ]);
    }

    public function create()
    {
        return view('admin.product_category.create');
    }

    public function store(ProductCategoryStore $request)
    {
        ProductCategory::query()->create([
            'parent_id' => $request->get('parent_id'),
            'name' => $request->get('name'),
            'slug' => $request->get('slug'),
        ]);
        return redirect()->route('admin.productCategory.index');
    }

    public function edit(ProductCategoryEdit $request)
    {
        $productCategory = ProductCategory::query()->where('id', $request->get('id'))->first();
        return view('admin.product_category.edit',
            [
                'productCategory'=>$productCategory
            ]
        );
    }

    public function update(ProductCategoryUpdate $request){
        $productCategories = ProductCategory::query()
            ->where('id', $request->get('id'))
            ->first();
        $productCategories->fill($request->all());
        $productCategories->save();

        return redirect()->route('admin.productCategory.index');
    }


    public function destroy($id){
        ProductCategory::query()->where('id',$id)->delete();

        return redirect()->route('admin.productCategory.index');
    }
}
