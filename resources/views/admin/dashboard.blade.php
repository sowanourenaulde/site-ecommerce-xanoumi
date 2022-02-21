@extends('admin.template')
@section('subtitle' , 'Dashboard')


@section('cards')
<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">CATEGORIES</h5>
                        <h3 class="font-weight-bold mb-0 display-3">{{ $categorie }}</h3>
                       
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                            <i class="fa fa-th-large" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <span class="text-nowrap font-weight-bold"></span>
                </p>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">PRODUITS</h5>
                        <h3 class="font-weight-bold mb-0 display-3">{{ $products }}</h3>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                            <i class="fa fa-archive" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    
                    <span class="text-nowrap font-weight-bold"></span>
                </p>
            </div>
        </div>

       
    </div>


    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">PRODUITS VENDUS </h5>
                        <h3 class="font-weight-bold mb-0 display-3">30</h3>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-light text-white rounded-circle shadow">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    
                    <span class="text-nowrap font-weight-bold"></span>
                </p>
            </div>
        </div>

       
    </div>
    
   
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">EN STOCK</h5>
                        <h3 class="font-weight-bold mb-0 display-3">20</h3>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    
                    <span class="text-nowrap font-weight-bold"></span>
                </p>
            </div>
        </div>
    </div>
</div>
</div>
</div>
    
@endsection