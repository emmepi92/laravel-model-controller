<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X-Men</title>

    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <header>

        <h1>X-MEN SERIES</h1>

    </header>

    <div class="container">
        <div class="row">
            @foreach($allMovies as $movie)
                <div class="col-12">
                    <div class="row">
                        @if( $movie->id % 2)
                            <div class="col-6">
                                <div class="img-container">
                                    <img src="{{ $movie->poster_path }}" alt="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="info-container">
                                    <div class="info-container-inner">
                                        <h2>{{ $movie->name }}</h2>
                                        <div>Genere: {{ $movie->genre }}</div>
                                        <div>Anno: {{ $movie->relase_year }}</div>
                                        <div>
                                            Descrizione: {{ $movie->description }}
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-6">
                                <div class="info-container">
                                    <div class="info-container-inner">
                                        <h2>{{ $movie->name }}</h2>
                                        <div>Genere: {{ $movie->genre }}</div>
                                        <div>Anno: {{ $movie->relase_year }}</div>
                                        <div>
                                            Descrizione: {{ $movie->description }}
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="img-container">
                                    <img src="{{ $movie->poster_path }}" alt="">
                                </div>
                            </div>
                        
                        @endif
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    
</body>
</html>