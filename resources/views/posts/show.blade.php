@extends('layouts.app')

@section('content')
  <small>
    <a href="/posts" class="btn-default btn" style="color:LightSeaGreen;">Go back</a><br>
  </small><br>

    <h1 style="margin: auto">{{$post->title}}</h1><br>

  <div class="row">
    <div class="col-md-12">
      <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
    </div>
  </div>

  <hr>
  <p>{{$post->body}}</p>
  <hr>

  <small style="display:flex; align-items: center;">
    Written on {{$post->created_at}} by {{App\Models\User::find($post->user_id)->name}}

    @if(Auth::user()->id == $post->user_id)
    <div style="padding-left:20px; padding-right:10px;">
      <a href="/posts/{{$post->id}}/edit" class="btn btn-primary" style="background-color:green;">Edit</a>
    </div>

      {!!Form::open(['action' => ['App\Http\Controllers\PostController@destroy', $post->id], 'method' => 'POST' , 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
      {!!Form::close()!!}
    @endif
  </small>

@endsection
