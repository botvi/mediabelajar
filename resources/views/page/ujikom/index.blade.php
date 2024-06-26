@extends('template-admin.layout')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Uji Kompetensi</h4>

        <div class="mb-3">
            <a href="{{ route('ujikom.create') }}" class="btn btn-sm btn-primary">Tambah Soal</a>
        </div>

        <div class="card">
            <h5 class="card-header">Uji Kompetensi</h5>
            <div class="table-responsive text-nowrap p-4">
                <table id="example" class="display compact nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>PERTANYAAN DAN JAWABAN</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($ujiKoms as $index => $ujikom)
                            <tr>
                                <td>
                                    <div class="card accordion-item">
                                        <h2 class="accordion-header" id="heading{{ $index }}">
                                            <button type="button" class="accordion-button collapsed"
                                                data-bs-toggle="collapse" data-bs-target="#accordion{{ $index }}"
                                                aria-expanded="false" aria-controls="accordion{{ $index }}">
                                                {{ $ujikom->question }}
                                            </button>
                                        </h2>
                                        <div id="accordion{{ $index }}" class="accordion-collapse collapse"
                                            aria-labelledby="heading{{ $index }}" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                @foreach ($ujikom->answers as $answer)
                                                    <li>
                                                        <span style="color: {{ $answer['correct'] ? 'green' : 'red' }}">
                                                            {{ $answer['text'] }}
                                                        </span>
                                                        @if ($answer['correct'])
                                                            <span class="badge bg-success"></span>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="{{ route('ujikom.edit', $ujikom->id) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('ujikom.destroy', $ujikom->id) }}" method="POST"
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
