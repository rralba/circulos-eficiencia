<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Circulos de Eficiencia</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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
                right: 10px;
                top: 18px;
            }

            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
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
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .submenu{
                background: rgba(245,245,247,0.7);
                padding: 0;
                padding-top: 8px;
                padding-bottom: 8px;
                text-align: center; 
                height: 50px;
                z-index: 1;
                width: 100%;
                position: relative;
                overflow: hidden;
            }

            /* footer {
                position: fixed;
                height: 100px;
                bottom: 0;
                width: 100%;
                background: #F5F5F5;
            } */
        </style>
    </head>
    <body>
        @if (Route::has('login'))
            <div class="submenu">
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Registro</a>
                    @endif
                    @endauth
                </div>
                <div class="top-left links">
                    <a href="{{ route('propuesta') }}">Propuesta</a>
                </div>
            </div>    
        @endif
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Circulos de Eficiencia <br>
                    Gerencia de Capacitacion
                </div>
            </div>
        </div>
        {{-- <footer class="page-footer font-small blue pt-4">
            <div class="container-fluid text-center text-md-left">
                <div class="row">
                  <div class="col-md-6 mt-md-0 mt-3">
                    <h5 class="text-uppercase">Información de Contacto</h5>
                    <p>En caso de requerir ayuda o información .</p>
                  </div>
                  <hr class="clearfix w-100 d-md-none pb-3">
                  <div class="col-md-6 mb-md-0 mb-3">
                    <p class="text-center">Extensiones:</p>
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <p class="fa fa-phone"> 11478</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <p class="fa fa-phone"> 11478</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <p class="fa fa-phone"> 11478</p>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </footer> --}}
    </body>
</html>
