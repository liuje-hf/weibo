@extends('layouts.default')
@section('title', $title)

@@section('content')
    <div>
      <h2>{{ $title }}</h2>

      <div>
        @foreach ($followers as $follower)

        @endforeach
      </div>
    </div>
@stop
