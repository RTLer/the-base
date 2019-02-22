@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <form method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">category</label>
                <input type="text" name="category_id" class="form-control" id="category" aria-describedby="emailHelp" placeholder="name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">name</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">code</label>
                <input type="text" name="code" class="form-control" id="code" aria-describedby="emailHelp" placeholder="code">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">price</label>
                <input type="text" name="price" class="form-control" id="price" aria-describedby="emailHelp" placeholder="price">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">description</label>
                <input type="text" name="description" class="form-control" id="description" aria-describedby="emailHelp" placeholder="description">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">image</label>
                <input type="text" name="image" class="form-control" id="image" aria-describedby="emailHelp" placeholder="image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>
@endsection