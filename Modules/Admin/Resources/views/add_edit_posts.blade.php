@extends('admin::dashboard.base')

@section('title', 'Tomosia')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
<h1>{{ isset($category) ? 'edit post' : 'add post' }}</h1>

<div style="margin-bottom: 40px;">
  <form method="post" action="{{ isset($post) ? route('editSubmitPost',$post->id) : route('addSubmitPost') }}">
    @csrf
    Title : <input type="text" name="title" value="{{ isset($post) ? $post->title : '' }}"><br>
    Detail : <input type="text" name="detail" value="{{ isset($post) ? $post->detail : '' }}"><br>
    Category_id :<select name="category_id" style="width: 200px;">
      @foreach($categories as $category)
      <option value="{{ $category->id }}" @if(isset($post) && $category->id == $post->category_id) selected @endif>{{ $category->name }}</option>
      @endforeach
    </select><br>
    <input type="submit" value="Submit">
  </form>
</div>
@endsection