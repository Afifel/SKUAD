<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SKUAD</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #F5DEB3;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
				font-decoration : bold;
				
            }

            .full-height {
                height: 80vh;
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
                top: 10px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 20px;
				font-decoration : Bold;
				color : black;

            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
			
            }
        </style>
    </head>
    
        

            <div class="content">
                <div class="title m-b-md">
                    SELAMAT DATANG
					<p> Di Sistem Komunikasi Antara Orangtua dan Dosen Wali</p>
                </div>

                <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="center links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
            </div>
        </div>
    </body>
</html>
