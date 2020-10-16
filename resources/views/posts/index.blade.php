@extends('layouts.app')

@section('authenticated-navigation')
  @if(Auth::user()->isAdmin == true)
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
  @else
    <li class="nav-item">
        <a class="nav-link" href="/home">Home</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/about">About</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/posts">Articles</a>
    </li>
  @endif

@endsection

@section('content')
  <h1>Posts</h1><br>

      @if(count($posts) > 0)
        <div class="card">
          <ul class="list-group list-group-flush">
            @foreach($posts as $post)
              <li class="list-group-item">
              <div class="row">
                <div class="col-md-4">
                  <img style="width:50%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
                </div>

                <div class="col-md-8">
                  <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                  <small>Written on {{$post->created_at}}</small>
                </div>
              </div>
              </li>

            @endforeach
          </ul>
        </div>

      @else

      @endif
@endsection
