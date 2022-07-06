<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

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

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            {{-- <section>
                <div> --}}
                    <div class="content">
                        <div class="container-flex">
                            {{-- <div class="row justify-content-center"> --}}
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">Form to generate URL</div>
                                        <div class="card-body">
                                            <form action="{{url('/short')}}"  method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="exampleInputUrl">Enter URL link</label>
                                                    <input type="text" name="url" id="url" class="form-control" id="exampleInputUrl" aria-describedby="urlHelp" placeholder="Enter URL">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Generate</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            {{-- </div> --}}
                        </div>
                    </div>
                {{-- </div>
            </section> --}}
        </div>
    </body>
</html>
