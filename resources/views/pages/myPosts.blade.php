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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="posts/create" class="btn btn-primary">Add new post</a><br>
                    <h3 style="padding-top:20px">Your articles:</h3>

                    @if(count($posts) > 0)
                    <table class="table table-striped">
                      <tr>
                        <th>Title</th>
                        <th></th>
                        <th></th>
                      </tr>
                      @foreach($posts as $post)
                        <tr>
                          <th>{{$post->title}}</th>
                          <th><a href="/posts/{{$post->id}}/edit" class="btn btn-primary" style="background-color:green;">Edit</a></th>
                          <th>
                            {!!Form::open(['action' => ['App\Http\Controllers\PostController@destroy', $post->id], 'method' => 'POST' , 'class' => 'pull-right'])!!}
                              {{Form::hidden('_method', 'DELETE')}}
                              {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}
                          </th>
                        </tr>
                      @endforeach
                    </table>
                  @else
                     <p>You have no posts!</p>
                  @endif
            </div>
        </div>
    </div>
</div>
@endsection
