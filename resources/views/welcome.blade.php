<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
<div class="text-center text-light">
    <h1 class=" bg-dark text-light p-5 mb-5">Lista Film</h1>
    <div class="container">
        <div class="row g-5">
            @foreach ($movies as $movie)
                <div class="col p4 flex-grow-0">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title text-dark">{{$movie->title}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{$movie->original_title}}</h6>
                            <p class="card-text text-dark">{{$movie->date}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
</body>

</html>