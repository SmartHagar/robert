@extends('admin.layouts.backend')

@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="row items-push">
            <div class="col-xl-12">
                <div class="block block-rounded h-100 mb-0">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            Data Pangkat
                        </h3>
                    </div>
                    <div class="block-content text-muted">
                        <p>
                            Silahkan menambah, mengubah dan menghapus data pangkat
                        </p>
                    </div>
                    {{-- form --}}
                    <div class="block-content">
                        <form class="js-validation" action="{{ route('pangkat.update', $data->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <!-- Regular -->
                            <div class="row items-push">
                                <div class="mb-4 col-md-4">
                                    <label class="form-label" for="val-username">Golongan <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" id="val-golongan" name="golongan" required>
                                        <option value="">Pilih Golongan</option>
                                        <option value="I (Juru)" @if ($data->golongan == 'I (Juru)') selected @endif>I (Juru)
                                        </option>
                                        <option value="II (Pengatur)" @if ($data->golongan == 'II (Pengatur)') selected @endif>II
                                            (Pengatur)</option>
                                        <option value="III (Penata)" @if ($data->golongan == 'III (Penata)') selected @endif>III
                                            (Penata)</option>
                                        <option value="IV (Pembina)" @if ($data->golongan == 'IV (Pembina)') selected @endif>IV
                                            (Pembina)</option>
                                    </select>
                                </div>
                                <div class="mb-4 col-md-6">
                                    <label class="form-label" for="val-pangkat">Pangkat <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="val-pangkat" name="pangkat" required
                                        placeholder="Masukan pangkat.." value="{{ $data->pangkat }}">
                                </div>
                                <div class="mb-4 col-md-2">
                                    <label class="form-label" for="val-ruang">Ruang <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="val-ruang" name="ruang" required
                                        placeholder="Ruang.." value="{{ $data->ruang }}">
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
