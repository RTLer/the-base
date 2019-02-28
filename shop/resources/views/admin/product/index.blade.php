@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-12">

        <a class="btn" href="{{route('admin.product.create')}}">add new one</a>

        <table>
        <tr>
            <th>name</th>
            <th>code</th>
            <th>price</th>
            <th>description</th>
            <th>image</th>
            <th>options</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <th><a href="{{route('admin.product.edit',['id'=>$product->id])}}">{{ $product->name }}</a></th>
                <th>{{ $product->code }}</th>
                <th>{{ $product->price }}</th>
                <th>{{ $product->description }}</th>
                <th>{{ $product->image }}</th>
                <th><a href="{{route('admin.product.delete',['id'=>$product->id])}}">X</a></th>
            </tr>
        @endforeach

    </table>
    </div>

</div>
@endsection