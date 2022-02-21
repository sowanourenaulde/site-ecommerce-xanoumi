@extends('admin.template')
@section('title', 'Produits')
@section('subtitle' , 'Details du produit')
@section('content')

<div class="col">
    <div class="card">
      <div class="card-header bg-transparent">
        <div class="row align-items-center">
            <div class="col-8">
                <h3 class="mb-0">Details sur le produit : <strong class="text-danger font-weight-bold">{{ $product->nom }}</strong></h3>
            </div>
            <div class="col-4 text-right">
                <a href="{{ route('products.index')}}" class="btn btn-sm btn-dark">Tous les produits</a>
            </div>
        </div>
      
      </div>
      <div class="card-body">
        <div class="row">
        <div class="col-6 position-relative">
                       <div class="xanoumi-circle d-flex align-items-center justify-content-center fw-bold" > <span class="text-warning" >XANOUMI</span> .com </div>

            <span class="badge badge-c-success badge-custom border-0">{{ $product->link3D ? ' 3D' : 'Image' }}</span>
            @isset($product->link3D)
 <div class="sketchfab-embed-wrapper "> <iframe title="[FREE] BAPE x Reebok Club C 85 White Sneaker"
                        frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true"
                        allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking
                        execution-while-out-of-viewport execution-while-not-rendered web-share
                        src="{{$product->link3D.'?ui_infos=0&ui_inspector=0&ui_ar=0&ui_help=0&ui_settings=0&ui_vr=0&ui_annotations=0'}}"
                        class="x-iframe"> </iframe> </div>
                @else
              <img src="{{ asset($product->image) }}" alt="{{ $product->modele }}" class="img-fluid">
              @endisset
        </div>

          <div class="col-6 text-dark">
            
              <h3>Categorie du produit :
              <span class="badge bg-danger text-white">@foreach ($categories as $categorie)  @if($categorie->id==$product->categorie_id)  {{ $categorie->libelle }} @endif  @endforeach</span>  </h3>
            

              <p class="font-weight-bold">Nom du produit : <span class="text-warning"> {{ $product->nom }} </span> </p>

              <p class="font-weight-bold">Marque du produit :  {{ $product->marque }}</p>

              <h4> Prix du produit :</h4>

              <button class="btn btn-lg btn-success">{{ $product->prix }} FCFA</button>

              <h3 class="font-weight-bold mt-3 text-warning">Description du produit:</h3>

              <div class="x-text-fs2">{{ $product->description }}</div>

              <div class="x-text-fs1 text-success">Lien 3D : {{ $product->link3D }}</div>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection


@push('scripts')
    <script type="text/javascript" src="https://static.sketchfab.com/api/sketchfab-viewer-1.12.0.js"></script>

    <script type="text/javascript">
        var iframe = document.getElementById('api-frame');
        var uid = '7w7pAfrCfjovwykkEeRFLGw5SXS';

        // By default, the latest version of the viewer API will be used.
        var client = new Sketchfab(iframe);

        // Alternatively, you can request a specific version.
        // var client = new Sketchfab( '1.12.0', iframe );

        client.init(uid, {
            success: function onSuccess(api) {
                api.start();
                api.addEventListener('viewerready', function() {

                    // API is ready to use
                    // Insert your code here
                    console.log('Viewer is ready');

                });
            },
            error: function onError() {
                console.log('Viewer error');
            }
        });
    </script>

@endpush