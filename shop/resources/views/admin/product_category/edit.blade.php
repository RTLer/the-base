@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <form method="post">
            @csrf
            <div class="form-group {{$errors->has('parent_id')?' has-danger':''}} ">
                <label for="parent_id">parent_id</label>
                <input type="text" name="parent_id" value="{{old('parent_id',$productCategory->parent_id)}}" class="form-control{{$errors->has('parent_id')?' form-control-danger':''}} " id="parent_id"  placeholder="parent_id">
                @if($errors->has('parent_id'))
                    <div class="form-control-feedback">{{$errors->first('parent_id')}}</div>
                @endif
            </div>
            <div class="form-group {{$errors->has('name')?' has-danger':''}} ">
                <label for="name">name</label>
                <input type="text" name="name" value="{{old('name',$productCategory->name)}}" class="form-control{{$errors->has('name')?' form-control-danger':''}} " id="name" placeholder="name">
                @if($errors->has('name'))
                    <div class="form-control-feedback">{{$errors->first('name')}}</div>
                @endif
            </div>
            <div class="form-group {{$errors->has('slug')?' has-danger':''}} ">
                <label for="exampleInputEmail1">slug</label>
                <input type="text" name="slug" value="{{old('slug',$productCategory->slug)}}" class="form-control{{$errors->has('slug')?' form-control-danger':''}} " id="slug" placeholder="slug">
                @if($errors->has('slug'))
                    <div class="form-control-feedback">{{$errors->first('slug')}}</div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>
@endsection