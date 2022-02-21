<nav class="navbar navbar-expand-lg navbar-light bg-white text-dark">
    <div class="container-fluid">
        <a class="navbar-brand mx-4" href="{{ route('accueil') }}"><span class="text-warning">XANOUMI</span> .com</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <div class="col-12">
                    <form action="">
                        <div class="input-group rounded-pill">
                            <input type="search" class="form-control  rounded-pill x-form-control"
                                placeholder="De quoi avez-vous besoin ?">
                            <span class="input-group-text bg-white ms-2 rounded-pill "><i
                                    class="fas fa-search text-muted "></i></span>
                        </div>
                    </form>
                </div>



            </ul>
            <ul class="nav ms-auto me-5 ">
            @guest
                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link text-muted"> <i
                            class="fas fa-user"></i> Connexion </a></li>
            @else
            <li class="nav-item"><a href="{{ route('admin-panel') }}" class="nav-link text-muted"> <i
                            class="fas fa-bars"></i> Tableau de bord </a></li>
            @endguest
                <li class="nav-item"><a href="" class="nav-link text-muted"> <i class="fas fa-shopping-cart"></i>
                        Panier </a></li>
                <li class="nav-item "><a href="" class="nav-link text-muted"> <i
                            class="fas fa-question-circle"></i> Aide </a></li>

            </ul>
        </div>
    </div>
</nav>-


<ul class="nav bg-warning text-white justify-content-around">
    @if (sizeof($categories) > 0)
        @foreach ($categories as $categorie)
            <li class="nav-item"><a href="{{ route('categorie', ['categorie' => $categorie->libelle]) }}" class="nav-link text-white">{{ $categorie->libelle }}</a></li>
        @endforeach
        <li class="nav-item"><a href="{{ route('allcategories') }}" class="nav-link text-white">Toutes les categories</a></li>
    @endif

</ul>
