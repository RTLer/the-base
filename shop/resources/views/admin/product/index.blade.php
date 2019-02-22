@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
    <table>
        <tr>
            <th>name</th>
            <th>code</th>
            <th>price</th>
            <th>description</th>
            <th>image</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <th>{{ $product->name }}</th>
                <th>{{ $product->code }}</th>
                <th>{{ $product->price }}</th>
                <th>{{ $product->description }}</th>
                <th>{{ $product->image }}</th>
            </tr>
        @endforeach

    </table>
    </div>

</div>
@endsection