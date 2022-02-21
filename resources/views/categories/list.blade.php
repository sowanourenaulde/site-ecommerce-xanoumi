@extends('layouts.template')

@section('content')
    <section class="container-fluid bg-light d-flex flex-column align-items-center justify-content-center py-5">
        <h1 class="x-text-size-sm fs-3 text-uppercase">Toutes les catégories</h1>
        <div class="d-flex justify-content-center">
            <div class="bg-warning  x-deco"></div>
        </div>
      
    </section>



    <div class="row py-5 px-3">

                @if (sizeof($categoriesall) > 0)
                    @foreach ($categoriesall as $categorie)
                        <div class="col-2 mb-3">
                            <a href="{{ route('categorie', ['categorie' => $categorie->libelle]) }}"
                                class="btn x-btn-products x-text-fs4 px-3 w-100 py-2">{{ $categorie->libelle }} <i
                                    class="fas fa-chevron-right ms-3 text-warning"></i> </a>
                        </div>
                    @endforeach
                @endif
    </div>
@endsection