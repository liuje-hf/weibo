@extends('layouts.default')
@section('title', '更新个人资料')

@section('content')
<div class="offset-md-2 col-md-8">
  <div class="card">
    <div class="card-header">
      <h5>更新个人资料</h5>
    </div>
    <div class="card-body">
      @include('shared._errors')
      <div class="gravatar_edit">
        <a href="http://gravatar.com/emails" target="_blank">
          <img src="{{ $user->gravatar('200') }}" alt="{{ $user->name }}" class="gravatar">
        </a>
      </div>
      <form action="{{ route }}" method="post"></form>
    </div>
  </div>
</div>
@stop
