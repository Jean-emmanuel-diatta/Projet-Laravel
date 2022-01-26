@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="form-group">
                <a href="{{route('getallconvocation')}}">
                    <input class="btn btn-primary" name="getallconvocation" id="getallconvocation" value="Liste des Convocations">
                </a>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ajout Convocation</div>
                    <div class="card-body">
                        @if (isset($confirmation))
                            @if($confirmation == 1)
                                <div class="alert alert-success">Convocation ajouté</div>
                            @else
                                <div class="alert alert-danger">Convocation non ajouté</div>
                            @endif
                        @endif
                        <form method="POST" action="/convocation/persist">
                            @csrf
                            <div class="form-group">
                                <label class="form-label"for="libelle">Libelle de la convation</label>
                                <input class="form-control" type="text" name="libelle" id="libelle">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="date">Date de la convocation</label>
                                <input class="form-control" type="date" name="date" id="date">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="enseignant">Choisissez le professeur</label>
                                <select class="form-control" name="enseignant" id="enseignant">
                                    <option value="0"  class="form-control"> -- Faites votre choix --</option>
                                    @foreach($enseignants as $enseignant)
                                        <option value="{{$enseignant->id}}"  class="form-control">{{$enseignant->prenom}}&ensp;{{$enseignant->nom}}</option>
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
