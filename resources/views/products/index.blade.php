@extends('layouts.template')


@section('content')
    <section class="container-fluid bg-light d-flex flex-column align-items-center justify-content-center py-5">
        <h1 class="fs-3">{{ $product->nom }}</h1>
        <div class="d-flex justify-content-center">
            <div class="bg-warning x-deco"></div>
        </div>

    </section>


    <section class="container-fluid mb-5 py-4">
        <div class="row">
            <div class="col-7 d-flex justify-content-center position-relative">
               <div class="xanoumi-circle d-flex align-items-center justify-content-center fw-bold" > <span class="text-warning" >XANOUMI</span> .com </div>
                @isset($product->link3D)
 <div class="sketchfab-embed-wrapper "> <iframe title="[FREE] BAPE x Reebok Club C 85 White Sneaker"
                        frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true"
                        allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking
                        execution-while-out-of-viewport execution-while-not-rendered web-share
                        src="{{$product->link3D.'?ui_infos=0&ui_inspector=0&ui_ar=0&ui_help=0&ui_settings=0&ui_vr=0&ui_annotations=0'}}"
                        class="x-product-iframe"> </iframe> </div>
                @else
                                    <img src="{{ asset($product->image) }}" alt="" class="x-product-img">

                @endisset
            </div>

            <div class="col-5">
                <h1 class="x-text-size-md mb-2">{{ $product->nom }}</h1>

                <div class="x-text-fs4 mb-2">
                    Marque : {{ $product->marque }}
                </div>
                <div class="d-flex mb-2">
                    <i class="fas fa-star text-warning me-1"></i>
                    <i class="fas fa-star text-warning me-1"></i>
                    <i class="fas fa-star text-warning me-1"></i>
                    <i class="far fa-star text-warning me-1"></i>
                    <i class="far fa-star text-warning me-1"></i>

                </div>

                <h3 class="x-text-fs4 ">PRIX</h3>

                <h2 class="x-text-size-xs">{{ $product->prix.' XOF' }}</h2>

                <a href="" class="btn btn-warning rounded-pill p-1 px-3 text-white mb-3"> Ajouter au panier</a>

                <h6>Description du produit </h6>

                <div class="text-justify col-8">
                    {{ $product->description }} </div>

            </div>
        </div>
    </section>
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
