<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('web') }}/assets/css/leaderboard.css">
</head>
<body>
    <main>
        <div id="header">
            <h1><span style="color: #26355d;">Uji Kompetensi</span> <span style="color: rgb(246, 172, 26);">leaderboard
            </span>
            </h1>
            
            <div class="btn-back">
            <a href="/ujikom" class="link-page back-btn">
                <img src="{{ asset('web') }}/assets/btn/close_2.png" width="60" height="auto" />
            </a>
        </div>
    </div>
        <div id="leaderboard">
            <div class="ribbon"></div>
            <table>
                @foreach ($allScores as $index => $score)
                    <tr>
                        <td class="number">{{ $index + 1 }}</td>
                        <td class="name">{{ $score['nama'] }}</td>
                        <td class="points">
                            {{ $score['score'] }}
                            @if ($index == 0)
                                <img class="gold-medal" src="https://github.com/malunaridev/Challenges-iCodeThis/blob/master/4-leaderboard/assets/gold-medal.png?raw=true" alt="gold medal"/>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </main>
</body>
</html>
