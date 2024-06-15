@extends('template-admin.layout')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Edit Ujikom</h4>

        <div class="card">
            <h5 class="card-header">Edit Ujikom</h5>
            <div class="card-body">
                <form action="{{ route('ujikom.update', $ujikom->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="question" class="form-label">Question</label>
                        <input type="text" class="form-control" id="question" name="question"
                            value="{{ old('question', $ujikom->question) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="answers" class="form-label">Answers</label>
                        @foreach ($ujikom->answers as $index => $answer)
                            <div class="input-group mb-2">
                                <input type="text" class="form-control" name="answers[{{ $index }}][text]"
                                    value="{{ old('answers.' . $index . '.text', $answer['text']) }}" required>
                                <div class="input-group-text">
                                    <input type="radio" name="correct_answer" value="{{ $index }}"
                                        {{ $answer['correct'] ? 'checked' : '' }}> Benar
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
