@extends('layouts.template')

@section('content')
    <section class="container-fluid bg-light d-flex flex-column align-items-center justify-content-center py-5">
        <h1 class="x-text-size-sm fs-3 text-uppercase">{{ $categorie }}</h1>
        <div class="d-flex justify-content-center">
            <div class="bg-warning  x-deco"></div>
        </div>
      
    </section>



    <section class="bg-white p-2 py-3">


        <div class="container-fluid bg-white">
            <div class="row">

             @if (sizeof($products) == 0)

 <div class="container-fluid py-5 ">
                        <div class="text-warning h1 text-center"> <i class="fa fa-boxes fa-3x"></i> </div>

            <div class="text-warning text-center x-text-size-fs6">Retrouvez prochainement les produits de cette catégorie</div>
        </div>
             @endif


                @if (sizeof($products) > 0)

                    @foreach ($products as $product)
                        <div class="x-colproducts">
                            <a href="{{ route('produit', ['product' => $product->id]) }}"
                                class="text-decoration-none text-dark">
                                <div class="card border-0 x-colproducts-card">
                                    <img src="{{ asset($product->image) }}" alt="" class="x-products-img">
                                    <div class="card-body ps-1">
                                        <div class="card-text mb-2">{{ $product->nom }}</div>
                                        <div class="d-flex mb-2">
                                            <i class="fas fa-star text-warning me-1"></i>
                                            <i class="fas fa-star text-warning me-1"></i>
                                            <i class="fas fa-star text-warning me-1"></i>
                                            <i class="far fa-star text-warning me-1"></i>
                                            <i class="far fa-star text-warning me-1"></i>

                                        </div>
                                        <h3 class="x-text-fs6">{{ $product->prix.' XOF' }} </h3>

                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif






            </div>
        </div>
    </section>


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
@endsection
