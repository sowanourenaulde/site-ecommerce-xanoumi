@extends('admin.template')
@section('title', 'Locations')
@section('subtitle' , 'Liste des vehicules loués')
@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
          <h3 class="mb-0">Liste de tous les vehicules loués</h3>
        </div>
        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush table-striped">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="sort" data-sort="user">Client</th>
                <th scope="col" class="sort" data-sort="categorie">Categorie</th>
                <th scope="col" class="sort" data-sort="modele" >Modele</th>
                
                <th scope="col" class="sort" data-sort="date_debut">Date de debut</th>
                <th scope="col" class="sort" data-sort="date prevu rendre">Date de retour</th>
                <th scope="col" class="sort" data-sort="nb_vehicule">Nbr car</th>
               
                <th scope="col" class="sort" data-sort="facture">Facture</th>
                <th scope="col" class="sort" data-sort="statut">Statut</th>
                
              </tr>
            </thead>


            <tbody >

                @foreach($locations as $location)
                <tr>

                    @foreach ($users as $user)

                        @if ($location->user_id==$user->id)
                        <td>{{ $user->name }}</td>
                        @endif
                        
                    @endforeach
                    @foreach ($cars as $car)

                    @if($car->id==$location->vehicule_id)

                        @foreach ($categories as $categorie)
                            @if ($categorie->id==$car->categorie_id)
                            <td>{{ $categorie->libelle }}</td>
                            @endif
                        @endforeach
                        
                        <td> {{ $car->modele }}</td>

                    @endif
                    @endforeach
                    <td>{{ $location->date_debut }}</td>
                    <td>{{ $location->date_end }}</td>
                    <td>{{ $location->nb_vehicules }}</td>
                    <td>{{ $location->facture }} FCFA</td>
                    @php $date=date('Y-m-d');
                            if($location->date_end>$date){
                                echo "<td class='text-success'>En cours</td>";

                            }
                            else {
                                echo "<td class='text-danger'>Voiture rendu</td>";
                            }
                    @endphp</td>
                    
                   

                   
                </tr>
                @endforeach

            </tbody>

          </table>
        </div>
      </div>
    </div>
</div>

@endsection
