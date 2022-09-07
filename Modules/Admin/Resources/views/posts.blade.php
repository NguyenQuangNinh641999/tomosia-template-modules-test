@extends('admin::dashboard.base')

@section('title', 'Tomosia')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
<h1>Posts</h1>

<a href="{{ route('addPost') }}">Add</a>
<table class="table table-bordered border-primary" style='width:40%'>
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Title</th>
      <th scope="col">Detail</th>
      <th scope="col">Name Category</th>
      <th scope="col">Created_at</th>
      <th scope="col">Update_at</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <th scope="row">{{ $post->id }}</th>
      <td>{{ $post->title }}</td>
      <td>{{ $post->detail }}</td>
      <td>{{ $post->post->name }}</td>
      <td>{{ $post->created_at }}</td>
      <td>{{ $post->updated_at }}</td>
      <td>
        <a href="{{ route('editPost',$post->id) }}">Edit</a>
        <a href="{{ route('deletePost',$post->id) }}">Delete</a>
      </td>
    </tr>
    @endforeach


  </tbody>
</table>

@endsection