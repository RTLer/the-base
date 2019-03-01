@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-12">

        <a class="btn btn-primary" href="{{route('admin.product.create')}}">add new one</a>

        <table class="table">
        <tr>
            <th>name</th>
            <th>slug</th>
            <th>parent_id</th>
        </tr>
        @foreach($productCategories as $productCategory)
            <tr>
                <th><a href="{{route('admin.productCategory.edit',['id'=>$productCategory->id])}}">{{ $productCategory->name }}</a></th>
                <th>{{ $productCategory->slug }}</th>
                <th>{{ $productCategory->parent_id }}</th>
                <th><a href="{{route('admin.productCategory.delete',['id'=>$productCategory->id])}}">X</a></th>
            </tr>
        @endforeach

    </table>
    </div>

</div>
@endsection