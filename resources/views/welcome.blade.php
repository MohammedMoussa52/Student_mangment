<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> MySchool </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background: url(https://d24h7hn1t1979q.cloudfront.net/images/backgrounds/default-image-background-compressor-v2.jpg);
                background-position: left top ;
                background-repeat: repeat;
                color: whitesmoke;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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

            .content {
                text-align: center;
            }

            .title {

                font-size: 84px;
                border-radius: 25px;
                background-position: center ;
                background-repeat: round;
                padding: 20px; 
                width: 560px;
                height: 190px;
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                font-size: 15px;
                border-radius: 35px;
                background: lightseagreen;
                background-position: center ;
                background-repeat: round;
                padding: 10px; 
          
            }
            .links:hover >a{
                background:lightgray;
             
                }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}"> Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Collage Banner
                </div>

                <div class="links">
                    <a href="https://undergrad.usc.edu/programs/major/list/naturalsciences/">Sciences</a>
                    <a href="https://www.worldwidelearn.com/education-rankings/15-surprisingly-valuable-arts-and-literature-majors.html">Arts</a>
                    <a href="https://bigfuture.collegeboard.org/explore-careers/college-majors/business-majors-the-basics">business</a>
                    <a href="https://www.classcentral.com/collection/top-free-online-courses">Course list</a>
                    <a href="https://www.technoinfonet.com/blog/what-are-the-frequently-asked-questions-on-laravel-development">FAQ</a>
                </div>
            </div>
        </div>
    </body>
</html>
