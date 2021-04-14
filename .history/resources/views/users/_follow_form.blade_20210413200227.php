@can('follow', $user)
  <div>
    <form action="{{ route('followers.store') }}"></form>
  </div>
@endcan
