@extends('admin::dashboard.base')

@section('title', 'Tomosia')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
<h1>Categories</h1>

<a href="{{ route('addCategories') }}">Add</a>
<table class="table table-bordered border-primary" style='width:40%'>
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Name</th>
      <th scope="col">Created_at</th>
      <th scope="col">Update_at</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $category)
    <tr>
      <th scope="row">{{ $category->id }}</th>
      <td>{{ $category->name }}</td>
      <td>{{ $category->created_at }}</td>
      <td>{{ $category->updated_at }}</td>
      <td>
        <a href="{{ route('editCategories',$category->id) }}">Edit</a>
        <a href="{{ route('deleteCategories',$category->id) }}">Delete</a>
      </td>
    </tr>
    @endforeach


  </tbody>
</table>

@endsection