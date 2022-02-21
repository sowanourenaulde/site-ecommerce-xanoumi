@extends('admin.template')

@section('title', 'Produits')
@section('subtitle', 'Modifier produit')
@section('content')
    <div class="row">

        <div class="col ">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Modifier les informations d'un produit</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('products.index') }}" class="btn btn-sm btn-dark">Tous les produits</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('products.update', ['product' => $product->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h6 class="heading-small text-warning mb-4">informations du produit </h6>
                        <div class="pl-lg-4">
                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Nom du produit</label>
                                        <input type="text" name="nom" id="nom" class="form-control"
                                            value="{{ $product->nom }}">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="marque">Marque du produit</label>
                                        <input type="text" name="marque" id="marque" class="form-control"
                                            value="{{ $product->marque }}">


                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="3Dlink">Lien 3D du produit</label>
                                        <input type="text" name="link3D" id="link3D" class="form-control"
                                            value="{{ $product->link3D }}">


                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="categorie">Categorie du produit</label>
                                        <select name="categorie" id="" class="form-control">

                                            @foreach ($categories as $categorie)
                                                <option value="{{ $categorie->id }}"
                                                    {{ $categorie->id == $product->categorie_id ? 'selected' : 'k,k,k,' }}>
                                                    {{ $categorie->libelle }}</option>



                                            @endforeach

                                        </select>

                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="prix">Prix du produit</label>
                                        <input type="text" name="prix" id="prix" class="form-control"
                                            value="{{ $product->prix }}">


                                    </div>
                                </div>
                            </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="image">Ajouter une image du
                                                product</label>
                                            <input type="file" name="image" id="image" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="image">Ancienne image du product</label>
                                            <img src="{{ $product->image }}" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="description">Description du
                                                produit</label>
                                            <textarea name="description" id="" cols="30" rows="10" class="form-control"
                                                placeholder="Tapez votre texte ici">{{ $product->description }}</textarea>

                                        </div>
                                    </div>
                                </div>



                            </div>
                            <hr class="my-4" />




                            <div class="container d-flex justify-content-center">
                                <button type="reset" class="btn btn-danger">Annuler</button>
                                <button type="submit" class="btn btn-success">Enregistrer</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
