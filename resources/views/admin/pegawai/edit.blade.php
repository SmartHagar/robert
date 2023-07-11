@extends('admin.layouts.backend')

@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="row items-push">
            <div class="col-xl-12">
                <div class="block block-rounded h-100 mb-0">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            Data Pegawai
                        </h3>
                    </div>
                    <div class="block-content text-muted">
                        <p>
                            Silahkan mengubah data pegawai
                        </p>
                    </div>
                    {{-- form --}}
                    <div class="block-content">
                        <form class="js-validation" action="{{ route('pegawai.update', $data->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <!-- Regular -->
                            <div class="row items-push">
                                <div class="mb-4 col-12">
                                    <label class="form-label" for="val-NIP">NIP <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="val-NIP" name="NIP" required
                                        placeholder="NIP.." value="{{ $data->NIP }}">
                                </div>
                                <div class="mb-4 col-12">
                                    <label class="form-label" for="val-personal">Personal <span
                                            class="text-danger">*</span></label>
                                    <select class="tom-select" id="val-personal" name="personal_id" required>
                                        <option value="">Pilih Personal</option>
                                        @foreach ($personal as $item)
                                            <option value="{{ $item->id }}"
                                                @if ($data->personal_id == $item->id) selected @endif>{{ $item->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-4 col-12">
                                    <label class="form-label" for="val-pangkat">Pangkat <span
                                            class="text-danger">*</span></label>
                                    <select class="tom-select" id="val-pangkat" name="pangkat_id" required>
                                        <option value="">Pilih Pangkat</option>
                                        @foreach ($pangkat as $item)
                                            <option value="{{ $item->id }}"
                                                @if ($data->pangkat_id == $item->id) selected @endif>
                                                {{ $item->golongan }}-{{ $item->pangkat }}
                                            </option>
                                        @endforeach
                                    </select>
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
