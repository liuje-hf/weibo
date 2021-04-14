@can('follow', $user)
  <div>
    <form action="{{ route('followers.destroy', $user->id) }}" method="POST">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}
      <button type="submit" class="btn btn-sm btn-online"
    </form>
  </div>
@endcan
