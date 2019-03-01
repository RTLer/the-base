@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-12">

        <a class="btn btn-primary" href="{{route('admin.product.create')}}">add new one</a>

        <table class="table">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>user name</th>
            <th>category_id</th>
            <th>code</th>
            <th>price</th>
            <th>description</th>
            <th>image</th>
            <th>options</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <th>{{ $product->id }}</th>
                <th><a href="{{route('admin.product.edit',['id'=>$product->id])}}">{{ $product->name }}</a></th>
                <th>{{ $product->user->name }}</th>
                <th>{{ $product->category_id }}</th>
                <th>{{ $product->code }}</th>
                <th>{{ $product->price }}</th>
                <th>{{ $product->description }}</th>
                <th>{{ $product->image }}</th>
                <th><a href="{{route('admin.product.delete',['id'=>$product->id])}}">X</a></th>
            </tr>
        @endforeach

    </table>
        {{ $products->links() }}
    </div>

</div>
@endsection