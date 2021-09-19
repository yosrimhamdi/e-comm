<header class="main-header">
  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top pl-30">
    <!-- Sidebar toggle button-->
    <div>
      <ul class="nav">




      </ul>
    </div>

    <div class="navbar-custom-menu r-side">
      <ul class="nav navbar-nav">
        <!-- User Account-->
        <li class="dropdown user user-menu">
          <a
            href="#"
            class="waves-effect waves-light rounded dropdown-toggle p-0"
            data-toggle="dropdown"
            title="User"
          >
            <img
              src="{{ asset(admin()->profile_photo_path) }}"
              alt=""
            >
          </a>
          <ul class="dropdown-menu animated flipInX">
            <li class="user-body">
              <a
                class="dropdown-item"
                href="{{ url('/admin/profile') }}"
              ><i class="ti-user text-muted mr-2"></i> Profile</a>
              <a
                class="dropdown-item"
                href="#"
              ><i class="ti-settings text-muted mr-2"></i> Manage Password</a>
              <div class="dropdown-divider"></div>
              <form
                method="POST"
                action="{{ route('admin.logout') }}"
              >
                @csrf
                <button
                  type="submit"
                  class="dropdown-item"
                  href="#"
                  style="color: #8a99b5; width: 100%"
                ><i class="ti-lock text-muted mr-2"></i> Logout</button>
              </form>
            </li>
          </ul>
        </li>


      </ul>
    </div>
  </nav>
</header>
