@extends('template-admin.layout')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Tebak Gambar</h4>

        <div class="mb-3">
            <a href="/tebakgambar/create" class="btn btn-sm btn-primary">Tambah Soal</a>
        </div>

        <div class="card">
            <h5 class="card-header">Tebak Gambar</h5>
            <div class="table-responsive text-nowrap p-4">
                <table id="example" class="display compact nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>GAMBAR</th>
                            <th>PETUNJUK</th>
                            <th>JAWABAN</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($tebakgambar as $index => $tebakgambar)
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#modalCenter{{ $index }}">
                                        Lihat Gambar
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="modalCenter{{ $index }}" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalCenterTitle">
                                                        {{ $tebakgambar->jawaban }}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img alt="{{ $tebakgambar->jawaban }}" class="img-fluid"
                                                        src="{{ asset($tebakgambar->gambar) }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $tebakgambar->petunjuk }}</td>
                                <td>{{ $tebakgambar->jawaban }}</td>
                                <td>
                                    <a href="/tebakgambar/{{ $tebakgambar->id }}/edit"
                                        class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('tebakgambar.destroy', $tebakgambar->id) }}" method="POST"
                                        class="d-inline delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteForms = document.querySelectorAll('form[method="POST"]');

            deleteForms.forEach(form => {
                form.addEventListener('submit', function(event) {
                    event.preventDefault();

                    Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: "Anda tidak akan dapat mengembalikan ini!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
@endsection
