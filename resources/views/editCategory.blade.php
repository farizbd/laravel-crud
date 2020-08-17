@extends('template.template')

@section('style')
  <link rel="stylesheet" href="{{asset('style/style.css')}}">
@endsection

@section('container')
<form class="mb-4" action="/updateCategory/{{$category->id}}" method="POST">
    @csrf
    @method('PATCH')
    <h1 class="text-center mb-4">Edit Category</h1>
    <div class="form-group">
        <label for="">Category Name</label>
        <input value="{{$category->name}}" type="text" class="form-control" name="name">
    </div>
    <button id="btn-submit" class="btn btn-primary mt-3">Submit</button>
</form>
@endsection
