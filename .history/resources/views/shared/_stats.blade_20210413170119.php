<a href="{{ route(users.following, $user_id) }}">
  <strong id="following" class="stat">
    {{ count($user->followings) }}
    关注
  </strong>
</a>
<a href="{{ route(users.followers, $user_id) }}">
  <strong id="followers" class="stat">
    {{ count($user->followers) }}
    粉丝
  </strong>
</a>
<a href="{{ route(users.show, $user_id) }}">
  <strong id="statuses" class="stat">
    {{ $user->statuses()->count() }}
    微博
  </strong>
</a>
