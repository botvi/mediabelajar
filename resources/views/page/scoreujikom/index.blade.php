@extends('template-admin.layout')
@section('style')
<style>
    .table {
        width: 100%;
        margin-bottom: 1rem;
        background-color: transparent;
    }

    .table th,
    .table td {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }

    .table thead th {
        vertical-align: middle;
        border-bottom: 2px solid #dee2e6;
        color: #fff; /* warna teks header */
    }

    .table tbody + tbody {
        border-top: 2px solid #dee2e6;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0, 0, 0, 0.05);
    }

    .table-hover tbody tr:hover {
        background-color: rgba(0, 0, 0, 0.075);
    }

    .table-bordered {
        border: 1px solid #dee2e6;
    }

    .table-bordered th,
    .table-bordered td {
        border: 1px solid #dee2e6;
    }

    .table-dark {
        color: #fff;
        background-color: #343a40; /* warna latar header */
    }

    .table-dark th,
    .table-dark td,
    .table-dark thead th {
        border-color: #454d55;
    }

    .text-center {
        text-align: center;
    }

    img.gold-medal {
        vertical-align: middle;
        margin-right: 10px;
    }
</style>

@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Score Uji Kompetensi</h4>

    <div class="card">
        <h5 class="card-header">Score Uji Kompetensi</h5>
        <div class="table-responsive p-4">
            <table id="example" class="table table-striped table-bordered table-hover" style="width:100%">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center">#</th>
                        <th>NAMA</th>
                        <th class="text-center">SCORE</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allScores as $index => $score)
                    <tr>
                        <td class="text-center">
                            @if ($index == 0)
                                <img src="https://github.com/malunaridev/Challenges-iCodeThis/blob/master/4-leaderboard/assets/gold-medal.png?raw=true" height="30px" alt="gold medal"/>
                            @else
                                {{ $index + 1 }}
                            @endif
                        </td>
                        <td>{{ $score['nama'] }}</td>
                        <td class="text-center">{{ $score['score'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
