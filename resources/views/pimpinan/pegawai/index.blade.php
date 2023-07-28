@extends('pimpinan.layouts.backend')

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
            <div class="col-12">
                <div class="block block-rounded h-100 mb-0">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            Laporan Guru Pegawai
                        </h3>
                    </div>
                    <div class="block block-rounded">
                        <div class="table-responsive">
                            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                            <table
                                class="table table-responsive table-bordered table-striped table-vcenter js-dataTable-buttons">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 80px;">#</th>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Pangkat</th>
                                        <th>Pendidikan</th>
                                        <th>Agama</th>
                                        <th>Tempat, Tgl.Lahir</th>
                                        <th>No. HP</th>
                                        <th>Alamat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-muted text-nowrap"">{{ $item->NIP }}</td>
                                            <td class="text-muted text-nowrap"">{{ $item->personal->nama }}</td>
                                            <td class="text-muted text-nowrap"">{{ $item->personal->jabatan->nama }}</td>
                                            <td class="text-muted text-nowrap"">
                                                {{ $item->pangkat->golongan }}-{{ $item->pangkat->pangkat }}</td>
                                            <td class="text-muted text-nowrap"">{{ $item->personal->pendidikan }}</td>
                                            <td class="text-muted text-nowrap"">{{ $item->personal->agama }}</td>
                                            <td class="text-muted text-nowrap"">{{ $item->personal->tempat }},
                                                {{ $item->personal->tanggal_lahir }}</td>
                                            <td class="text-muted text-nowrap"">{{ $item->personal->no_hp }}</td>
                                            <td class="text-muted text-nowrap"">{{ $item->personal->alamat }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
