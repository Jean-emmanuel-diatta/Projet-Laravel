
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
                    <div class="card-header">Modification Enseignant</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('updateenseignant')}}">
                            @csrf
                            <div class="form-group">
                                <label class="form-label"for="id">Identifiant de l'Enseignant</label>
                                <input class="form-control" readonly="true" type="id" name="id" id="id" value="{{$enseignant->id}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label"for="matricule">Matricule de l'Enseignant</label>
                                <input class="form-control" type="text" name="matricule" id="matricule" value="{{$enseignant->matricule}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="nom">Nom de l'Enseignant</label>
                                <input class="form-control" type="text" name="nom" id="nom"value="{{$enseignant->nom}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="prenom">Adresse de l'Enseignant</label>
                                <input class="form-control" type="text" name="prenom" id="prenom"value="{{$enseignant->prenom}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="telephone">Telephone de l'Enseignant</label>
                                <input class="form-control" type="text" name="telephone" id="telephone"value="{{$enseignant->telephone}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="adresse">L'adresse de l'Enseignant</label>
                                <input class="form-control" type="text" name="adresse" id="adresse"value="{{$enseignant->adresse}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="ville">Ville de l'Enseignant</label>
                                <input class="form-control" type="text" name="ville" id="ville"value="{{$enseignant->ville}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="commission">Choisissez une commission</label>
                                <select class="form-control" name="commission" id="commission">
                                    <option value="0"  class="form-control"> -- Faites votre choix --</option>
                                    @foreach($commissions as $commission)
                                        <option value="{{$commission->id}}"  class="form-control">{{$commission->libelle}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="etablissement">Choisissez l'etablissement</label>
                                <select class="form-control" name="etablissement" id="etablissement">
                                    <option value="0"  class="form-control"> -- Faites votre choix --</option>
                                    @foreach($etablissements as $etablissement)
                                        <option value="{{$etablissement->id}}"  class="form-control">{{$etablissement->nom}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-success" type="submit" name="editer" id="editer" value="Editer">
                                <a  href="{{route('getallenseignant')}}">
                                    <input class="btn btn-danger" name="annuler" id="annuler" value="Annuler">
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
