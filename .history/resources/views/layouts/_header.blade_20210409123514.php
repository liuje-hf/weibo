<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container ">
    <a class="navbar-brand" href="{{ route('home') }}">Weibo App</a>
    <ul class="navbar-nav justify-content-end">
      @if (Auth::check())
      <li class="nav-item"><a class="nav-link" href="#">用户列表</a></li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="drop"></a>
      </li>

      @endif
      aaaaaaaaaaaaaaaaaaaaaa
      <li class="nav-item"><a class="nav-link" href="{{ route('help') }}">帮助</a></li>
      <li class="nav-item" ><a class="nav-link" href="{{ route('login') }}">登录</a></li>
      bbbbbbbbbbbbbb
    </ul>
  </div>
</nav>
