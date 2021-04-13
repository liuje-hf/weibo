@extends('layouts.default')
@section('title', $title)

@section('content')
    <div class="offset-md-2 col-md-8">
      <h2>{{ $title }}</h2>

      <div>
        @foreach ($users as $user)
          <div>
            <img class="mr-3" src="{{ $user->gravatar() }}" alt="{{ $user->name }}" width=32>
            <a href="{{ route('users.show', $user) }}">
              {{ $user->name }}
            </a>
          </div>
        @endforeach
      </div>
    </div>
@stop
