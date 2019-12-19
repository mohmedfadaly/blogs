<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

        <title>{{env('APP_NAME')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
        @include('includes.navbar')
        <div class="mb-3"></div>
                <div class="container">
                    <div>
                        @include('includes.messages') 
                        @yield('content')
                    </div>
                
                </div>
        <script src="{{asset('js/app.js')}}"></script>

                
    </body>
</html>
