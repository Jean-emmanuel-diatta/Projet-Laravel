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
                        @if(isset($confirmation))
                            @if($confirmation == 1)
                                <div class="alert  alert-success">Ajouté avec succès</div>
                            @else
                                <div class=" alert alert-danger">Echec lors de l'ajout</label>
                                    @endif
                                    @endif
                                    <form method="POST" action="{{route('updatecentre')}}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="form-label"for="id">Identifiant de l'academie</label>
                                            <input class="form-control" readonly="true" type="id" name="id" id="id" value="{{$centre->id}}">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label"for="nom">Nom de l'academie</label>
                                            <input class="form-control" type="text" name="nom" id="nom" value="{{$centre->nom}}">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label"for="adresse">Adresse du centre</label>
                                            <input class="form-control" type="text" name="adresse" id="adresse" value="{{$centre->adresse}}">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label"for="academie">Choisissez l'etablissement</label>
                                            <select class="form-control" name="academie" id="academie">
                                                <option value="0"  class="form-control"> -- Faites votre choix --</option>
                                                @foreach($academies as $academie)
                                                    <option value="{{$academie->id}}"  class="form-control">{{$academie->nomAcademie}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input class="btn btn-success" type="submit" name="editer" id="editer" value="Editer">
                                            <a  href="{{route('updatecentre')}}">
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

