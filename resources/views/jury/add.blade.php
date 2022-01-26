@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="form-group">
                <a href="{{route('getalljury')}}">
                    <input class="btn btn-primary" name="getalljury" id="getalljury" value="Liste des Jury">
                </a>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ajout Jury</div>
                    <div class="card-body">
                        @if (isset($confirmation))
                            @if($confirmation == 1)
                                <div class="alert alert-success">Jury ajouté</div>
                            @else
                                <div class="alert alert-danger">Jury non ajouté</div>
                            @endif
                        @endif
                        <form method="POST" action="/jury/persist">
                            @csrf
                            <div class="form-group">
                                <label class="form-label"for="numero">Numero du jury</label>
                                <input class="form-control" type="text" name="numero" id="numero">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="nomPresidentJury">Nom President Jury</label>
                                <input class="form-control" type="text" name="nomPresidentJury" id="nomPresidentJury">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="centre">Choisissez le centre</label>
                                <select class="form-control" name="centre" id="centre">
                                    <option value="0"  class="form-control"> -- Faites votre choix --</option>
                                    @foreach($centres as $centre)
                                        <option value="{{$centre->id}}"  class="form-control">{{$centre->nom}}</option>
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
