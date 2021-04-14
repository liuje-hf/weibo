@can('follow', $user)
  <div>
    <form action="{{ route('followers.destroy', $user->id) }}" method="POST">
      {{ csrf_field() }}
      {{ method }}
    </form>
  </div>
@endcan
