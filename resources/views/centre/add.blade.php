@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="form-group">
                <a href="{{route('getallcentre')}}">
                    <input class="btn btn-primary" name="getallcentre" id="getallcentre" value="Liste des Centre">
                </a>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ajout Centre</div>
                    <div class="card-body">
                        @if (isset($confirmation))
                            @if($confirmation == 1)
                                <div class="alert alert-success">Centre ajouté</div>
                            @else
                                <div class="alert alert-danger">Centre non ajouté</div>
                            @endif
                        @endif
                        <form method="POST" action="/centre/persist">
                            @csrf
                            <div class="form-group">
                                <label class="form-label"for="nom">Nom du centre</label>
                                <input class="form-control" type="text" name="nom" id="nom">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="adresse">Adresse du centre</label>
                                <input class="form-control" type="text" name="adresse" id="adresse">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="academie">Choisissez l'academie</label>
                                <select class="form-control" name="academie" id="academie">
                                    <option value="0"  class="form-control"> -- Faites votre choix --</option>
                                    @foreach($academies as $academie)
                                        <option value="{{$academie->id}}"  class="form-control">{{$academie->nomAcademie}}</option>
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
