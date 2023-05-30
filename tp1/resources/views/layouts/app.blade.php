<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>


    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <div style="text-align: center;">
                <h5>TP1</h5>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-black" href="/">Etudiant</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-black" href="/ville">Ville</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="col-12 text-center">
            <h3 class="display-5 mt-5">
                <!-- {{ config('app.name') }} -->
                @yield('titleHeader')
            </h3>
        </div>
        @yield('content')
    </div>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>

</html>