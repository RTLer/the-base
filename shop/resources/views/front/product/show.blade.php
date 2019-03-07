@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-6">
            <img src="{{ $product->image }}" style="max-width:100%">
        </div>
        <div class="col-6">
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->description }}</p>
            <p>{{ $product->code }}</p>
            <p>{{ number_format($product->price) }} toman</p>

        <form action="{{ route('front.cart.add') }}" method="post">
            @csrf
            <input type='number' name='count' value='1'>
            <input type='submit' value='add to cart'>
            <input type='hidden' name="product_id" value='{{ $product->id }}'>
        </form>
        </div>
    </div>
@endsection