@extends('admin.template')
@section('title', 'Categories')
@section('subtitle' , 'Modifier une categorie')
@section('content')

<div class="row">
    <div class="col-xl-4">
        <div class="card">
          <div class="card-header border-0">
            <div class="row align-items-center">
              <div class="col">
                <h3 class="mb-0">Modifier une categorie</h3>
              </div>
              
            </div>
          </div>
          <div class="card-body">
            <form action="{{ route('categorie.update',['categorie' => $cat->id])}}" method="POST" enctype="multipart/form-data">    
              @csrf
             
              @method('PUT')

                <div class="form-group">
                                <label class="form-control-label" for="nom">Nom </label>
                                <input type="text"  name="nom" id="nom" class="form-control" value="{{$cat->libelle}}">
                            </div>
                       

                      
                          

                            <div class="form-group">
                                <label class="form-control-label" for="desc">Description</label>
                    
                               <textarea name="desc_categorie" id="desc" rows="8" class="form-control" >{{ $cat->description }}</textarea>
                            </div>              
                            
                            
                            <div class="container d-flex justify-content-center">
                              <button type="reset" class="btn btn-danger">Annuler</button>
                              <button type="submit" class="btn btn-success">Enregistrer</button>
                          </div>
                       
                    
            </form>
          </div>
        </div>
      </div>

    <div class="col-xl-8">
      <div class="card">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Liste des catégories</h3>
            </div>
            
          </div>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-flush table-striped">
            <thead class="thead-light">
              <tr>
               
                <th scope="col" class="sort" data-sort="image">Image</th>
                <th scope="col" class="sort" data-sort="nom">Nom de la categorie</th>
                <th scope="col" class="sort" data-sort="actions">Actions</th>
                
              </tr>
            </thead>
            <tbody class="list">
              @foreach($categories as $categorie)

                <tr>
                  <td><img src="{{$categorie->file}}" alt="" class="img-custom "></td>
                  <td>{{ $categorie->libelle }}</td>

                  <td>

                    <div class="d-flex justify-content-evently">
                      <a href="{{ route('categorie.show' , ['categorie'=>$categorie->id]) }}" class=" mr-2 btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                      <a href="{{ route('categorie.edit',['categorie'=> $categorie->id]) }}" class=" mr-2 btn btn-sm btn-success"><i class="fa fa-pencil-alt"></i></a>
                      <a href="" class="btn btn-sm btn-danger " type="button" data-toggle="modal" data-target="#{!!  \Illuminate\Support\Str::words($categorie->libelle, 1, '') !!}"><i class="fa fa-trash"></i></a>
                    </div>

                 {{-- \Illuminate\Support\Str::words pour
                 pourvoir avoir un identifiant unique pour chaque modal
                 --}}


                 <div class="modal fade"
                    
                     tabindex="-1" role="dialog" id="{!!  \Illuminate\Support\Str::words($categorie->libelle, 1, '') !!}"
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
                                     action="{{ route('categorie.destroy',['categorie'=>$categorie->id])}}"
                                     method="POST"> @csrf
                                     @method('DELETE')
                                     <p class="font-weight-bold">Etes-vous sure de vouloir supprimer cette categorie?
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