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
                <input type="text" name="name" value="{{old('name', $product->name)}}" class="form-control{{$errors->has('name')?' form-control-danger':''}} " id="category" aria-describedby="emailHelp" placeholder="name">
                @if($errors->has('name'))
                    <div class="form-control-feedback">{{$errors->first('name')}}</div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>
@endsection