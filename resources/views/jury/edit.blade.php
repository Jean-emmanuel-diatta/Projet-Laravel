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
                    <div class="card-header">Modification Jury</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('updatejury')}}">
                            @csrf
                            <div class="form-group">
                                <label class="form-label"for="id">Identifiant du jury</label>
                                <input class="form-control" type="text" name="id" id="id" readonly="true" value="{{$jury->id}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label"for="numero">Numero du jury</label>
                                <input class="form-control" type="text" name="numero" id="numero" value="{{$jury->numero}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="nomPresidentJury">Nom President Jury</label>
                                <input class="form-control" type="text" name="nomPresidentJury" id="nomPresidentJury" value="{{$jury->nomPresidentJury}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="centres">Choisissez le centre</label>
                                <select class="form-control" name="centres" id="centres">
                                    <option value="0"  class="form-control"> -- Faites votre choix --</option>
                                    @foreach($centres as $centre)
                                        <option value="{{$centre->id}}"  class="form-control">{{$centre->nom}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-success" type="submit" name="editer" id="editer" value="Editer">
                                <a  href="{{route('getalljury')}}">
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
