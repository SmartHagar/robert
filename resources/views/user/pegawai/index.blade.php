@extends('user.layouts.default')

@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Hero -->
        <div class="block block-rounded">
            <div class="block-content">
                <div class="py-3 text-center">
                    <h1 class="h2 fw-bold mb-2">Pegawai</h1>
                    <h2 class="h5 fw-medium text-muted">Data Guru Pegawai</h2>
                </div>
            </div>
        </div>
        <!-- END Hero -->
        <div class="row">
            <!-- Row #1 -->
            <div class="col-12">
                <div class="block block-rounded h-100 mb-0">
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
            <!-- END Row #1 -->
        </div>

    </div>
    <!-- END Page Content -->
@endsection
