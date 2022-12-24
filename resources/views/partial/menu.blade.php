<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('adminhome')}}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('product')}}">
              <i class="ti-upload menu-icon"></i>
              <span class="menu-title">Add Product</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('laundry')}}">
              <i class="ti-check menu-icon"></i>
              <span class="menu-title">Laundry Request</span>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Request Status</span>
            </a>
          </li> --}}
           <li class="nav-item">
            <a class="nav-link" href="{{route('change-password')}}">
              <i class="ti-key menu-icon"></i>
              <span class="menu-title">Change Password</span>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="user">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Admin</span>
            </a>
          </li> --}}
        </ul>
      </nav>