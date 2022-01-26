@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="form-group">
                <a href="{{route('getallenseignant')}}">
                    <input class="btn btn-primary" name="getallenseignant" id="getallenseignant" value="Liste des Enseignants">
                </a>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ajout Enseignant</div>
                    <div class="card-body">
                        @if (isset($confirmation))
                            @if($confirmation == 1)
                                <div class="alert alert-success">Enseignant ajouté</div>
                            @else
                                <div class="alert alert-danger">Enseignant non ajouté</div>
                            @endif
                        @endif
                        <form method="POST" action="/enseignant/persist">
                            @csrf
                            <div class="form-group">
                                <label class="form-label"for="matricule">Matricule De L'enseignant</label>
                                <input class="form-control" type="text" name="matricule" id="matricule">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="nom">Nom de l'enseignant</label>
                                <input class="form-control" type="text" name="nom" id="nom">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="prenom">Prenom de l'enseignant</label>
                                <input class="form-control" type="text" name="prenom" id="prenom">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="telephone">Telephone de l'enseignant</label>
                                <input class="form-control" type="text" name="telephone" id="telephone">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="adresse">Adresse de l'etablissement</label>
                                <input class="form-control" type="text" name="adresse" id="adresse">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="ville">Ville de l'etablissement</label>
                                <input class="form-control" type="text" name="ville" id="ville">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="etablissement">Choisissez l'etablissement</label>
                                <select class="form-control" name="etablissement" id="etablissement ">
                                    <option value="0"  class="form-control" disabled selected> -- Faites votre choix --</option>
                                    @foreach($etablissements as $etablissement)
                                        <option value="{{$etablissement->id}}"  class="form-control">{{$etablissement->nom}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="commission">Choisissez la commissions</label>
                                <select class="form-control" name="commission" id="commission">
                                    <option value="0"  class="form-control" disabled selected> -- Faites votre choix --</option>
                                    @foreach($commissions as $commission)
                                        <option value="{{$commission->id}}"  class="form-control">{{$commission->libelle}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-success" type="submit" name="envoyer" id="envoyer" value="Envoyer">
                                <input class="btn btn-danger" type="reset" name="annuler" id="annuler" value="Annuler">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
