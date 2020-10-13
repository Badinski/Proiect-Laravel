@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
  <h1 style="margin:auto">HOMEPAGE</h1>
  <p>This is the homepage of my site!</p>
  <p>To navigate to the other pages of my site click the links bellow:</p>

  <ul>
    <li><a href="/about">About me</a></li>
    <li><a href="/services">Services</a></li>
    <li><a href="/review">Review</a></li>
  </ul>

@endsection
