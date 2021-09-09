<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X-Men</title>
</head>
<body>
    @foreach($allMovies as $movie)
        <h1>{{ $movie->name }}</h1>
        <div>Genere: {{ $movie->genre }}</div>
        <div>Anno: {{ $movie->relase_year }}</div>
        <img src="{{ $movie->poster_path }}" alt="">
        <div>
            Descrizione: {{ $movie->description }}
        </div>



    @endforeach
    
</body>
</html>