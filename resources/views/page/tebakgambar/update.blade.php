@extends('template-admin.layout')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Edit /</span> Tebak Gambar</h4>

        <div class="card">
            <div class="card-body">
                <form action="{{ url('/tebakgambar/' . $tebakgambar->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar">
                        <img src="{{ asset($tebakgambar->gambar) }}" alt="{{ $tebakgambar->jawaban }}"
                            class="img-fluid mt-2" width="200">
                    </div>
                    <div class="mb-3">
                        <label for="jawaban" class="form-label">Jawaban</label>
                        <input type="text" class="form-control" id="jawaban" name="jawaban"
                            value="{{ $tebakgambar->jawaban }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="petunjuk" class="form-label">Petunjuk</label>
                        <input type="text" class="form-control" id="petunjuk" name="petunjuk"
                            value="{{ $tebakgambar->petunjuk }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
