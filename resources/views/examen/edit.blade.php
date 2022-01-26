@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="form-group">
                <a href="{{route('getallexamen')}}">
                    <input class="btn btn-primary" name="getallexamen" id="getallexamen" value="Liste des Examens">
                </a>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ajout Examen</div>
                    <div class="card-body">
                        @if (isset($confirmation))
                            @if($confirmation == 1)
                                <div class="alert alert-success">Examen ajouté</div>
                            @else
                                <div class="alert alert-danger">Examen non ajouté</div>
                            @endif
                        @endif
                        <form method="POST" action="/examen/update">
                            @csrf
                            <div class="form-group">
                                <label class="form-label"for="nomExamen">Nom de l'examen</label>
                                <input class="form-control" type="text" name="nomExamen" id="nomExamen" value="{{$examen->nomExamen}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="dateDebut">Date debut de l'examen</label>
                                <input class="form-control" type="date" name="dateDebut" id="dateDebut" value="{{$examen->dateDebut}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="dateFin">Date fin de l'examen</label>
                                <input class="form-control" type="date" name="dateFin" id="dateFin" value="{{$examen->dateFin}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="academies_id">Choisissez l'Academie</label>
                                <select class="form-control" name="academies_id" id="academies_id">
                                    <option value="0"  class="form-control"> -- Faites votre choix --</option>
                                    @foreach($academies as $academie)
                                        <option value="{{$academie->id}}"  class="form-control">{{$academie->nomAcademie}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-success" type="submit" name="editer" id="editer" value="Editer">
                                <a  href="{{route('getallexamen')}}">
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

