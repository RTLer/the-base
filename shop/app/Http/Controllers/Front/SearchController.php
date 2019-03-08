<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Http\Resources\Front\ProductSearchCollection;

class SearchController extends Controller
{
    public function search(){

        $products = \App\Product::query()
        ->where(function($query){
            $query
            ->where('name','like','%'.request()->get('q').'%')
            ->orWhere('description','like','%'.request()->get('q').'%');
        })
        ->limit(5)
        ->get();
        $searchResource = ProductSearchCollection::collection($products);
        return $searchResource;
    }
}
