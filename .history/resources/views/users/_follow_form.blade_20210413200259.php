@can('follow', $user)
  <div>
    <form action="{{ route('followers.destroy', $user->id) }}"></form>
  </div>
@endcan
