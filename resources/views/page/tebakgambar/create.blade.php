<!DOCTYPE html>
<html>

<head>
    <title>Upload Tebak Gambar</title>
</head>

<body>
    <h1>Upload Tebak Gambar</h1>

    @if ($message = Session::get('success'))
        <div>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <form action="{{ route('tebakgambar.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="image">Image:</label>
            <input type="file" name="image" id="image">
            @error('image')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="answer">Answer:</label>
            <input type="text" name="answer" id="answer">
            @error('answer')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="clue">Clue:</label>
            <textarea name="clue" id="clue"></textarea>
            @error('clue')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Submit</button>
    </form>
</body>

</html>
