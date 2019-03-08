<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index(){
        return view('front.cart.index',[
            'carts' => auth()->user()->carts
        ]);
    }
    public function addToCart(){
        $item = auth()
        ->user()
        ->carts()
        ->where('product_id',request()->get('product_id'))
        ->first();

        if(!is_null($item)){
            $item->count += request()->get('count');
            $item->save();
        }else{
            $item = auth()->user()->carts()->create(request()->all());
        }

        event(new \App\Events\NewItemAddedToCart($item));
        $this->dispatch(new WelcomeUser(auth()->user()));

        dispatch(new WelcomeUser(auth()->user()));

        WelcomeUser::dispatch($this->user);


        return redirect()->route('front.cart.index');
    }

    public function destroy($id){
        $productCart = auth()
        ->user()
        ->carts()
        ->where('id', $id)
        ->delete();

        return redirect()->route('front.cart.index');
    }
}
