@extends('template-admin.layout')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tebak Gambar/</span> Create</h4>

        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Tambah Gambar</h5>
                    </div>
                    <div class="card-body">
                        <form id="ujikomForm" method="POST" action="{{ route('tebak-gambar.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="gambar" class="form-label">Gambar:</label>
                                <input type="file" id="gambar" name="gambar" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="jawaban" class="form-label">Jawaban :</label>
                                <input type="text" id="jawaban" name="jawaban" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="petunjuk" class="form-label">Petunjuk:</label>
                                <input type="text" id="petunjuk" name="petunjuk" class="form-control">
                            </div>


                            <button type="submit" class="btn btn-primary text-end">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
