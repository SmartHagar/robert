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
                <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1"
                    href="javascript:void(0)">
                    <span>Profile</span>
                    <i class="fa fa-fw fa-user opacity-25"></i>
                </a>
                <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                    <span>Inbox</span>
                    <i class="fa fa-fw fa-envelope-open opacity-25"></i>
                </a>
                <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1"
                    href="javascript:void(0)">
                    <span>Invoices</span>
                    <i class="fa fa-fw fa-file opacity-25"></i>
                </a>
                <div class="dropdown-divider"></div>

                <!-- Toggle Side Overlay -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1"
                    href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                    <span>Settings</span>
                    <i class="fa fa-fw fa-wrench opacity-25"></i>
                </a>
                <!-- END Side Overlay -->

                <div class="dropdown-divider"></div>
                <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1"
                    href="javascript:void(0)">
                    <span>Sign Out</span>
                    <i class="fa fa-fw fa-sign-out-alt opacity-25"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- END User Dropdown -->

</div>
