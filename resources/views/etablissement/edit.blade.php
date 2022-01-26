@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="form-group">
                <a href="{{route('getalletablissement')}}">
                    <input class="btn btn-primary" name="getalletablissement" id="getalletablissement" value="Liste des Etablissement">
                </a>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Modification de l'Etablissement</div>
                    <div class="card-body">
                        @if (isset($confirmation))
                            @if($confirmation == 1)
                                <div class="alert alert-success">Etablissement modifié</div>
                            @else
                                <div class="alert alert-danger">Etablissement non modifié</div>
                            @endif
                        @endif
                        <form method="POST" action="{{route('updateetablissement')}}">
                            @csrf
                            <div class="form-group">
                                <label class="form-label"for="id">Identifiant de l'academie</label>
                                <input class="form-control" readonly="true" type="id" name="id" id="id" value="{{$etablissement->id}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label"for="code">Code de l'etablissement</label>
                                <input class="form-control" type="text" name="code" id="code"value="{{$etablissement->code}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="nom">Nom de l'etablissement</label>
                                <input class="form-control" type="text" name="nom" id="nom"value="{{$etablissement->nom}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="adresse">Adresse de l'etablissement</label>
                                <input class="form-control" type="text" name="adresse" id="adresse"value="{{$etablissement->adresse}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="ville">Ville de l'etablissement</label>
                                <input class="form-control" type="text" name="ville" id="ville"value="{{$etablissement->ville}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="academie">Choisissez l'Academie</label>
                                <select class="form-control" name="academie" id="academie">
                                    <option value="0"  class="form-control"> -- Faites votre choix --</option>
                                    @foreach($academies as $academie)
                                        <option value="{{$academie->id}}"  class="form-control">{{$academie->nomAcademie}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-success" type="submit" name="editer" id="editer" value="Editer">
                                <a  href="{{route('getalletablissement')}}">
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
