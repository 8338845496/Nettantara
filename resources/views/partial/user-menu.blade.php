<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('order')}}">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Request Order</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('track')}}">
              <i class="ti-shopping-cart menu-icon"></i>
              <span class="menu-title">My Order(s)</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="{{route('password')}}">
              <i class="ti-key menu-icon"></i>
              <span class="menu-title">Change Password</span>
            </a>
          </li>
         {{--  <li class="nav-item">
            <a class="nav-link" href="user">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">User</span>
            </a>
          </li> --}}
        </ul>
      </nav>