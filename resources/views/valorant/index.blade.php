<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{env('APP_NAME')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body class="antialiased">

        <header>
            <nav class="navbar navbar-expand-sm navbar-light bg-primary">
                <div class="container-fluid">
                    <a class="navbar-brand text-light" href="#">GG Research</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
                        aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarID">
                        <div class="navbar-nav">
                            <a class="nav-link text-light active" aria-current="page" href="">Home</a>
                            <a class="nav-link text-light" href="">Valorant</a>
                            <a class="nav-link text-light" href="">Apex</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            @foreach ($articles as $item)
                <a class="card mb-3 display-block text-decoration-none" style="max-width: 540px;" href="{{$item->url}}">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img class="img-fluid " src="{{$item->thumbnail_url}}" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-dark">{{$item->title}}</h5>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </main>

        <footer>

        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
