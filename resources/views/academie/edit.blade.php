@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="form-group">
                <a href="{{route('getallacademie')}}">
                    <input class="btn btn-primary" name="getallacademie" id="getallacademie" value="Liste des Academies">
                </a>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ajout IA</div>
                    <div class="card-body">
                                    <form method="POST" action="{{route('updateacademie')}}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="form-label"for="id">Identifiant de l'academie</label>
                                            <input class="form-control" readonly="true" type="id" name="id" id="id" value="{{$academie->id}}">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label"for="nomAcademie">Nom de l'academie</label>
                                            <input class="form-control" type="text" name="nomAcademie" id="nomAcademie" value="{{$academie->nomAcademie}}">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label"for="adresseAcademie">Adresse de l'academie</label>
                                            <input class="form-control" type="text" name="adresseAcademie" id="adresseAcademie" value="{{$academie->adresseAcademie}}">
                                        </div>
                                        <div class="form-group">
                                                <input class="btn btn-success" type="submit" name="editer" id="editer" value="Editer">
                                            <a  href="{{route('getallacademie')}}">
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

