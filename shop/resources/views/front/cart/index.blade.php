@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
        <table>
            <tr>
                <th>product name</th>
                <th>count</th>
                <th>price</th>
                <th>option</th>
            </tr>

        @foreach ($carts as $cart)
            <tr>
                <td>{{ $cart->product->name }}</td>
                <td>{{ $cart->count }}</td>
                <td>{{ $cart->product->price * $cart->count}}</td>
                <td><a href="{{ route('front.cart.destroy',['id'=>$cart->id]) }}">X</a></td>
            </tr>

        @endforeach
        </table>
        </div>
    </div>
@endsection