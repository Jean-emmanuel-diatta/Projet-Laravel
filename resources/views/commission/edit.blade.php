@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="form-group">
                <a href="{{route('getallcommission')}}">
                    <input class="btn btn-primary" name="getallcommission" id="getallcommission" value="Liste des Commission">
                </a>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ajout Commission</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('updatecommission')}}">
                            @csrf
                            <div class="form-group">
                                <label class="form-label"for="id">Identifiant de l'academie</label>
                                <input class="form-control" readonly="true" type="id" name="id" id="id" value="{{$commission->id}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label"for="dateDeRencontre">Date De Rencontre</label>
                                <input class="form-control" type="date" name="dateDeRencontre" id="dateDeRencontre"value="{{$commission->dateDeRencontre}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="libelle">libelle</label>
                                <input class="form-control" type="textarea" name="libelle" id="libelle"value="{{$commission->libelle}}">
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
                                <a  href="{{route('getallcommission')}}">
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
