@extends('layouts.app')

@section('content')
  <h1>Create post</h1><br>
  {!! Form::open(['action' => 'App\Http\Controllers\PostController@store', 'method' => 'POST']) !!}
    <div class="form-group">
      {{Form::label('title', 'Title')}}
      {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Write a title'])}}
    </div>

    <div class="form-group">
      {{Form::label('body', 'Body')}}
      {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Put some text over there'])}}
    </div>

    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
  {!! Form::close() !!}

@endsection
