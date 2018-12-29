<!DOCTYPE html>
<html lang="en" data-ng-app="website">

    <head>

        <meta charset="utf-8">
        <title>Страхование в Успенском районе</title>
        <link rel="SHORTCUT ICON" href="/mt-demo/59400/59414/mt-content/uploads/2016/12/favicon.ico?_build=1534230153" type="image/vnd.microsoft.icon" />


        <link rel="canonical" href="https://template59414.motopreview.com/" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        @include('layout.css')
        @yield('css')


    </head>

    <body class="moto-background">
        <div class="page">

        @if(\Illuminate\Support\Facades\Request::path() == '/')
            @include('layout.headerWelcome')
        @elseif (\Illuminate\Support\Facades\Request::path() == 'contact')
            @include('layout.header')
        @else
            @include('layout.headerUpload')
        @endif

        @yield('content')

        </div>
        @if (\Illuminate\Support\Facades\Request::path() == '/' or \Illuminate\Support\Facades\Request::path() == 'contacts' )
            @include('layout.footer')
        @endif

            <div data-moto-back-to-top-button class="moto-back-to-top-button">
                <a ng-click="toTop($event)" class="moto-back-to-top-button-link">
                    <span class="moto-back-to-top-button-icon fa"></span>
                </a>
            </div>

        @include('layout.scripts')
        @yield('js')

    </body>

</html>