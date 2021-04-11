@extends('layouts.default')
@section('title', '所有用户')

@section('content')
  <div class="offset-md-d col-md-8">
    <h2 class="mb-4 text-center">所有用户</h2>
    <div class="lsit-group list-group-flush">

      @foreach ($users as $user)
        <div class="list-group-item">
          <img class="mr-3" src="{{ user-> }}"
        </div>
      @endforeach

    </div>
  </div>
@stop
