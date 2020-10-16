@extends('layouts.app')

@section('navigation')
  <li class="nav-item">
      <a class="nav-link" href="/">Home</a>
  </li>

  <li class="nav-item">
      <a class="nav-link" href="/about">About</a>
  </li>
@endsection

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

@section('title', 'About')

@section('content')
  <h1>About me</h1>
  <p>This is the about page!</p>
  <a href="/">Go back</a>

@endsection
