@extends('admin.template')
@section('title', 'Categories')
@section('subtitle' , 'Details de la categorie')
@section('content')

<div class="col">
    <div class="card">
      <div class="card-header bg-transparent">
        <div class="row align-items-center">
            <div class="col-8">
                <h3 class="mb-0">Details sur la categorie  : <strong class="text-danger font-weight-bold">{{ $category->libelle }}</strong></h3>
            </div>
            <div class="col-4 text-right">
                <a href="{{ route('categorie.index')}}" class="btn btn-sm btn-dark">Toutes les categories</a>
            </div>
        </div>
      
      </div>
      <div class="card-body">
        <div class="row">
        
          <div class="col-6">
                      

              
              <p class="font-weight-bold">Nom de la categorie : <span class="badge bg-danger text-white">{{ $category->libelle }}</span></p>
              <h3> Description de la categorie :</h3>
              <p class="font-weight-bold x-text-fs3"> <br> {{ $category->description }}</p>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection