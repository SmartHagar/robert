@extends('admin.layouts.backend')

@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="row items-push">
            <div class="col-xl-12">
                <div class="block block-rounded h-100 mb-0">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            Data Honorer
                        </h3>
                    </div>
                    <div class="block-content text-muted">
                        <p>
                            Silahkan menambah, menghapus dan mengubah data honorer
                        </p>
                    </div>
                    {{-- form --}}
                    <div class="block-content">
                        <form class="js-validation" action="{{ route('honorer.store') }}" method="POST">
                            @csrf
                            <!-- Regular -->
                            <div class="row items-push">
                                <div class="mb-4 col-12">
                                    <label class="form-label" for="val-personal">Personal <span
                                            class="text-danger">*</span></label>
                                    <select class="tom-select" id="val-personal" name="personal_id" required>
                                        <option value="">Pilih Personal</option>
                                        @foreach ($personal as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-4 col-md-4">
                                    <label class="form-label" for="val-mulai_kerja">Mulai Kerja <span
                                            class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="val-mulai_kerja" name="mulai_kerja"
                                        required placeholder="Tanggal lahir..">
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
