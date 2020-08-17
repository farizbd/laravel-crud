@extends('template.template')

@section('style')
  <link rel="stylesheet" href="{{asset('style/style.css')}}">
@endsection

@section('container')
<form class="mb-4" action="/storeCategory" method="POST">
    @csrf
    <h1 class="text-center mb-4">Create Category</h1>
    <div class="form-group">
        <label for="">Category Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
        @error('name') <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <button id="btn-submit" class="btn btn-primary mt-3">Submit</button>
</form>
@endsection
