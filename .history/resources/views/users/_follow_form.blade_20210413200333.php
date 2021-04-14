@can('follow', $user)
  <div>
    <form action="{{ route('followers.destroy', $user->id) }}" method="POST">
      {{ csrf_ }}
    </form>
  </div>
@endcan
