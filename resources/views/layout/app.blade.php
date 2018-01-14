<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="{{ URL::asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('css/open-iconic-master/font/css/open-iconic-bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('css/general/layout/app.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('css/general/layout/footer.css') }}" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        @section('styles')@show

        <title>LaraUsers</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-brand" href="#">LaraUsers</a>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                    <button class="btn btn-outline-success my-2 my-sm-0">Logoff</button>
                </div>
            </nav>
        </header>

        @section('sidebar')
            This is the master sidebar.
        @show

        <main role="main" class="container">
            <div class="col-sm-12">
                @yield('content')
            </div>
        </main>

        <footer class="footer">
            <div class="container">
                <p class="text-muted">LaraUsers</p>
            </div>
        </footer>

        <script src="{{ URL::asset('js/jquery/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ URL::asset('js/popper/popper.min.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('js/general/main.js') }}"></script>
        <script>
            const URL = "{{ url('/') }}";
        </script>

        @section('scripts')@show
    </body>
</html>