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
                    <div class="card-header  bg-primary">Ajout IA</div>
                        <div class="card-body">
                          @if (isset($confirmation))
                              @if($confirmation == 1)
                                  <div class="alert alert-success">Academie ajouté</div>
                                @else
                                    <div class="alert alert-danger">Academie non ajouté</div>
                              @endif
                          @endif
                            <form method="POST" action="/academie/persist">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label"for="nomAcademie">Nom de l'academie</label>
                                    <input class="form-control" type="text" name="nomAcademie" id="nomAcademie">
                                </div>
                                <div class="form-group">
                                    <label class="control-label"for="adresseAcademie">Adresse de l'academie</label>
                                    <input class="form-control" type="text" name="adresseAcademie" id="adresseAcademie">
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
