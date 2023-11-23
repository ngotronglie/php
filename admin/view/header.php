
<header class="topbar" data-navbarbg="skin5">
  <nav class="navbar top-navbar navbar-expand-md navbar-dark">
    <div class="navbar-header" data-logobg="skin5">
      <!-- This is for the sidebar toggle which is visible on mobile only -->
      <a
        class="nav-toggler waves-effect waves-light d-block d-md-none"
        href="#"
        ><i class="ti-menu ti-close"></i
      ></a>
      <!-- ============================================================== -->
      <!-- Logo -->
      <!-- ============================================================== -->
      <a class="navbar-brand" href="index.php">
        <!-- Logo icon -->
        <b class="logo-icon p-l-10">
          <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
          <!-- Dark Logo icon -->
          <img
            src="../assets/images/logo-icon.png"
            alt="homepage"
            class="light-logo"
          />
        </b>
        <!--End Logo icon -->
        <!-- Logo text -->
        <span class="logo-text">
          <!-- dark Logo text -->
          <img
            src="../assets/images/logo-text.png"
            alt="homepage"
            class="light-logo"
          />
        </span>
        <!-- Logo icon -->
        <!-- <b class="logo-icon"> -->
        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
        <!-- Dark Logo icon -->
        <!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

        <!-- </b> -->
        <!--End Logo icon -->
      </a>
      <!-- ============================================================== -->
      <!-- End Logo -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Toggle which is visible on mobile only -->
      <!-- ============================================================== -->
      <a
        class="topbartoggler d-block d-md-none waves-effect waves-light"
        href="#"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
        ><i class="ti-more"></i
      ></a>
    </div>
    <!-- ============================================================== -->
    <!-- End Logo -->
    <!-- ============================================================== -->
    <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
      <ul class="navbar-nav float-left mr-auto">
        <li class="nav-item d-none d-md-block">
          <a
            class="nav-link sidebartoggler waves-effect waves-light"
            href="#"
            data-sidebartype="mini-sidebar"
            ><i class="mdi mdi-menu font-24"></i
          ></a>
        </li>
        <!-- ============================================================== -->
        <!-- create new -->
        <!-- ============================================================== -->
        <!-- Search -->
        <!-- ============================================================== -->
      </ul>
      <ul class="navbar-nav float-right d-flex align-items-center">
        <!-- ============================================================== -->
        <!-- Comment -->
        <!-- ============================================================== -->
        <!-- End Comment -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Messages -->
        <!-- ============================================================== -->
        <li class="nav-item">
            <div class="h3">hello, <?php echo $_SESSION['user']?></div>
        </li>
        <!-- ============================================================== -->
        <!-- End Messages -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- User profile and search -->
        <!-- ============================================================== -->
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic"
            href=""
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
            ><img
              src="../assets/images/users/1.jpg"
              alt="user"
              class="rounded-circle"
              width="31"
          /></a>
          <div class="dropdown-menu dropdown-menu-right user-dd animated">
            <a class="dropdown-item" href=""
              ><i class="ti-user m-r-5 m-l-5"></i> My Profile</a
            >
            <a class="dropdown-item" href=""
              ><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a
            >
            <a class="dropdown-item" href=""
              ><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a
            >
            <a onclick="return confirm('bạn muốn đăng xuất ??')" class="dropdown-item" href="index.php?act=logout"
              ><i class="fa fa-power-off m-r-5 m-l-5"></i>Logout</a
            >

          </div>
        </li>
        <!-- ============================================================== -->
        <!-- User profile and search -->
        <!-- ============================================================== -->
      </ul>
    </div>
  </nav>
</header>