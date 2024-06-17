@extends('template-admin.layout')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Score Uji Kompetensi</h4>

        <div class="card">
            <h5 class="card-header">Score Uji Kompetensi</h5>
            <div class="table-responsive text-nowrap p-4">
                <table id="example" class="display compact nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>NAMA</th>
                            <th>SCORE</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($allScores as $index => $score)
                        <tr>
                               
                            <td class="name">{{ $score['nama'] }}</td>
                            <td class="points">
                                {{ $score['score'] }}
                                @if ($index == 0)
                                    <img class="gold-medal" src="https://github.com/malunaridev/Challenges-iCodeThis/blob/master/4-leaderboard/assets/gold-medal.png?raw=true" height="30px" alt="gold medal"/>
                                @endif
                            </td>
                               
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

