<aside class="main-sidebar">
  <!-- sidebar-->
  <section class="sidebar">
    <div class="user-profile">
      <div class="ulogo">
        <a href="index.html">
          <!-- logo for regular state and mobile devices -->
          <div class="d-flex align-items-center justify-content-center">
            <img
              src="{{ url('/admin/images/logo-dark.png') }}"
              alt=""
            >
            <h3><b>Sunny</b> Admin</h3>
          </div>
        </a>
      </div>
    </div>
    <!-- sidebar menu-->
    <ul
      class="sidebar-menu"
      data-widget="tree"
    >
      <li class="treeview">
        <a href="#">
          <i data-feather="file"></i>
          <span>Pages</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="profile.html"><i class="ti-more"></i>Profile</a></li>
          <li><a href="invoice.html"><i class="ti-more"></i>Invoice</a></li>
          <li><a href="gallery.html"><i class="ti-more"></i>Gallery</a></li>
          <li><a href="faq.html"><i class="ti-more"></i>FAQs</a></li>
          <li><a href="timeline.html"><i class="ti-more"></i>Timeline</a></li>
        </ul>
      </li>
      <li class="header nav-small-cap">User Interface</li>
      <li class="treeview">
        <a href="#">
          <i data-feather="alert-triangle"></i>
          <span>Authentication</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="auth_login.html"><i class="ti-more"></i>Login</a></li>
          <li><a href="auth_register.html"><i class="ti-more"></i>Register</a></li>
          <li><a href="auth_lockscreen.html"><i class="ti-more"></i>Lockscreen</a></li>
          <li><a href="auth_user_pass.html"><i class="ti-more"></i>Password</a></li>
          <li><a href="error_404.html"><i class="ti-more"></i>Error 404</a></li>
          <li><a href="error_maintenance.html"><i class="ti-more"></i>Maintenance</a></li>
        </ul>
      </li>
    </ul>
  </section>
</aside>
