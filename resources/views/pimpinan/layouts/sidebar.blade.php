 <nav id="sidebar">
     <!-- Sidebar Content -->
     <div class="sidebar-content">
         <!-- Side Header -->
         <div class="content-header justify-content-lg-center">
             <!-- Logo -->
             <div>
                 <span class="smini-visible fw-bold tracking-wide fs-lg">
                     c<span class="text-primary">b</span>
                 </span>
                 <a class="link-fx fw-bold tracking-wide mx-auto" href="/">
                     <span class="smini-hidden">
                         <span class="fs-4 text-primary">Menu</span>
                     </span>
                 </a>
             </div>
             <!-- END Logo -->

             <!-- Options -->
             <div>
                 <!-- Close Sidebar, Visible only on mobile screens -->
                 <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                 <button type="button" class="btn btn-sm btn-alt-danger d-lg-none" data-toggle="layout"
                     data-action="sidebar_close">
                     <i class="fa fa-fw fa-times"></i>
                 </button>
                 <!-- END Close Sidebar -->
             </div>
             <!-- END Options -->
         </div>
         <!-- END Side Header -->

         <!-- Sidebar Scrolling -->
         <div class="js-sidebar-scroll">
             <!-- Side User -->
             <div class="content-side content-side-user px-0 py-0">
                 <!-- Visible only in mini mode -->
                 <div class="smini-visible-block animated fadeIn px-3">
                     <img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar15.jpg') }}"
                         alt="">
                 </div>
                 <!-- END Visible only in mini mode -->

                 <!-- Visible only in normal mode -->
                 <div class="smini-hidden text-center mx-auto">
                     <a class="img-link" href="javascript:void(0)">
                         <img class="img-avatar" src="{{ asset('media/avatars/avatar15.jpg') }}" alt="">
                     </a>
                     <ul class="list-inline mt-3 mb-0">
                         <li class="list-inline-item">
                             <a class="link-fx text-dual fs-sm fw-semibold text-uppercase" href="javascript:void(0)">
                                 Pimpinan</a>
                         </li>
                         <li class="list-inline-item">
                             <a class="link-fx text-dual" title="Logout" href="{{ route('logout') }}">
                                 <i class="fa fa-sign-out-alt"></i>
                             </a>
                         </li>
                     </ul>
                 </div>
                 <!-- END Visible only in normal mode -->
             </div>
             <!-- END Side User -->

             <!-- Side Navigation -->
             <div class="content-side content-side-full">
                 <ul class="nav-main">
                     <li class="nav-main-item">
                         <a class="nav-main-link{{ request()->is('pimpinan') ? ' active' : '' }}"
                             href={{ route('pimpinan') }}>
                             <i class="nav-main-link-icon fa fa-house-user"></i>
                             <span class="nav-main-link-name">Dashboard</span>
                         </a>
                     </li>
                     {{-- <li class="nav-main-heading">Laporan</li> --}}
                     <li class="nav-main-item{{ request()->is('pimpinan/laporan/*') ? ' open' : '' }}">
                         <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                             aria-expanded="true" href="#">
                             <i class="nav-main-link-icon fa fa-lightbulb"></i>
                             <span class="nav-main-link-name">Laporan</span>
                         </a>
                         <ul class="nav-main-submenu">
                             <li class="nav-main-item">
                                 <a class="nav-main-link{{ request()->is('pimpinan/laporan/pegawai') ? ' active' : '' }}"
                                     href="{{ route('pegawai.pimpinan.index') }}">
                                     <span class="nav-main-link-name">Pegawai</span>
                                 </a>
                             </li>
                             <li class="nav-main-item">
                                 <a class="nav-main-link{{ request()->is('pimpinan/laporan/honorer') ? ' active' : '' }}"
                                     href="{{ route('honorer.pimpinan.index') }}">
                                     <span class="nav-main-link-name">Honorer</span>
                                 </a>
                             </li>
                             {{-- get date now --}}
                             @php
                                 $date = date('Y-m-d');
                             @endphp
                             <li class="nav-main-item">
                                 <a class="nav-main-link{{ request()->is('pimpinan/laporan/absensi') ? ' active' : '' }}"
                                     href="{{ route('absensi.pimpinan.index', "tgl_absen=$date") }}">
                                     <span class="nav-main-link-name">Absensi</span>
                                 </a>
                             </li>
                         </ul>
                     </li>
                 </ul>
             </div>
             <!-- END Side Navigation -->
         </div>
         <!-- END Sidebar Scrolling -->
     </div>
     <!-- Sidebar Content -->
 </nav>
