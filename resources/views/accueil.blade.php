@extends('layouts.template')
@push('stylesheets')

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

@endpush
@section('content')
<div class="xd">
    <section class="position-relative">

        <div class="fs-1 text-bold x-name-banner text-white"><span class="text-warning">XANOUMI</span> .com</div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators ">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active x-carousel-img">
                    <img src="{{ asset('img/banner1.jpg') }}" class="x-carousel-img" alt="...">
                </div>
                <div class="carousel-item x-carousel-img">
                    <img src="{{ asset('img/banner2.jpg') }}" class="x-carousel-img" alt="...">
                </div>
                <div class="carousel-item x-carousel-img">
                    <img src="{{ asset('img/banner3.jpg') }}" class="x-carousel-img" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>


    <section class="bg-light  pt-5">
        <div class="container-fluid bg-white p-3 ">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h2 class="text-dark x-text-fs7 text-uppercase">Nos meilleures ventes</h2>
                <div>
                @if (sizeof($cmostselleds) > 0)
                    <a href="{{ route('categorie', ['categorie' => 'meilleures ventes']) }}"
                        class="text-warning text-decoration-none ms-3">Voir plus</a>
                 @endif
                </div>
            </div>
        </div>

        <div class="container-fluid bg-light">
            <div class="row bg-white">

                @if (sizeof($cmostselleds) > 0)

                    @foreach ($cmostselleds as $cmostselled)
                        <div class="x-colproducts">
                            <a href="{{ route('produit', [ 'product' => $cmostselled->id]) }}"
                                class="text-decoration-none text-dark">
                                <div class="card border-0 x-colproducts-card">
                                    <img src="{{ asset($cmostselled->image) }}" alt="" class="x-products-img">
                                    <div class="card-body ps-1">
                                        <div class="card-text mb-2">{{ $cmostselled->nom }}</div>
                                        <div class="d-flex mb-2">
                                            <i class="fas fa-star text-warning me-1"></i>
                                            <i class="fas fa-star text-warning me-1"></i>
                                            <i class="fas fa-star text-warning me-1"></i>
                                            <i class="far fa-star text-warning me-1"></i>
                                            <i class="far fa-star text-warning me-1"></i>

                                        </div>
                                        <h3 class="x-text-fs6"> {{ $cmostselled->prix.' XOF' }} </h3>

                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif






            </div>
        </div>
        <div class="bg-light p-4"></div>
    </section>

    <section class="bg-white p-2">
        <div class="container-fluid bg-white p-3 ">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h2 class="text-dark x-text-fs7 text-uppercase">Nos différentes catégories</h2>
                @if (sizeof($categories) > 1)
                <a href="{{ route('allcategories')}}" class="btn btn-warning text-white text-decoration-none"> Toutes les catégories</a>
                @endif
            </div>

            <div class="row ">

                @if (sizeof($categories) > 0)
                    @foreach ($categories as $categorie)
                        <div class="col-2 mb-3">
                            <a href="{{ route('categorie', ['categorie' => $categorie->libelle]) }}"
                                class="btn x-btn-products x-text-fs4 px-3 w-100 py-2">{{ $categorie->libelle }} <i
                                    class="fas fa-chevron-right ms-3 text-warning"></i> </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>


    <section class="bg-light p-2 py-3">
        <div class="container-fluid bg-light p-3 ">
            <div class="d-flex align-items-center mb-3">
                <h2 class="text-dark x-text-fs7 text-uppercase">Nos meilleures offres</h2>

            </div>

            <div class="row">

                @if (sizeof($cbestoffers) > 0)

                    @foreach ($cbestoffers as $cbestoffer)
                        <div class="col-3">
                            <div class="card border-0 shadow">
                                <img src="{{ asset($cbestoffer->image) }}" alt="" class="x-card-bestseller-img">
                                <div class="card-body">
                                    <h5 class="fs-5 text-dark">{{ $cbestoffer->nom }}</h5>
                                    <a href="{{ route('produit', [ 'product' => $cbestoffer->id]) }}" class="text-success x-text-fs-3 text-decoration-none">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>

        </div>

    </section>

    <section class="bg-white p-2 py-3">
        <div class="container-fluid bg-white p-3 ">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h2 class="text-dark x-text-fs7 text-uppercase">Les plus demandés</h2>
                <div>
                @if (sizeof($mostasks) > 0)
                    <a href="{{ route('categorie', ['categorie' => 'plus demandes']) }}"
                        class="btn btn-success text-white text-decoration-none ms-3">Voir plus</a>
                @endif
                    </div>
            </div>
        </div>

        <div class="container-fluid bg-white">
            <div class="row">
                @if (sizeof($mostasks) > 0)

                    @foreach ($mostasks as $mostask)

                        <div class="x-colproducts">
                            <a href="{{ route('produit', [ 'product' => $mostask->id]) }}"
                                class="text-decoration-none text-dark">
                                <div class="card border-0 x-colproducts-card">
                                    <img src="{{ asset($mostask->image) }}" alt="" class="x-products-img">
                                    <div class="card-body ps-1">
                                        <div class="card-text mb-2">{{ $mostask->nom }}</div>
                                        <div class="d-flex mb-2">
                                            <i class="fas fa-star text-warning me-1"></i>
                                            <i class="fas fa-star text-warning me-1"></i>
                                            <i class="fas fa-star text-warning me-1"></i>
                                            <i class="far fa-star text-warning me-1"></i>
                                            <i class="far fa-star text-warning me-1"></i>

                                        </div>
                                        <h3 class="x-text-fs6">{{ $mostask->prix.'XOF' }}</h3>

                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif




            </div>
        </div>
    </section>

    <div class="bg-warning p-2 py-4 container-fluid"></div>
    <section class="p-4 bg-dark text-center">
        <div>
            <h3 class="text-white">Nos fournisseurs</h3>
        </div>

        <div class="text-white mt-2"><span class="text-warning">XANOUMI</span> .com </div>

        <div class="container px-5 text-white d-flex justify-content-center mt-2">
            <div class="col-6 d-flex justify-content-between">
                <span class="text-white">Bénin</span>
                <span class="text-white">Togo</span>
                <span class="text-white">Nigéria</span>
                <span class="text-white">Burkina-faso</span>
                <span class="text-white">France</span>
                <span class="text-white">Chine</span>
                <span class="text-white">Italie</span>
                <span class="text-white">Australie</span>
                <span class="text-white">Etats-Unis</span>
            </div>
        </div>


    </section>
</div>

<div class="xm>

</div>
@endSection

@push('scripts')

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

    <script>
        $(document).ready(function() {

            var owlstandard = $('.owlstandard');
            var owlactivites = $('.owlactivites');

            owlstandard.owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });

            owlactivites.owlCarousel({
                loop: true,
                nav: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            });
            $('.owlstandardBtnLeft').click(function() {
                owlstandard.trigger('next.owl.carousel');
            });

            $('.owlstandardBtnRight').click(function() {
                owlstandard.trigger('prev.owl.carousel');
            });

            $('.owlactivitesBtnLeft').click(function() {
                owlactivites.trigger('next.owl.carousel');
            });

            $('.owlactivitesBtnRight').click(function() {
                owlactivites.trigger('prev.owl.carousel');
            });


        });
    </script>
@endpush