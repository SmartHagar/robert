@extends('user.layouts.default')

@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Hero -->
        <div class="block block-rounded">
            <div class="block-content">
                <div class="py-3 text-center">
                    <h1 class="h2 fw-bold mb-2">Selamat Datang</h1>
                    {{-- <h2 class="h5 fw-medium text-muted">Hey Admin, you look great!</h2> --}}
                </div>
            </div>
        </div>
        <!-- END Hero -->
        <div class="row">
            <!-- Row #1 -->
            <div class="col-6">
                <a class="block block-rounded block-link-rotate text-end" href="javascript:void(0)">
                    <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
                        <div class="d-none d-sm-block">
                            <i class="fa fa-shopping-bag fa-2x opacity-25"></i>
                        </div>
                        <div class="text-end">
                            <div class="fs-3 fw-semibold">{{ $honorer }}</div>
                            <div class="fs-sm fw-semibold text-uppercase text-muted">Honorer</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6">
                <a class="block block-rounded block-link-rotate text-end" href="javascript:void(0)">
                    <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
                        <div class="d-none d-sm-block">
                            <i class="fa fa-wallet fa-2x opacity-25"></i>
                        </div>
                        <div class="text-end">
                            <div class="fs-3 fw-semibold">{{ $pegawai }}</div>
                            <div class="fs-sm fw-semibold text-uppercase text-muted">Pegawai</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END Row #1 -->
        </div>

    </div>
    <!-- END Page Content -->
@endsection
