@extends('admin.template')
@section('title', 'Utilisateurs')
@section('subtitle' , 'Liste des utilisateurs')
@section('content')

<div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
          <h3 class="mb-0">Liste de tous les utilisateurs</h3>
        </div>
        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush table-striped">
            <thead class="thead-light">
              <tr>
               
                <th scope="col" class="sort" data-sort="nom">Nom</th>
                <th scope="col" class="sort" data-sort="email">Email</th>
                <th scope="col" class="sort" data-sort="role">Type d'utilisateur</th>
                <th scope="col" class="sort" data-sort="actions">Actions</th>
            

                
              </tr>
            </thead>
            <tbody >

              @foreach($users as $user)

                <tr>
                 
                  <td>{{$user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->role }}</td>

                  
                  <td>

                    <div class="d-flex justify-content-evently">
                      <a href="#" class=" mr-2 btn btn-sm btn-success"><i class="fa fa-pencil-alt"></i></a>
                      <a href="" class="btn btn-sm btn-danger " type="button" data-toggle="modal" data-target="#{!!  \Illuminate\Support\Str::words($user->name, 1, '') !!}"><i class="fa fa-trash"></i></a>
                    </div>

                 {{-- \Illuminate\Support\Str::words pour
                 pourvoir avoir un identifiant unique pour chaque modal
                 --}}


                 <div class="modal fade"
                    
                     tabindex="-1" role="dialog" id="{!!  \Illuminate\Support\Str::words($user->name, 1, '') !!}"
                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered" role="document">
                         <div class="modal-content">
                             <div class="modal-header">

                                 <h5 class="modal-title font-weight-bold text-danger"
                                     id="exampleModalLongTitle">
                                     Confirmation de la suppression
                                 </h5>
                                 <button type="button" class="close" data-dismiss="modal"
                                     aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                 </button>
                             </div>
                             <div class="modal-body">

                                 <form id="delete-reponse"
                                     action="#"
                                     method=""> @csrf
                                     {{-- @method('DELETE') --}}

                                     <p class="font-weight-bold">Etes-vous sure de vouloir supprimer ce utilisateur?
                                     </p>
                                     <button class="btn btn-success pull-right"
                                         type="submit">Confirmer</button>
                                     <button type="button"
                                         class="btn btn-outline-danger pull-right"
                                         data-dismiss="modal">Annuler</button>

                                 </form>
                             </div>

                         </div>
                     </div>
                 </div>
                      

                  </td>
                </tr>
              @endforeach
              
            </tbody>
          </table>
        </div>
       
      </div>
    </div>
  </div>
    
@endsection
