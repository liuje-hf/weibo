<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container ">
    <a class="navbar-brand" href="{{ route('home') }}">Weibo App</a>
    <ul class="navbar-nav justify-content-end">
      @if (Auth::check())
      <li class="nav-item"><a class="nav-link" href="#">用户列表</a></li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="flase">
          {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu" aria-labelledby="">
          <a class="drop-item" href="{{ route('users.show', Auth::user()) }}">个人中心</a>
        </div>
      </li>

      @endif
      aaaaaaaaaaaaaaaaaaaaaa
      <li class="nav-item"><a class="nav-link" href="{{ route('help') }}">帮助</a></li>
      <li class="nav-item" ><a class="nav-link" href="{{ route('login') }}">登录</a></li>
      bbbbbbbbbbbbbb
    </ul>
  </div>
</nav>
