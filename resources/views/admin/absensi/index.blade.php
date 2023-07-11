@extends('admin.layouts.backend')
@section('js')
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/buttons.html5.min.js') }}"></script>
    <!-- Page JS Code -->
    @vite(['resources/js/pages/datatables.js'])
@endsection

@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="row items-push">
            <div class="col-xl-12">
                <div class="block block-rounded h-100 mb-0">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            Data Absensi
                        </h3>
                        <div>
                            <a href="{{ route('absensi.create') }}" class="btn btn-secondary float-end">Tambah Data</a>
                        </div>
                    </div>
                    <div class="block block-rounded col-3 mx-auto">
                        <input type="date" name="tgl_absen" class="form-control" id="tgl_absen">
                    </div>
                    <!-- Dynamic Table with Export Buttons -->
                    <div class="block block-rounded">
                        <div class="table-responsive">
                            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                            <table
                                class="table table-responsive table-bordered table-striped table-vcenter js-dataTable-buttons">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 80px;">#</th>
                                        <th>Nama</th>
                                        <th>jam masuk</th>
                                        <th>jam pulang</th>
                                        <th>keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-muted text-nowrap">{{ $item->nama }}</td>
                                            <td class="text-muted text-nowrap">
                                                {{-- {{ $item->jam_masuk }} --}}
                                                <input type="time" value="{{ $item->jam_masuk }}" class="form-control"
                                                    name="jam_masuk" id="jam_masuk_{{ $item->id }}" required />
                                                <span class="text-danger d-none"
                                                    id="jam_masuk_error_{{ $item->id }}">Tidak
                                                    boleh kosong</span>
                                            </td>
                                            <td class="text-muted text-nowrap">
                                                <input type="time" value="{{ $item->jam_pulang }}" class="form-control"
                                                    name="jam_pulang" id="jam_pulang_{{ $item->id }}" />
                                                <span class="text-danger d-none"
                                                    id="jam_pulang_error_{{ $item->id }}">Tidak
                                                    boleh kosong</span>
                                            </td>
                                            <td class="text-muted text-nowrap">
                                                <textarea class="form-control" name="keterangan" id="keterangan_{{ $item->id }}">{{ $item->keterangan }}</textarea>
                                                <span class="text-danger d-none"
                                                    id="keterangan_error_{{ $item->id }}">Tidak
                                                    boleh kosong</span>
                                            </td>
                                            <td class="text-muted d-flex justify-content-around">
                                                {{-- simpan --}}
                                                <button class="btn btn-primary btn-sm simpan_absen" role="button"
                                                    title="Simpan" data-url="absensi"
                                                    data-personal_id="{{ $item->id }}">
                                                    Simpan
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <!-- END Dynamic Table with Export Buttons -->
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
