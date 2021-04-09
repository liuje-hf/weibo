<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container ">
    <a class="navbar-brand" href="{{ route('home') }}">Weibo App</a>
    <ul class="navbar-nav justify-content-end">
      @if (Auth::check())
      <li class="nav-item"><a class="nav-link" href="#">用户列表</a></li>
      <div class="dropdown">
        <button type="button" class="btn dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown">主题
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
            <li role="presentation">
                <a data-stopPropagation="true" role="menuitem" tabindex="-1" href="#">Java</a>
            </li>
            <li role="presentation">
                <a data-stopPropagation="true" role="menuitem" tabindex="-1" href="#">数据挖掘</a>
            </li>
            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="#">数据通信/网络</a>
            </li>
            <li role="presentation" class="divider"></li>
            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="#">分离的链接</a>
            </li>
        </ul>
</div>
      @else
      <li class="nav-item"><a class="nav-link" href="{{ route('help') }}">帮助</a></li>
      <li class="nav-item" ><a class="nav-link" href="{{ route('login') }}">登录</a></li>
      @endif
    </ul>
  </div>
</nav>
