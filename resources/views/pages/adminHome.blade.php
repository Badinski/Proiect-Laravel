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
