@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-9">
            <div class="row">
                @foreach($products as $product)
                    <div class="col-6">
                        <div class="card" style="width: 20rem;">
                            <img class="card-img-top" src="{{$product->image}}" alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title">{{$product->name}}</h4>
                                <p class="card-text">{{number_format($product->price)}}</p>
                                <p class="card-text">{{$product->description}}</p>
                                <a href="{{ route('front.product.show',['id'=>$product->id]) }}" class="btn btn-primary">view</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-3">
            <ul class="list-group">
                <li class="list-group-item">sort</li>
                <li class="list-group-item"><a href="{{route('front.product.index',['sort'=>'desc'])}}">desc</a></li>
                <li class="list-group-item"><a href="{{route('front.product.index',['sort'=>'asc'])}}">asc</a></li>
            </ul>
        </div>
    </div>
    {{$products->links()}}
@endsection