  <header id="page-header">
      <!-- Header Content -->
      <div class="content-header">
          <!-- Left Section -->
          <div class="space-x-1">
              <!-- Logo -->
              <a class="link-fx fw-bold" href="">
                  <span class="fs-4 text-primary">Kementrian Agama Kabupaten Jayapura</span>
              </a>
              <!-- END Logo -->
          </div>
          <!-- END Left Section -->

          <!-- Middle Section -->
          <div class="d-none d-lg-block">
              <!-- Header Navigation -->
              <!-- Desktop Navigation, mobile navigation can be found in #sidebar -->
              <ul class="nav-main nav-main-horizontal nav-main-hover">
                  <li class="nav-main-item">
                      <a class="nav-main-link" href={{ route('user') }}>
                          <i class="nav-main-link-icon fa fa-house-user"></i>
                          <span class="nav-main-link-name">Dashboard</span>
                      </a>
                  </li>
                  <li class="nav-main-item">
                      <a class="nav-main-link" href={{ route('user.honorer') }}>
                          <i class="nav-main-link-icon fa fa-puzzle-piece"></i>
                          <span class="nav-main-link-name">Honorer</span>
                      </a>
                  </li>
                  <li class="nav-main-item">
                      <a class="nav-main-link" href={{ route('user.pegawai') }}>
                          <i class="nav-main-link-icon fa fa-puzzle-piece"></i>
                          <span class="nav-main-link-name">Pegawai</span>
                      </a>
                  </li>
              </ul>
              <!-- END Header Navigation -->
          </div>
          <!-- END Middle Section -->

          <!-- Right Section -->
          <div class="space-x-1">

              <!-- Toggle Sidebar -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout"
                  data-action="sidebar_toggle">
                  <i class="fa fa-fw fa-bars"></i>
              </button>
              <!-- END Toggle Sidebar -->
          </div>
          <!-- END Right Section -->
      </div>
      <!-- END Header Content -->
  </header>
