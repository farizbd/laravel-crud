@extends('template.template')

@section('container')
<h1>Category List</h1>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Category Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($category as $categories)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$categories->name}}</td>
            <td>
              <a href="/editCategory/{{$categories->id}}" class="btn btn-success">Edit</a>
              <form action="/deleteCategory/{{$categories->id}}" method="POST">
                  @csrf
                  @method('DELETE')
                 <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
    </tbody>
</table>
@endsection
