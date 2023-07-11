@extends('admin.layouts.backend')

@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="row items-push">
            <div class="col-xl-12">
                <div class="block block-rounded h-100 mb-0">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            Data Personal
                        </h3>
                    </div>
                    <div class="block-content text-muted">
                        <p>
                            Silahkan mengubah data personal
                        </p>
                    </div>
                    {{-- form --}}
                    <div class="block-content">
                        <form class="js-validation" action="{{ route('personal.store') }}" method="POST">
                            @csrf
                            <!-- Regular -->
                            <div class="row items-push">
                                <div class="mb-4 col-12">
                                    <label class="form-label" for="val-nama">Nama <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="val-nama" name="nama" required
                                        placeholder="Masukan nama..">
                                </div>
                                <div class="mb-4 col-md-4">
                                    <label class="form-label" for="val-jabatan">Jabatan <span
                                            class="text-danger">*</span></label>
                                    <select class="tom-select" id="val-jabatan" name="jabatan_id" required>
                                        <option value="">Pilih Jabatan</option>
                                        @foreach ($jabatan as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-4 col-md-4">
                                    <label class="form-label" for="val-jenkel">Jenis Kelamin <span
                                            class="text-danger">*</span></label>
                                    <div class="mb-4">
                                        <div class="space-x-2">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" id="Laki-laki" name="jenkel"
                                                    value="Laki-Laki" checked="">
                                                <label class="form-check-label" for="Laki-laki">Laki-Laki</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" id="Perempuan" name="jenkel"
                                                    value="Perempuan">
                                                <label class="form-check-label" for="Perempuan">Perempuan</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 col-md-4">
                                    <label class="form-label" for="val-agama">Agama <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" id="val-agama" name="agama" required>
                                        <option value="">Pilih Agama</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                                <div class="mb-4 col-8">
                                    <label class="form-label" for="val-pendidikan">Pendidikan <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="val-pendidikan" name="pendidikan"
                                        required placeholder="Masukan pendidikan..">
                                </div>
                                <div class="mb-4 col-4">
                                    <label class="form-label" for="val-no_hp">No. Hp <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="val-no_hp" name="no_hp" required
                                        placeholder="Masukan No. Hp..">
                                </div>
                                <div class="mb-4 col-md-4">
                                    <label class="form-label" for="val-tempat">Tempat Lahir<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="val-tempat" name="tempat" required
                                        placeholder="Tempat..">
                                </div>
                                <div class="mb-4 col-md-4">
                                    <label class="form-label" for="val-tanggal_lahir">Tanggal lahir <span
                                            class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="val-tanggal_lahir" name="tanggal_lahir"
                                        required placeholder="Tanggal lahir..">
                                </div>

                                <div class="mb-4 col-md-4">
                                    <label class="form-label" for="val-alamat">Aalamat <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="val-alamat" name="alamat" required
                                        placeholder="Alamat..">
                                </div>
                            </div>
                            <!-- END Regular -->
                            <!-- Submit -->
                            <div class="row items-push justify-content-end">
                                <div class="col-2">
                                    <button type="submit" class="btn btn-primary float-end">Simpan</button>
                                </div>
                            </div>
                            <!-- END Submit -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection

@section('js')
    <script src="{{ asset('js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/pages/be_forms_validation.min.js') }}"></script>
@endsection
