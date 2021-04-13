@extends('layouts.default')
@section('title', $title)

@@section('content')
    <div>
      <h2>{{ $title }}</h2>

      <div>
        @foreach ($users as $user)
          <div>
            <img class="mr-3" src=""
          </div>
        @endforeach
      </div>
    </div>
@stop
