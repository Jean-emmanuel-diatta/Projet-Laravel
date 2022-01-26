@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="form-group">
                <a href="{{route('getallinscription')}}">
                    <input class="btn btn-primary" name="getallinscription" id="getallinscription" value="Liste des Inscriptions">
                </a>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ajout Inscription</div>
                    <div class="card-body">
                        @if (isset($confirmation))
                            @if($confirmation == 1)
                                <div class="alert alert-success">Inscription ajoutée</div>
                            @else
                                <div class="alert alert-danger">Inscription non ajoutée</div>
                            @endif
                        @endif
                        <form method="POST" action="/inscription/persist">
                            @csrf
                            <div class="form-group">
                                <label class="form-label"for="numInscription">Numero de l'Inscription</label>
                                <input class="form-control" type="text" name="numInscription" id="numInscription">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="dateDebut">Date debut de l'examen</label>
                                <input class="form-control" type="date" name="dateDebut" id="dateDebut">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="dateFin">Date fin de l'examen</label>
                                <input class="form-control" type="date" name="dateFin" id="dateFin">
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="examen">Choisissez l'EXAMEN</label>
                                <select class="form-control" name="examen" id="examen">
                                    <option value="0"  class="form-control"> -- Faites votre choix --</option>
                                    @foreach($examens as $examen)
                                        <option value="{{$examen->id}}"  class="form-control">{{$examen->nomExamen}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="eleve">Choisissez l'ELEVE</label>
                                <select class="form-control" name="eleve" id="eleve">
                                    <option value="0"  class="form-control"> -- Faites votre choix --</option>
                                    @foreach($eleves as $eleve)
                                        <option value="{{$eleve->id}}"  class="form-control">{{$eleve->prenom}} &nbsp;&nbsp;{{$eleve->nom}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="user">User</label>
                                <input class="form-control" type="text" readonly="true" name="user" id="user" value="{{ Auth::user()->name}}">
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
