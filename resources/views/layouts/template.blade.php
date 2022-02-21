<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> {{ env('APP_NAME') }} </title>

    <!-- styles -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="XANOUMI est un site de ecommerce qui vous propose des services de qualité adaptées à vos différents besoins " />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1" />
        <meta property="fb:app_id" content="205920604956872" />
        <meta property="og:url" content="https://xanoumi.herokuapp.com/" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="XANOUMI" data-dynamic="true" />
        <meta property="og:description" content="XANOUMI est un site de ecommerce qui vous propose des services de qualité adaptées à vos différents besoins " data-dynamic="true" />
        <meta property="og:image" content="{{ asset('img/xanoumi_logo.png')}}" data-dynamic="true" />
        <meta property="og:image:width" content="256" data-dynamic="true">
        <meta property="og:image:height" content="256" data-dynamic="true">
        <meta property="og:locale" content="fr_FR" />
        <meta property="og:site_name" content="XANOUMI" />
        <meta property="twitter:url" content="https://xanoumi.herokuapp.com/" />
        <meta property="twitter:card" content="summary" />
        <meta property="twitter:title" content="XANOUMI" />
        <meta property="twitter:description" content="XANOUMI est un site de ecommerce qui vous propose des services de qualité adaptées à vos différents besoins " />
        <meta property="twitter:image" content="{{ asset('img/xanoumi_logo.png')}}" />

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/all.css')}}">

     @stack('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
   
</head>
<body>

<header>
@include ('layouts.header')
</header>
<main>
    @yield('content')
</main>

@include ('layouts.footer')

    <!-- JavaScript -->

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    @stack('scripts')
</body>
</html>