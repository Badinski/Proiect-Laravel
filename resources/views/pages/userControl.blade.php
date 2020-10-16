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

                    @if(count($users) > 0)
                    <table class="table table-striped">
                      <tr>
                        <th>Username</th>
                        <th></th>
                        <th></th>
                      </tr>
                      @foreach($users as $user)
                        @if($user->isAdmin == false)
                        <tr>
                          <th>{{$user->name}}</th>
                          <th>
                            {!!Form::open(['action' => ['App\Http\Controllers\AdminController@destroy', $user->id], 'method' => 'POST' , 'class' => 'pull-right'])!!}
                              {{Form::hidden('_method', 'DELETE')}}
                              {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}
                          </th>
                          <th>
                            {!! Form::open(['action' => ['App\Http\Controllers\AdminController@update', $user->id], 'method' => 'POST']) !!}
                              {{Form::hidden('_method', 'PUT')}}
                              {{Form::submit('Make admin', ['class' => 'btn btn-primary'])}}
                            {!! Form::close() !!}
                          </th>
                        </tr>
                      @endif
                      @endforeach
                    </table>
                  @else
                     <p>There are no users in our database!!!</p>
                  @endif

            </div>
        </div>
    </div>
</div>
@endsection
