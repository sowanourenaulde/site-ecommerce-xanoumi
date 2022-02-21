@extends('admin.template')

@section('title', 'Produits')
@section('subtitle', 'Nouveau-produit')
@section('content')
    <div class="row">

        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Ajouter un nouveau produit </h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('products.index') }}" class="btn btn-sm btn-dark">Tous les produits</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h6 class="heading-small text-warning mb-4">informations sur le produit</h6>
                        <div class="pl-lg-4">
                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="nom">Nom du produit</label>
                                        <input type="text" name="nom" id="nom" class="form-control" placeholder="Clé USB">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="marque">Marque du produit</label>
                                        <input type="text" name="marque" id="marque" class="form-control"
                                            placeholder="Samsung">


                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="3Dlink">Lien 3D du produit</label>
                                        <input type="text" name="3Dlink" id="3Dlink" class="form-control">

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="categorie">Categorie du produit</label>
                                        <select name="categorie" id="" class="form-control">
                                            @foreach ($categories as $categorie)
                                                <option value="{{ $categorie->id }}">{{ $categorie->libelle }}</option>
                                            @endforeach

                                        </select>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="image">Ajouter une image du produit</label>
                                        <input type="file" name="image" id="image" class="form-control">
                                    </div>
                                </div>

                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="prix">Prix du produit</label>
                                        <input type="text" name="prix" id="prix" class="form-control">
                                    </div>
                                </div>


                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="description">Description du produit</label>
                                        <textarea name="description" id="" cols="30" rows="10" class="form-control"
                                            placeholder="Tapez votre texte ici"></textarea>

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
