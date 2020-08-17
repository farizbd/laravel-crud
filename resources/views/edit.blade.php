@extends('template.template')

@section('style')
  <link rel="stylesheet" href="{{asset('style/style.css')}}">
@endsection

@section('container')

<form class="mb-4" action="/update/{{$products->id}}" method="POST">
  @csrf
  @method('PATCH')
    <h1 class="text-center mb-4">Edit Product</h1>
    <div class="form-group">
        <label for="">Product Name</label>
        <input value="{{$products->product_name}}" type="text" class="form-control" name="product_name">
    </div>
    <div class="form-group">
        <label for="">Price</label>
        <input value="{{$products->price}}" type="number" class="form-control" name="price">
    </div>
    <div class="form-group">
        <label for="">Stock</label>
        <input value="{{$products->stoct}}" type="number" class="form-control" name="stoct">
    </div>
    <button type="submit" id="btn-submit" class="btn btn-primary mt-3">Submit</button>
</form>

@endsection
