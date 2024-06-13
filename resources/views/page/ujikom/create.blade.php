@extends('template-admin.layout')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Uji Kompetensi/</span> Create</h4>

        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Tambah Pertanyaan</h5>
                    </div>
                    <div class="card-body">
                        <form id="ujikomForm" method="POST" action="{{ route('ujikom.store') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="question" class="form-label">Pertanyaan:</label>
                                <textarea id="question" name="questions[0][question]" class="form-control"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="answer1" class="form-label">Jawaban 1:</label>
                                <input type="text" id="answer1" name="questions[0][answers][0][text]"
                                    class="form-control">
                                <div class="form-check  mt-2">
                                    <input type="radio" id="correct1" name="questions[0][correct_answer]" value="0"
                                        class="form-check-input">
                                    <label for="correct1" class="form-check-label">Jawaban Benar</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="answer2" class="form-label">Jawaban 2:</label>
                                <input type="text" id="answer2" name="questions[0][answers][1][text]"
                                    class="form-control">
                                <div class="form-check mt-2">
                                    <input type="radio" id="correct2" name="questions[0][correct_answer]" value="1"
                                        class="form-check-input">
                                    <label for="correct2" class="form-check-label">Jawaban Benar</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="answer3" class="form-label">Jawaban 3:</label>
                                <input type="text" id="answer3" name="questions[0][answers][2][text]"
                                    class="form-control">
                                <div class="form-check mt-2">
                                    <input type="radio" id="correct3" name="questions[0][correct_answer]" value="2"
                                        class="form-check-input">
                                    <label for="correct3" class="form-check-label">Jawaban Benar</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="answer4" class="form-label">Jawaban 4:</label>
                                <input type="text" id="answer4" name="questions[0][answers][3][text]"
                                    class="form-control">
                                <div class="form-check mt-2">
                                    <input type="radio" id="correct4" name="questions[0][correct_answer]" value="3"
                                        class="form-check-input">
                                    <label for="correct4" class="form-check-label">Jawaban Benar</label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary text-end">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
