
@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="form-group">
                <a href="{{route('getalleleve')}}">
                    <input class="btn btn-primary" name="getalleleve" id="getalleleve" value="Liste des Eleves">
                </a>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ajout Eleve</div>
                    <div class="card-body">
                        @if (isset($confirmation))
                            @if($confirmation == 1)
                                <div class="alert alert-success">Eleve ajouté</div>
                            @else
                                <div class="alert alert-danger">Eleve non ajouté</div>
                            @endif
                        @endif
                        <form method="POST" action="{{route('updateeleve')}}">
                            @csrf
                            <div class="form-group">
                                <label class="form-label"for="id">Identifiant de l'eleve</label>
                                <input class="form-control" readonly="true" type="id" name="id" id="id" value="{{$eleve->id}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label"for="matricule">Code de l'eleve</label>
                                <input class="form-control" type="text" name="matricule" id="matricule"value="{{$eleve->matricule}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="nom">Nom de l'eleve</label>
                                <input class="form-control" type="text" name="nom" id="nom"value="{{$eleve->nom}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="prenom">Prenom de l'eleve</label>
                                <input class="form-control" type="text" name="prenom" id="prenom"value="{{$eleve->prenom}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="email">Email de l'eleve</label>
                                <input class="form-control" type="text" name="email" id="email"value="{{$eleve->email}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="dateNaissance">L'adresse de l'eleve</label>
                                <input class="form-control" type="date" name="dateNaissance" id="dateNaissance"value="{{$eleve->dateNaissance}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="lieuNaissance">Lieu de Naissance de l'eleve</label>
                                <input class="form-control" type="text" name="lieuNaissance" id="lieuNaissance"value="{{$eleve->lieuNaissance}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="classe">Classe de l'eleve</label>
                                <input class="form-control" type="text" name="classe" id="classe"value="{{$eleve->classe}}">
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
                                <a  href="{{route('getalleleve')}}">
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
