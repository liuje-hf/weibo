@extends('layouts.default')
@section('title', '注册')

@section('content')
<div class="offset-md-2 col-md-8">
  <div class="card">
    <div class="card-header">
      <h5>注册</h5>
    </div>
    <div class="card-body">
      <form method="POST" action="{{ route('users.store') }}">
        <div class="form-group">
          <label for="name">名称</label>
          <input type="text" name="name" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Help text</small>
        </div>
      </form>
    </div>
  </div>
</div>
@stop
