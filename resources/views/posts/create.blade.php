@extends('layouts.app')

@section('authenticated-navigation')
  <li class="nav-item">
      <a class="nav-link" href="/userControl">User control</a>
  </li>

  <li class="nav-item">
      <a class="nav-link" href="/myPosts">My posts</a>
  </li>

  <li class="nav-item">
      <a class="nav-link" href="/posts">Articles</a>
  </li>

  <li class="nav-item">
      <a class="nav-link" href="/posts/create">Add Post</a>
  </li>

@endsection

@section('content')

  <h1>Create post</h1><br>
  {!! Form::open(['action' => 'App\Http\Controllers\PostController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
      {{Form::label('title', 'Title')}}
      {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Write a title'])}}
    </div>

    <div class="form-group">
      {{Form::label('body', 'Body')}}
      {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Put some text over there'])}}
    </div>

    <div class="form-group">
      {{Form::file('cover_image')}}
    </div>

    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
  {!! Form::close() !!}

@endsection
