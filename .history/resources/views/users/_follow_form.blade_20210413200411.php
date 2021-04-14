@can('follow', $user)
  <div>
    <form action="{{ route('followers.destroy', $user->id) }}" method="POST">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}
      <BUtton></BUtton>
    </form>
  </div>
@endcan
