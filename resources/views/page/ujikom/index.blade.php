@extends('template-admin.layout')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Uji Kompetensi</h4>

        <div class="mb-3">
            <a href="{{ route('ujikom.create') }}" class="btn btn-primary">Tambah Soal</a>
        </div>

        <div class="card">
            <h5 class="card-header">Uji Kompetensi</h5>
            <div class="table-responsive text-nowrap p-4">
                <table id="example" class="display compact nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Pertanyaan dan jawaban</th>
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
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
