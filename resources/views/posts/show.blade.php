@extends('layouts.app')

@section('content')
  <a href="/posts" class="btn-default btn">Go back</a>
  <h1>{{$post->title}}</h1><br>

  <hr>
  <p>{{$post->body}}</p>
  <hr>

  <small style="display:flex; align-items: center;">
    Written on {{$post->created_at}}
    <div style="padding-left:20px; padding-right:10px;">
      <a href="/posts/{{$post->id}}/edit" class="btn btn-primary" style="background-color:green;">Edit</a>
    </div>

    {!!Form::open(['action' => ['App\Http\Controllers\PostController@destroy', $post->id], 'method' => 'POST' , 'class' => 'pull-right'])!!}
      {{Form::hidden('_method', 'DELETE')}}
      {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
  </small>

@endsection
