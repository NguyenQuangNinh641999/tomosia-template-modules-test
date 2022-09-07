@extends('admin::dashboard.base')

@section('title', 'Tomosia')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
<h1>{{ isset($category) ? 'edit cateogry' : 'add cateogry' }}</h1>

<div style="margin-bottom: 40px;">
  <form method="post" action="{{ isset($category) ? route('editSubmitCategories',$category->id) : route('addSubmitCategories') }}">
    @csrf
    name: <input type="text" name="name" value="{{ isset($category) ? $category->name : '' }}">
    <input type="submit" value="Submit">
  </form>
  @if ($errors->any())
  <ul style="list-style-type: none;color: red;">
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
  @endif
</div>
@endsection