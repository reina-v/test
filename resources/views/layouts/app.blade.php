<!DOCTYPE HTML>
    <html lang="ja">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>@yield('title')</title>
            <link href="{{ asset('css/app.css') }}?v={{ time() }}" rel="stylesheet">
            @yield('styles')
        </head>

        <body>
            <div class="container">
                @yield('content')
            </div>
            @yield('scripts')
        </body>
    </html>
