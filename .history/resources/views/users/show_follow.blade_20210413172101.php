@extends('layouts.default')
@section('title', $title)

@@section('content')
    <div>
      <h2>{{ $title }}</h2>

      <div>
        @foreach ($users as $user)

        @endforeach
      </div>
    </div>
@stop
