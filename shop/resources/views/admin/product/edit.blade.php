@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <form method="post">
            @csrf
            <div class="form-group {{$errors->has('category_id')?' has-danger':''}} ">
                <label for="exampleInputEmail1">category</label>
                <input type="text" name="category_id" value="{{old('category_id', $product->category_id)}}" class="form-control{{$errors->has('category_id')?' form-control-danger':''}} " id="category" aria-describedby="emailHelp" placeholder="name">
                @if($errors->has('category_id'))
                    <div class="form-control-feedback">{{$errors->first('category_id')}}</div>
                @endif
            </div>
            <div class="form-group {{$errors->has('name')?' has-danger':''}} ">
                <label for="exampleInputEmail1">name</label>
                <input type="text" name="name" value="{{old('name',$product->name)}}" class="form-control{{$errors->has('name')?' form-control-danger':''}} " id="name" aria-describedby="nameHelp" placeholder="name">
                @if($errors->has('name'))
                    <div class="form-control-feedback">{{$errors->first('name')}}</div>
                @endif
            </div>
            <div class="form-group {{$errors->has('code')?' has-danger':''}} ">
                <label for="exampleInputEmail1">code</label>
                <input type="text" name="code" value="{{old('code',$product->code)}}"  class="form-control{{$errors->has('code')?' form-control-danger':''}} " id="code" aria-describedby="emailHelp" placeholder="code">
                @if($errors->has('code'))
                    <div class="form-control-feedback">{{$errors->first('code')}}</div>
                @endif
            </div>
            <div class="form-group {{$errors->has('price')?' has-danger':''}} ">
                <label for="exampleInputEmail1">price</label>
                <input type="text" name="price" value="{{old('price',$product->price)}}" class="form-control{{$errors->has('price')?' form-control-danger':''}} " id="price" aria-describedby="emailHelp" placeholder="price">
                @if($errors->has('price'))
                    <div class="form-control-feedback">{{$errors->first('price')}}</div>
                @endif
            </div>
            <div class="form-group {{$errors->has('description')?' has-danger':''}} ">
                <label for="exampleInputEmail1">description</label>
                <input type="text" name="description" value="{{old('description',$product->description)}}" class="form-control{{$errors->has('description')?' form-control-danger':''}} " id="description" aria-describedby="emailHelp" placeholder="description">
                @if($errors->has('description'))
                    <div class="form-control-feedback">{{$errors->first('description')}}</div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>
@endsection