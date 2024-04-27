<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="Untree.co" />
        <link rel="icon" type="image/x-icon" href="icon.png">

        <meta name="description" content="" />
        <meta name="keywords" content="bootstrap, bootstrap5" />

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
          href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
          rel="stylesheet"
        />

        <link rel="stylesheet" href="{{asset("property-theme/fonts/icomoon/style.css")}}" />
        <link rel="stylesheet" href="{{asset("property-theme/fonts/flaticon/font/flaticon.css")}}" />

        <link rel="stylesheet" href="{{asset("property-theme/css/tiny-slider.css")}}" />
        <link rel="stylesheet" href="{{asset("property-theme/css/aos.css")}}" />
        <link rel="stylesheet" href="{{asset("property-theme/css/style.css")}}" />

        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>
    <body>
        @include('livewire.partials.top-nav')
        {{ $slot }}
        @include('livewire.partials.footer')
    </body>
</html>
