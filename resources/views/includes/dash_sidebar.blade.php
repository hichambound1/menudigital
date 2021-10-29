<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard.home')}}">
          <i class="ti-home menu-icon"></i>
          <span class="menu-title">@lang('dashboard')</span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="{{route('category.index')}}">
          <i class="ti-basketball menu-icon"></i>
          <span class="menu-title">@lang('categories')</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('user.index')}}">
          <i class="ti-basketball menu-icon"></i>
          <span class="menu-title">@lang('users')</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('dish.index')}}">
          <i class="ti-basketball menu-icon"></i>
          <span class="menu-title">@lang('dishes')</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.index')}}">
          <i class="ti-basketball menu-icon"></i>
          <span class="menu-title">@lang('admins')</span>
        </a>
      </li>


    </ul>
  </nav>
