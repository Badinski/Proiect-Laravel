@extends('layouts.app')

@section('authenticated-navigation')
  <li class="nav-item">
      <a class="nav-link" href="/home">Home</a>
  </li>

  <li class="nav-item">
      <a class="nav-link" href="/about">About</a>
  </li>

  <li class="nav-item">
      <a class="nav-link" href="/posts">Articles</a>
  </li>

@endsection
