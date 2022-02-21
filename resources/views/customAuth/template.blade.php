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
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
   
</head>
<body>

<header>
    <div class="container-fluid d-flex justify-content-end py-3 ">
       <a href="{{ route('accueil') }}" class="text-decoration-none text-dark"><h1 class="x-text-fs8"> <span class="text-warning">XANOUMI</span> .COM</h1></a> 
    </div>
</header>

<main>
 <div class="container-fluid py-5 x-auth-container">
    <div class="container py-4 d-flex justify-content-center">
        <div class="row d-flex align-items-center">
            <div class="col-4">
                
                @yield('content')
              
            </div>

            <div class="col-8 p-5 text-white">
                <h1 class="">Des offres disponibles pour  toutes les bourses</h1>
                <div class="x-text-fs6">Le meilleur endroit pour faire vos achats</div>
            </div>
        </div>
    </div>
 </div>
</main>


<footer class="bg-light p-2">

<div class="container">
    <div class="row">
        <div class="col-9 d-flex justify-content-center">
           
        </div>
        <div class="col-3 ">
            <ul class="nav">
                <li class="nav-item"><a href="" class="nav-link text-muted"> <i class="fab fa-facebook"></i> </a></li>
                <li class="nav-item"><a href="" class="nav-link text-muted"> <i class="fab fa-linkedin"></i> </a></li>

                <li class="nav-item"><a href="" class="nav-link text-muted"> <i class="fab fa-twitter"></i> </a></li>

            </ul>
        </div>
    </div>
</div>

<div class="p-1 "><div class="border-bottom"></div>


<div class="container d-flex justify-content-center ">
    <ul class="nav x-nav">
        <li class="nav-item"><a href="" class="nav-link text-muted x-nav-footer-text">Politique de liste de produits </a></li>
        <li class="nav-item"><a href="" class="nav-link text-muted x-nav-footer-text">Protection de la propriété intellectuelle</a></li>
        <li class="nav-item"><a href="" class="nav-link text-muted x-nav-footer-text">Politique de confidentialité</a></li>
        <li class="nav-item"><a href="" class="nav-link text-muted x-nav-footer-text">Conditions d'utilisation</a></li>
        <li class="nav-item"><a href="" class="nav-link text-muted x-nav-footer-text">Informations utilisateur </a></li>
        <li class="nav-item"><a href="" class="nav-link text-muted x-nav-footer-text">Guide de demande juridique</a></li>        
    </ul>
</div>

<div class="container d-flex justify-content-center py-2" >
    <span class="text-muted x-text-copy"> &copy XANOUMI .com | Tous droits réservés.</span>
</div>
</footer>
    <!-- JavaScript -->

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>