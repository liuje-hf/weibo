@can('follow', $user)
  <div>
    if(@can('update', $post)

    @elsecan('create', $post)

    @endcan)
    <form action="{{ route('followers.destroy', $user->id) }}" method="POST">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}
      <button type="submit" class="btn btn-sm btn-online-primary">取消关注</button>
    </form>
  </div>
@endcan
