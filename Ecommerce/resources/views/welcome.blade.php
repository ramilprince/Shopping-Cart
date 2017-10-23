<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Petmalu Gaming</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>


            html, body {
                background-color: skyblue;
                color: black;
                font-family: 'AR CENA', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 10;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 15px;
                top: 20px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .2rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 50px;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Petmalu Gaming
                </div>

                <div class="links">
                    <a href="https://www.facebook.com/princeramil.sison.06">RAMIL R. SISON</a>
                    <a href="https://en.wikipedia.org/wiki/Gaming_computer">Gaming Laptop</a>
                    <a href="https://en.wikipedia.org/wiki/Computer_mouse">Gaming Mouse</a>
                    <a href="https://en.wikipedia.org/wiki/Smartphone">Smartphones</a>
                    <a href="https://github.com/ramilprince">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
