@can('follow', $user)
  <div>
    if(Auth::user()->isFollowing)
    <form action="{{ route('followers.destroy', $user->id) }}" method="POST">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}
      <button type="submit" class="btn btn-sm btn-online-primary">取消关注</button>
    </form>
  </div>
@endcan
