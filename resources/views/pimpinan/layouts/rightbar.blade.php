<div class="space-x-1">
    <!-- User Dropdown -->
    <div class="dropdown d-inline-block">
        <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user d-sm-none"></i>
            <span class="d-none d-sm-inline-block fw-semibold">Admin</span>
            <i class="fa fa-angle-down opacity-50 ms-1"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
            <div class="p-2">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1"
                    href="{{ route('logout') }}">
                    <span>Logout</span>
                    <i class="fa fa-fw fa-sign-out-alt opacity-25"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- END User Dropdown -->

</div>
